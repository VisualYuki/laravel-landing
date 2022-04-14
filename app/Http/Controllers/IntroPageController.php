<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IntroSliders;
use Illuminate\Support\Facades\DB;

class IntroPageController extends Controller {
    public function index() {

        //DB::table
        //$sliderInfo = IntroSliders::all();
        $sliderInfo = DB::select('select * from intro_sliders');
        IntroSliders::create(["title" => "title1", "text" => "text-1"]);
        IntroSliders::find(1)->update(["title" => "title-2", "text" => "text-2"]);
        return view('pages/intro', ["sliderInfo" => $sliderInfo, "payload" => "hello from routes/web"]);
    }
}
