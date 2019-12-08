<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function home()
    {
        return view('admin.beranda');
    }

    public function semua()
    {
        return view('admin.daftar-surat');
    }

    public function sunting($id)
    {
        $surat = Persuratan::find($id);

        return view("admin.sunting.$surat->jenis_surat", [
            'surat' => $surat, "program_studi" => \App\ProgramStudi::all(),
            'pemohon' => $surat->pemohon
            ]);
    }

    public function pengaturan()
    {
        // code...
    }

    public function simpanPengaturan()
    {
        // code...
    }

    public function pengaturanSurat()
    {
        // code...
    }

    public function simpanSurat()
    {
        // code...
    }
}
