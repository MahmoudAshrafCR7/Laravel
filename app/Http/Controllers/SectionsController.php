<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectionrRequest;
use App\sections;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function index(){
        return view("section");
    }
    public function show ($id){

        $sections = sections::findOrFail($id);
        return view('sections.show',['section'=>$sections]);

    }
    public function delete($id){

        $sections = sections::findOrFail($id);
        $sections->delete();
        return redirect()->route('home')->with('success',"Deleted Successfuly");
    }
    public function create(){
        $sections= sections::all();
        return view('sections.create' , ['mans'=>$sections]);
    }
    public function store(SectionrRequest $request){

        $image = $request->sec_image;
        $imagename="";
        if($request->hasFile('sec_image')){

            $imagename = rand(1,10000)."_".time().".". $image->extension();
            $image->move(public_path("img/sections"),$imagename);
        }

        sections::create([
            'id'=>$request->id,
            'sec_image'=>$imagename,
            'name_en'=>$request->name_en,
            'name_ar'=>$request->name_ar,
            'descripton_en'=>$request->descripton_en,
            'descripton_ar'=>$request->descripton_ar,
            'status'=>$request->status,
        ]);
        return redirect()->route('home')->with('success',"Created Successfully");
    }
    public function edit($id){

        $sections= sections::findOrFail($id);
        $alldata= sections::all();
        return view('sections.edit',['moda'=>$sections,'alldata'=>$alldata]);
    }

    public function update(SectionrRequest $request){

        $old_id = $request->old_id;
        $sections = sections::findOrFail($old_id);
        $image = $request->sec_image;
        $imagename="";
        if($request->hasFile('sec_image')){

            $imagename = rand(1,10000)."_".time().".". $image->extension();
            $image->move(public_path("img/sections"),$imagename);
        }else{
            $imagename = $sections->sec_image;
        }

        $sections->update([

            'id'=>$request->id,
            'sec_image'=>$imagename,
            'name_en'=>$request->name_en,
            'name_ar'=>$request->name_ar,
            'descripton_en'=>$request->descripton_en,
            'descripton_ar'=>$request->descripton_ar,
            'status'=>$request->status,

        ]);

        return redirect()->route('home')->with('success','Updated Successfully');
    }

    }

