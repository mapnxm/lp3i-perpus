<?php

namespace App\Http\Controllers;

use App\Models\daftarbuku;
use App\Models\rentlogs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class data_peminjam extends Controller
{
    public function index(){
        $data = rentlogs::all();
        // dd($data);
        return view('dipinjam', compact(['data']));
    }

    public function store(Request $request){
        $buku = daftarbuku::find($request->kode);

        if ($buku != null) {
            $request['kode'] = $buku['kode'];
            $request['JudulBuku'] = $buku['nama'];
        }
        $request['tglPinjam'] = Carbon::now()->toDateString();
        $request['tglKembali'] = $request->kembali;
        if ($buku != null) {
            if($buku['status'] != "1"){
                toastr()->error('Buku yang di maksud sedang di pinjam', 'Tidak bisa di pinjam');
                return redirect('/');
            }else{
                try {
                    DB::beginTransaction();
                    rentlogs::create($request->all());
                    $buku->status = "0";
                    $buku->save();
                    DB::commit();
                    toastr()->success('Berhasil meminjam', 'Selamat');
                    return redirect('/');
                    // dd($request->all());
                } catch (\Throwable $th) {
                    toastr()->error('Ada sesuatu yang tidak beres', 'Gagal menginput data');
                    return redirect('/');
                }
            }
        }
        toastr()->error('Ada sesuatu yang tidak beres', 'Gagal menginput data');
        return redirect('/');
    }

    public function delete($id){
        $data = rentlogs::find($id);
        $hasil = $data['kode'];
        DB::table('rent_logs')->where('id', $id)->delete();
        DB::table('daftarbuku')->where('kode', $hasil)->update(['status' => "1",]);
        toastr()->success('Buku berhasil di hapus', 'Selamat');
        return redirect('/buku_dipinjam');
    }

}
