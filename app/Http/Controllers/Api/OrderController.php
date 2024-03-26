<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Http\Resources\OrderResource;
use App\Order;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index(){

        $orders = OrderResource::collection(Order::all());

        $data =[

            "Message"=> "This Api Return All Data",
            "Status"=>200,
            "Data"=>$orders
        ];



        return response($data);


    }

    public function show ($id){

        $orders = Order::find($id);
        if($orders){
        $data =[

            "Message"=> "This Api Return one record",
            "Status"=>200,
            "Data"=> new OrderResource($orders)
        ];
        return response($data);
    }else{
        $data =[
            "Message"=> "This ID not found",
            "Status"=>201,
            "Data"=> null
        ];
        return response($data);
    }
    }

    public function store(Request $request){


        $ValidData= Validator::make($request->all(),[

            'id' => 'required|unique:orders|max:255',
            'title_en' => 'required|max:20|min:5',
            'title_ar' => 'required |max:20|min:5',
            'description_en' => 'required',
            'description_ar' => 'required',
            'ord_image' => 'required|image|mimes:png,jpg|max:2048'

        ]);

        if($ValidData->fails()){
            $data =[
                "Message"=> "Error",
                "Status"=>210,
                "Data"=>$ValidData->errors()
            ];
            return response($data);
        }




        $image = $request->ord_image;
        $imagename="";
        if($request->hasFile('ord_image')){

            $imagename = rand(1,10000)."_".time().".". $image->extension();
            $image->move(public_path("img/orders"),$imagename);
        }

       $newdata = Order::create([

            'id'=>$request->id,
            'ord_image'=>$imagename,
            'title_en'=>$request->title_en,
            'title_ar'=>$request->title_ar,
            'description_en'=>$request->description_en,
            'description_ar'=>$request->description_ar,
            'parent_id'=>$request->parent_id,
        ]);
        $data =[
            "Message"=> "One Row created successfully",
            "Status"=>200,
            "Data"=>$newdata
        ];
        return response($data);
    }


    public function delete(Request $request){

        $id = $request->id;

        $orders = Order::find($id);
        if($orders){
            $orders->delete();
            $data =[
                "Message"=> "Deleted Successfully",
                "Status"=>200,
                "Data"=> null
            ];
            return response($data);
        }else{
            $data =[
                "Message"=> "This ID not found",
                "Status"=>210,
                "Data"=> null
            ];
            return response($data);
        }
    }

    public function update(Request $request){




        $ValidData= Validator::make($request->all(),[

            'id' => 'required|unique:orders|max:255',
            'title_en' => 'required|max:20|min:5',
            'title_ar' => 'required |max:20|min:5',
            'description_en' => 'required',
            'description_ar' => 'required',
            'ord_image' => 'required|image|mimes:png,jpg|max:2048'

        ]);

        if($ValidData->fails()){
            $data =[
                "Message"=> "Error",
                "Status"=>210,
                "Data"=>$ValidData->errors()
        ];
            return response($data);
        }

        
        $old_id = $request->old_id;
        $orders = Order::findOrFail($old_id);
        $image = $request->ord_image;
        $imagename="";
        if($request->hasFile('ord_image')){

            $imagename = rand(1,10000)."_".time().".". $image->extension();
            $image->move(public_path("img/orders"),$imagename);
        }else{
            $imagename = $orders->ord_image;
        }

        $orders->update([

            'id'=>$request->id,
            'ord_image'=>$imagename,
            'title_en'=>$request->title_en,
            'title_ar'=>$request->title_ar,
            'description_en'=>$request->description_en,
            'description_ar'=>$request->description_ar,
            'parent_id'=>$request->parent_id,

        ]);
        $data =[
            "Message"=> "This ID not found",
            "Status"=>210,
            "Data"=> $orders
        ];
        return response($data);

    }

}

