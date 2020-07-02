<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\ItemModel;


class ItemController extends Controller
{
    //
    public function index(){
        $items = ItemModel::get_all();
        return view('item.index', compact('items'));
    }
}
