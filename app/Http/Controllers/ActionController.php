<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statue;

class ActionController extends Controller
{
    public function add(Request $request) 
    {
        Statue::addOne($request);
        return redirect('list');
    }
    public function delete(Request $request) 
    {
        Statue::deleteOne($request);
        return redirect('list');
    }
    public function updateOne(Request $request) 
    {
        Statue::updateOne($request);
        return redirect('list');
    }
}
