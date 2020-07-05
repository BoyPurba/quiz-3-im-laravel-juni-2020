<?php

namespace App\Models;
Use Illuminate\Support\Facades\DB;




class ArtikelModel {
    public static function get_all() {
        $items = DB::table('artikels')->get();
        return $items;
    } 

    public static function save($data) {
        $new_item = DB::table('artikels')->insert($data);
        return $new_item;
    }

    public static function find_by_id($id) {
        $item = DB::table('artikels')->where('id', $id)->first();
        return $item;
    }

    public static function update($id, $request) {
        $item = DB::table('artikels')
                    ->where('id', $id)
                    ->update([
                        'judul' => $request["judul"],
                        'isi' => $request["isi"],
                        'slug' => $request["slug"],
                        'tag' => $request["tag"]
                    ]);
    }

    public static function delete($id) {
        $item = DB::table('artikels')->where('id', $id)->delete();
        return 'delete';
    }
}

?>