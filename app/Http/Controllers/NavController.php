<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statue;

class NavController extends Controller
{
    public function page1()
    {
        return view('/');
    }

    public function add()
    {
        return view('add');
    }
    public function list()
    {
        $statue = Statue::getAll();
        return view('list', ['statue' => $statue]);
    }
    public function edit($id)
    {
        $statue = Statue::findOrFail($id);
        return view ('edit', compact('statue'));
    }
}
