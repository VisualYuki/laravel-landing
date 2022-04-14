<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Flight;

class ContactsController extends Controller
{
    public function index()
    {
        //$firstTableRow = Contacts::find(1);
        //dd($firstTableRow->phone);
        //dd(Flight::all());
        return view('pages/advantages');
    }
}
