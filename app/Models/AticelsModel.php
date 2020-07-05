<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArticelsModel {
    public static function get_all(){
        $articels = DB::table('articels')->get();
        return $articels;
    }

    public static function save($data){
        $new_articel = DB::table('articels')->insert($data);
        return $new_articel;
    }
}
?>