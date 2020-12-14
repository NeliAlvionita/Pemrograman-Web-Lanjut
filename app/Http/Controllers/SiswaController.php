<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $siswa = Siswa::all();

        return view('admin/siswa/index', ['siswa'=> $siswa]);
    }

    public function create()
    {
        $listKelas = Kelas::all();
        return view('/admin/siswa/tambah', ['listKelas' => $listKelas]);
    }

   public function store(Request $request)
   {
    $siswa = new Siswa();

    $this->validate($request, [
        'nama' => 'required',
        'tgl_lahir' => 'required|date',
        'tahun_ajar' => 'required|numeric',
        'id_kelas' => 'required|numeric'
    ]);

    $siswa->nama = $request->nama;
    $siswa->tgl_lahir = $request->tgl_lahir;
    $siswa->tahun_ajar = $request->tahun_ajar;
    $siswa->kelas_id = $request->id_kelas;

    if ($siswa->save()) {
        return redirect('/admin/siswa');
    }
   }

   public function detail(Request $request)
   {
       $siswa = siswa::find($request->id);
       return view('/admin/siswa/detail',  ['siswa'=> $siswa]);
   }

   public function ubah(Request $request)
   {
    $siswa = siswa::find($request->id);
    $listKelas = Kelas::all();
    return view('/admin/siswa/ubah',  ['siswa'=> $siswa,'listKelas' => $listKelas]);
   }

   public function update(Request $request){
    $siswa = Siswa::find($request->id);

    $this->validate($request, [
        'nama' => 'required',
        'tgl_lahir' => 'required|date',
        'tahun_ajar' => 'required|numeric',
        'id_kelas' => 'required|numeric'
    ]);

    $siswa->nama = $request->nama;
    $siswa->tgl_lahir = $request->tgl_lahir;
    $siswa->tahun_ajar = $request->tahun_ajar;
    $siswa->kelas_id = $request->id_kelas;

    if ($siswa->save()) {
        return redirect('/admin/siswa');
    }
   }

   public function delete(Request $request)
   {
    $siswa = Siswa::find($request->id);
    if ($siswa->delete()) {
        return redirect('/admin/siswa');
    }
   }
}
