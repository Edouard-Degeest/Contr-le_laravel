<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Statue extends Model
{
    public static function addOne($request) {

        $statue = new Statue;

        $statue->title = $request->title;
        $statue->date = $request->date;
        $statue->origine = $request->origine;
        $statue->prix = $request->prix;
        $statue->artiste = $request->artiste;
        $statue->save();
        return;
    }

        public static function deleteOne($request){
            Statue::destroy($request->id);
            return;
        }
        public static function getAll(){
            $statue = DB::table('statues')->select('*')->get();
            return $statue;
    
        }
        public static function getOne($request) {
            return Statue::find($request->id);
        }
    
        public static function updateOne($request) {
            $statue = Statue::find($request->id);
            $statue->title = $request->title;
            $statue->date = $request->date;
            $statue->origine = $request->origine;
            $statue->prix = $request->prix;
            $statue->artiste = $request->artiste;
            $statue->save();
            return;
        }

    }

