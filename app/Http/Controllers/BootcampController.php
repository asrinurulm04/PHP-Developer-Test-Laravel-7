<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bootcamp;

class BootcampController extends Controller
{
    // Api Read
    public function get_all_bootcamp(){
        return response()->json(Bootcamp::all(), 200);
    }
    // API Insert
    public function insert_data(Request $request){
        $add = new Bootcamp;
        $add->nama_produk=$request->nama_produk;
        $add->harga=$request->harga;
        $add->type_produk=$request->type_produk;
        $add->stok=$request->stok;
        $add->save();
        
        return response()->json([
            'status' => 'OK',
            'message' => 'Data Tersimpan',
            'data' => $add
        ],200);
    }
    // API Update
    public function update_data(Request $request,$id){
        // Check Data Terlebih Dahulu
        $check = Bootcamp::where('id', $id)->first();
        if($check){
            // Jika Data Tersedia
            $update = Bootcamp::find($id);
            $update->nama_produk=$request->nama_produk;
            $update->harga=$request->harga;
            $update->type_produk=$request->type_produk;
            $update->stok=$request->stok;
            $update->save();
            return response()->json([
                'status' => 'OK',
                'message' => 'Data Berhasil Diubah',
                'data' => $update
            ],200);
        } else {
            // jika data tidak tersedia
            return response()->json([
                'status' => 'Not Found',
                'message' => 'Data Tidak Ditemukan',
            ],400);
        }
    }
    // Api Delete
    public function delete($id){
        // Check Data Terlebih Dahulu
        $check = Bootcamp::where('id', $id)->first();
        if($check){
            // Jika Data Tersedia
            Bootcamp::destroy($id);
            return response()->json([
                'status' => 'OK',
                'message' => 'Data Berhasil Dihapus',
            ],200);
        } else {
            // jika data tidak tersedia
            return response()->json([
                'status' => 'Not Found',
                'message' => 'Data Tidak Ditemukan',
            ],400);
        }

    }
}
