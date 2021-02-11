<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public static function menulist()
    {
        return Menu::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getsetting()
    {
        return Setting::first();
    }



    //
    public function index()
    {
        $setting =Setting::first();
        return view('home.index',['setting' => $setting]);
    }

    public function aboutus()
    {
        return view('home.about');
    }
    //

    public function contact()
    {
        return view('home.about');
    }
    public function referances()
    {
        return view('home.about');
    }

    public function test($id, $name)
    {
        return view('home.test',['id'=>$id, 'name'=>$name]);
        /*
        echo "Id Number:", $id;
        echo "<br> Name:", $name;
        for ($i=1;$i<=$id;$i++)
        {
            echo "<br> $i - $name ";
        }
        */
    }

}
