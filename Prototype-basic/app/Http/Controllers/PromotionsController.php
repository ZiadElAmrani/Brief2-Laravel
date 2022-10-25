<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionsController extends Controller
{
    public function index()
    {
        $data = promotion::all();
        return view('index', compact("data"));
    }

    public function add_promotion()
    {
        return view('add_promotion');
    }

    public function insert_promotion(Request $req)
    {
        $obj = new Promotion();
        $obj->name = $req->name;
        $obj->save();
        return redirect('promotions');
    }
}
