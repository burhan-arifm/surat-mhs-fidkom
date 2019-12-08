<?php

namespace App\Http\Controllers;

use App\Persuratan as Surat;
use Illuminate\Http\Request;

class Persuratan extends Controller
{
    public function formPengajuan($kode_surat)
    {
        try {
            return view("surat.form.$kode_surat", ['program_studi' => \App\ProgramStudi::all()]);
        } catch (\Throwable $th) {
            abort(404);
        }
    }

    public function ajukan(Request $request)
    {
        $mahasiswa = \App\Mahasiswa::updateOrCreate(
            ['nim' => $request->nim],
            ['nama' => $request->nama_mahasiswa,
             'tempat_tanggal_lahir' => \Carbon\Carbon::parseFromLocale($request->tanggal_lahir, config('app.locale'))->format("Y-m-d"),
             'program_studi' => $request->program_studi,
             'alamat' => $request->alamat]
        );
        $pemohon = $mahasiswa->nim;

        switch ($request->tipe_surat) {
            case 'job-training':
            case 'ppm':
                $detail = \App\JobTrainingPPM::create([
                    'instansi_penerima' => $request->instansi_penerima,
                    'alamat_instansi' => $request->alamat_instansi,
                    'dosen_pembimbing' => $request->dosen_pembimbing
                ]);
                break;
            case 'izin-observasi':
                $detail = \App\IzinObservasi::create([
                    'instansi_penerima' => $request->instansi_penerima,
                    'alamat_instansi' => $request->alamat_instansi,
                    'dosen_pembimbing' => $request->dosen_pembimbing,
                    'topik_penelitian' => $request->topik_penelitian
                ]);
                break;
            case 'izin-praktik':
                $detail = \App\IzinPraktik::create([
                    'instansi_penerima' => $request->instansi_penerima,
                    'alamat_instansi' => $request->alamat_instansi,
                    'mata_kuliah' => $request->mata_kuliah,
                    'dosen_pengampu' => $request->dosen_pengampu
                ]);
                break;
            case 'izin-riset':
                $detail = \App\IzinRiset::create([
                    'instansi_penerima' => $request->instansi_penerima,
                    'alamat_instansi' => $request->alamat_instansi,
                    'topik_penelitian' => $request->topik_penelitian,
                    'pembimbing_1' => $request->pembimbing_1,
                    'pembimbing_2' => $request->pembimbing_2
                ]);
                break;
            
            default:
                break;
        }

        $surat_terakhir = (Surat::whereYear('created_at', \Carbon\Carbon::now()->year)->count() != 0) ? Surat::whereYear('created_at', \Carbon\Carbon::now()->year)->latest()->first()->nomor_surat : 0;
        $surat = Surat::create([
            'nomor_surat' => $surat_terakhir + 1,
            'jenis_surat' => $request->tipe_surat,
            'pemohon' => $pemohon,
            'surat' => $detail->id,
            'status_surat' => "Belum Diproses",
            'tanggal_terbit' => \Carbon\Carbon::now()->format('LL')
        ]);
        event(new \App\Events\SuratDiajukan($surat));

        return view('welcome');
    }

    public function semua()
    {
        $persuratan = Surat::all();
        $letters = [];

        foreach ($persuratan as $surat) {
            $time = \Carbon\Carbon::createFromTimeString($surat->updated_at);
            $nomor_surat = sprintf("B-%04u/Un.05/III.4/TL.10/%02u/%u", $surat->nomor_surat, $time->month, $time->year);
            if ($surat->jenis == 'izin-kunjungan') {
                $surat_simplified = array(
                    'id' => $surat->id,
                    'nomor_surat' => $nomor_surat,
                    'jenis_surat' => $surat->jenis->jenis_surat,
                    'identitas' => $surat->izin_kunjungan->program_studi,
                    'pemohon' => $surat->izin_kunjungan->kelas,
                    'waktu_readable' => $time->isoFormat('LLLL'),
                    'waktu' => $surat->updated_at
                );
            } else {
                $surat_simplified = array(
                    'id' => $surat->id,
                    'nomor_surat' => $nomor_surat,
                    'jenis_surat' => $surat->jenis->jenis_surat,
                    'identitas' => $surat->mahasiswa->nim,
                    'pemohon' => $surat->mahasiswa->nama,
                    'waktu_readable' => $time->isoFormat('LLLL'),
                    'waktu' => $surat->updated_at
                );
            }
            
            $letters[] = $surat_simplified;
        }

        return $letters;
    }

