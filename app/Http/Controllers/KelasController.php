<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kelas = Kelas::all();

        return view('admin/kelas/index', ['kelas' => $kelas]);
    }

    public function create()
    {
        return view('/admin/kelas/tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jurusan' => 'required',
            'jumlah_siswa' => 'required|numeric',
        ]);

        $kelas = new Kelas();
        $kelas->nama_kelas = $request->nama;
        $kelas->jurusan = $request->jurusan;
        $kelas->jumlah_siswa = $request->jumlah_siswa;
        if ($kelas->save()) {
            return redirect('/admin/kelas');
        }
    }

    public function detail(Request $request)
    {
        $kelas = Kelas::find($request->id);
        return view('/admin/kelas/detail',  ['detail' => $kelas]);
    }

    public function ubah(Request $request)
    {
        $kelas = kelas::find($request->id);
        return view('/admin/kelas/ubah',  ['kelas' => $kelas]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jurusan' => 'required',
            'jumlah_siswa' => 'required|numeric',

        ]);

        $kelas = Kelas::findOrFail($request->id);
        $kelas->nama_kelas = $request->nama;
        $kelas->jurusan = $request->jurusan;
        $kelas->jumlah_siswa = $request->jumlah_siswa;

        if ($kelas->save()) {
            return redirect('/admin/kelas');
        }
    }

    public function delete(Request $request)
    {
        $kelas = Kelas::findOrFail($request->id);

        if (count($kelas->siswa) == 0) {
            $kelas->delete();
            return redirect('/admin/kelas')->with('message', 'Berhasil Menghapus Data');;
        } else {
            return redirect('/admin/kelas')->with('message', 'Gagal Menghapus Data. Pindahkan siswa ke kelas lain terlebih dahulu.');
        }
    }
}