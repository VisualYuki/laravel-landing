<?php

namespace App\Http\Controllers;

use App\Models\ServicesPage;
use Illuminate\Http\Request;

class ServicesPageController extends Controller
{
    public function index() {
//        ServicesPage::create(["title" => "title-1", "text" => "text-1"]);
//        ServicesPage::create(["title" => "title-2", "text" => "text-2"]);
//        ServicesPage::create(["title" => "title-3", "text" => "text-3"]);
        return view('pages/services', ["payback" => ServicesPage::all()]);
    }
}