    public function terbaru()
    {
        $persuratan =  Surat::where('status_surat', "Belum Diproses")->get();
        $letters = [];

        foreach ($persuratan as $surat) {
            $time = \Carbon\Carbon::createFromTimeString($surat->updated_at);
            $nomor_surat = sprintf("B-%04u/Un.05/III.4/TL.10/%02u/%u", $surat->nomor_surat, $time->month, $time->year);
            if ($surat->jenis == 'izin-kunjungan') {
                $surat_simplified = array(
                    'id' => $surat->id,
                    'nomor_surat' => $nomor_surat,
                    'jenis_surat' => $surat->jenis->jenis_surat,
                    'identitas' => $surat->izin_kunjungan->program_studi,
                    'pemohon' => $surat->izin_kunjungan->kelas,
                    'waktu_readable' => $time->isoFormat('LLLL'),
                    'waktu' => $surat->updated_at
                );
            } else {
                $surat_simplified = array(
                    'id' => $surat->id,
                    'nomor_surat' => $nomor_surat,
                    'jenis_surat' => $surat->jenis->jenis_surat,
                    'identitas' => $surat->mahasiswa->nim,
                    'pemohon' => $surat->mahasiswa->nama,
                    'waktu_readable' => $time->isoFormat('LLLL'),
                    'waktu' => $surat->updated_at
                );
            }
            
            $letters[] = $surat_simplified;
        }

        return $letters;
    }

    public function detail($id)
    {
        $surat = Surat::find($id);
        $batch = substr($surat->mahasiswa->nim, 1, 2);
        $enroll = \Carbon\Carbon::createFromFormat('j n y', "1 7 $batch", config('app.timezone'));
        $time = \Carbon\Carbon::now();
        $roman_semester = int_to_roman($enroll->diffInMonths($time) / 6 + 1);
        $formatter = new \NumberFormatter(config('app.locale'), \NumberFormatter::SPELLOUT);
        $word_semester = $formatter->format(ceil($enroll->diffInMonths($time) / 6));
        $semester = "$roman_semester ($word_semester)";

        return view("admin.detail.$surat->jenis_surat", ['surat' => $surat, 'semester' => $semester]);
    }

    public function cetak($id)
    {
        $surat = Surat::find($id);
        $surat->status_surat = "Telah Diproses";
        $surat->save();
        $surat->perihal = html_entity_decode($surat->jenis->perihal);
        $batch = substr($surat->mahasiswa->nim, 1, 2);
        $enroll = \Carbon\Carbon::createFromFormat('j n y', "1 7 $batch", config('app.timezone'));
        $time = \Carbon\Carbon::now();
        $roman_semester = int_to_roman($enroll->diffInMonths($time) / 6 + 1);
        $formatter = new \NumberFormatter(config('app.locale'), \NumberFormatter::SPELLOUT);
        $word_semester = $formatter->format(ceil($enroll->diffInMonths($time) / 6));
        $semester = "$roman_semester ($word_semester)";
        $surat->nomor_surat = sprintf("B-%04u/Un.05/III.4/TL.10/%02u/%u", $surat->nomor_surat, $time->month, $time->year);
        $surat->tanggal_terbit = $time->isoFormat('LL');
        event(new \App\Events\SuratDiproses($surat));

        return view("surat.cetak.$surat->jenis_surat", ['surat' => $surat, 'semester' => $semester]);
    }

    public function simpanSunting($id, Request $request)
    {
        $surat = Surat::find($id);
        $mahasiswa = \App\Mahasiswa::updateOrCreate(
            ['nim' => $request->nim],
            ['nama' => $request->nama_mahasiswa,
             'tempat_tanggal_lahir' => \Carbon\Carbon::parseFromLocale($request->tanggal_lahir, config('app.locale'))->format("Y-m-d"),
             'program_studi' => $request->program_studi,
             'alamat' => $request->alamat]
        );
        $pemohon = $mahasiswa->nim;

        switch ($request->tipe_surat) {
            case 'job-training':
            case 'ppm':
                \App\JobTrainingPPM::whereId($surat->surat)->update([
                    'instansi_penerima' => $request->instansi_penerima,
                    'alamat_instansi' => $request->alamat_instansi,
                    'dosen_pembimbing' => $request->dosen_pembimbing
                ]);
                break;
            case 'izin-observasi':
                \App\IzinObservasi::whereId($surat->surat)->update([
                    'dosen_pembimbing' => $request->dosen_pembimbing,
                    'topik_penelitian' => $request->topik_penelitian
                ]);
                break;
            case 'izin-praktik':
                \App\IzinPraktik::whereId($surat->surat)->update([
                    'mata_kuliah' => $request->mata_kuliah,
                    'dosen_pengampu' => $request->dosen_pengampu
                ]);
                break;
            case 'izin-riset':
                \App\IzinRiset::whereId($surat->surat)->update([
                    'topik_penelitian' => $request->topik_penelitian,
                    'pembimbing_1' => $request->pembimbing_1,
                    'pembimbing_2' => $request->pembimbing_2
                ]);
                break;
            
            default:
                break;
        }

        $nomor = explode("/", $request->nomor_surat);
        $nomor_surat = explode("-", $nomor[0]);
        $surat->update([
            'nomor_surat' => intval($nomor_surat[1]),
            'jenis_surat' => $request->tipe_surat,
            'pemohon' => $pemohon,
            'status_surat' => "Belum Diproses"
        ]);

        return redirect('/administration');
    }

    public function hapus($id)
    {
        Surat::destroy($id);

        return back();
    }
}
