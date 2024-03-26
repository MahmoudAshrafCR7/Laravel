<?php

namespace App\Http\Controllers;

use App\Order;
use App\sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()


    {
        $orders= DB::table('orders')->select("id","title_".app()->getLocale()." as title","description_".app()->getLocale()." as description","ord_image","created_at","parent_id")->get();
        $sections= DB::table('sections')->select("id","name_".app()->getLocale()." as name","descripton_".app()->getLocale()." as descripton","sec_image","status","created_at")->get();
        return view('home',["ahmed"=>$orders,"mohamed"=>$sections]);
    }
}
