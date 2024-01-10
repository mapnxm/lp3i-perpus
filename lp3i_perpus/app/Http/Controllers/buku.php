<?php

namespace App\Http\Controllers;

use App\Models\daftarbuku;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class buku extends Controller
{
    public function index(){
        $buku = daftarbuku::all();
        return view('list_buku', compact(['buku']));
    }

    public function store(Request $request){
        DB::table('daftarbuku')->insert([
            'nama' =>$request->JudulBuku,
            'kode' =>$request->kode,
            'penulis' =>$request->penulis,
        ]);
        toastr()->success('Buku berhasil di input', 'Selamat');
        return redirect('/list_buku');
    }

    public function edit($id){
        $edit = daftarbuku::find($id);
        return view('edit', compact(['edit']));
    }

    public function update(Request $request){
        DB::table('daftarbuku')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'kode' => $request->kode,
            'penulis' => $request->penulis,
            'status' => $request->status
        ]);
        toastr()->success('Buku berhasil di edit', 'Selamat');
        return redirect('/list_buku');
    }

    public function delete($id) {
        DB::table('daftarbuku')->where('id', $id)->delete();
        toastr()->success('Buku berhasil di hapus', 'Selamat');
        return redirect('/list_buku');
    }

    public function status(Request $request){
        $data = daftarbuku::Find($request->id);
        // dd($data);
        if($data['status'] != "0" ) {
            $data->status = "0";
            $data->save();
            DB::commit();
        }else{
            $data->status = "1";
            $data->save();
            DB::commit();
        }
        toastr()->success('Buku berhasil di update', 'Selamat');
        return redirect('/list_buku');
    }


}
