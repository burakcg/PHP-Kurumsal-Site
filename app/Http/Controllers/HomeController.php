<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public static function allContent()
    {
        return Content::all();
    }

    public static function sliderContents()
    {
        return Image::take(3)->get();
    }

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
        $slider = Content::select('title','image')->limit(4)->get();
        $data = [
          'setting'=>$setting,
          'slider'=>$slider,
          'page'=>'home'
        ];
        return view('home.index',$data);
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

    public function games($id){
        $menu = Menu::find($id);
        $games = Content::Where('menu_id', $id)->get();
        return view('home.games',['games' => $games, 'menu' => $menu]);
    }

    public function videos($id){
        $menu = Menu::find($id);
        $games = Content::Where('menu_id', $id)->get();
        return view('home.games',['games' => $games, 'menu' => $menu]);
    }
    public function news($id){
        $menu = Menu::find($id);
        $games = Content::Where('menu_id', $id)->get();
        return view('home.games',['games' => $games, 'menu' => $menu]);
    }

    public function game_detail($id){
        return view("home.detail", [
            'game' => Content::find($id)
        ]);

    }


    public function user_comments() {
        return view("home.user_comments");

    }

    public function user_reviews() {
        return view("home.user_reviews");

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
