<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index(){
        return view("order");
    }
    public function show ($id){

        $orders = Order::findOrFail($id);
        return view('orders.show',['moda'=>$orders]);

    }

    public function delete($id){

        $orders = Order::findOrFail($id);
        $orders->delete();
        return redirect()->route("home")->with('success',"Deleted Successfuly");


    }
    public function create(){
        $orders = Order::all();
        return view('orders.create',['moda'=>$orders]);

    }
    public function store(OrderRequest $request){

        $image = $request->ord_image;
        $imagename="";
        if($request->hasFile('ord_image')){

            $imagename = rand(1,10000)."_".time().".". $image->extension();
            $image->move(public_path("img/orders"),$imagename);
        }

        Order::create([

            'id'=>$request->id,
            'ord_image'=>$imagename,
            'title_en'=>$request->title_en,
            'title_ar'=>$request->title_ar,
            'description_en'=>$request->description_en,
            'description_ar'=>$request->description_ar,
            'parent_id'=>$request->parent_id,
        ]);
        return redirect()->route('home')->with('success',"Created Successfully");
    }

    public function edit($id){
        $orders= Order::findOrFail($id);
        $alldata= Order::all();
        return view('orders.edit',['moda'=>$orders,'alldata'=>$alldata]);
    }
      public function update(OrderRequest $request){

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

        return redirect()->route('home')->with('success','Updated Successfully');
    }
}
