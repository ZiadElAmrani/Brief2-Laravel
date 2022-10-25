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

    /* public function edit_promotion($id)
    {
        $data = Promotion::select(
            'promotions.id as id_prom',
            'promotions.name as nom_prom',
        );
        return view('edit_promotion', compact("data"));
    }

    public function update_promotion($id, Request $req){
        $promo = Promotion::where('id', $id)->first();
        $promo->name = $req->name;
        $promo->save();
        return redirect('promotion');
    } */

    public function delete_promotion(Request $req)
    {
        Promotion::where('id', $req->id)->delete();
        return redirect('promotions');
    }

    public function search_prom($name = "")
    {
        $data = promotion::where('name', 'like', '%' . $name . '%')->get();
        return view('search_prom', compact('data'));
    }
}
