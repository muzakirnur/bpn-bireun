<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DasarPendaftaran;
use App\Models\DetailSertifikat;
use App\Models\Pembukuan;
use App\Models\PemegangHak;
use App\Models\PenerbitanSertifikat;
use App\Models\Sertifikat;
use App\Models\SuratUkur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SertifikatController extends Controller
{
    public function index()
    {
        $page = "Data Sertifikat Tanah";
        $sertifikat = Sertifikat::latest()->paginate(15);
        return view('layouts.admin.sertifikat.index', compact('page', 'sertifikat'));
    }

    public function create()
    {
        $kecamatan = DB::table('indonesia_districts')->where('city_code', 1111)->get();
        $page = "Tambah Sertifikat Tanah";
        return view('layouts.admin.sertifikat.create', compact('page', 'kecamatan'));
    }

    public function save(Request $request)
    {
        $provinsi = "ACEH";
        $kota = "BIREUN";
        $kecamatan = DB::table('indonesia_districts')->where('code', $request->kecamatan)->first();
        $validated = $request->validate([
            'hak' => ['required', 'string', 'max:255'],
            'nomor_sertifikat' => ['required', 'digits:14'],
            'nomor' => ['required', 'numeric'],
            'tanggal_berakhir_hak' => ['required', 'date'],
            'nib' => ['required', 'numeric'],
            'desa' => ['required', 'string', 'max:255'],
            'asal_hak' => ['required', 'string', 'max:255'],
            'dasar_pendaftaran' => ['required', 'string', 'max:255'],
            'dasar_pendaftaran_tanggal' => ['required', 'date'],
            'dasar_pendaftaran_nomor' => ['required', 'numeric'],
            'surat_ukur_tanggal' => ['required', 'date'],
            'surat_ukur_nomor' => ['required', 'numeric'],
            'surat_ukur_luas' => ['required', 'numeric'],
            'nama_pemegang_hak' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'date'],
            'pembukuan_tanggal' => ['required', 'date'],
            'pembukuan_nama' => ['required', 'string', 'max:255'],
            'pembukuan_nip' => ['required', 'numeric'],
            'penerbitan_tanggal' => ['required', 'date'],
            'penerbitan_nama' => ['required', 'string', 'max:255'],
            'penerbitan_nip' => ['required', 'numeric']
        ]);

        $sertifikat = Sertifikat::create([
            'nomor_sertifikat' => $validated['nomor_sertifikat'],
            'hak' => $validated['hak'],
            'nomor' => $validated['nomor'],
            'provinsi' => $provinsi,
            'kabupaten' => $kota,
            'kecamatan' => $kecamatan->name,
            'desa' => $validated['desa'],
        ]);

        $dasarPendaftaran = DasarPendaftaran::create([
            'dasar' =>  $validated['dasar_pendaftaran'],
            'tanggal' => $validated['dasar_pendaftaran_tanggal'],
            'nomor' => $validated['dasar_pendaftaran_nomor'],
        ]);

        $suratUkur = SuratUkur::create([
            'tanggal' => $validated['surat_ukur_tanggal'],
            'nomor' => $validated['surat_ukur_nomor'],
            'luas' => $validated['surat_ukur_luas']
        ]);

        $pemegangHak = PemegangHak::create([
            'nama' => $validated['nama_pemegang_hak'],
            'tanggal' => $validated['tanggal_lahir'],
        ]);

        $pembukuan = Pembukuan::create([
            'kota' => $kota,
            'tanggal' => $validated['pembukuan_tanggal'],
            'nama' => $validated['pembukuan_nama'],
            'nip' => $validated['pembukuan_nip']
        ]);

        $penerbitan = PenerbitanSertifikat::create([
            'kota' => $kota,
            'tanggal' => $validated['penerbitan_tanggal'],
            'nama' => $validated['penerbitan_nama'],
            'nip' => $validated['penerbitan_nip'],
        ]);

        DetailSertifikat::create([
            'sertifikat_id' => $sertifikat->id,
            'nomor' => $sertifikat->nomor,
            'desa' => $sertifikat->desa,
            'tgl_berakhir_hak' => $validated['tanggal_berakhir_hak'],
            'nib' => $validated['nib'],
            'asal_hak' => $validated['asal_hak'],
            'dasar_pendaftaran_id' => $dasarPendaftaran->id,
            'surat_ukur_id' => $suratUkur->id,
            'penunjuk' => $request->penunjuk,
            'pemegang_hak_id' => $pemegangHak->id,
            'pembukuan_id' => $pembukuan->id,
            'penerbitan_sertifikat_id' => $penerbitan->id,
        ]);
        return redirect()->route('sertifikat.index')->with('success', 'Data Sertifikat Berhasil ditambahkan');
    }

    public function show($id)
    {
        $page = "Detail Sertifikat";
        $detail = DetailSertifikat::where('sertifikat_id', $id)->first();
        $array = str_split($detail->sertifikat->nomor_sertifikat);
        return view('layouts.admin.sertifikat.show', compact('page', 'detail', 'array'));
    }

    public function detail($id)
    {
        $page = "Detail Sertifikat";
        $detail = DetailSertifikat::where('sertifikat_id', $id)->first();
        $array = str_split($detail->sertifikat->nomor_sertifikat);
        return view('layouts.show', compact('page', 'detail', 'array'));
    }

    public function edit($id)
    {
        $page = "Edit Sertifikat";
        $kecamatan = DB::table('indonesia_districts')->where('city_code', 1111)->get();
        $detailSertifikat = DetailSertifikat::where('sertifikat_id', $id)->first();
        $valueKecamatan = DB::table('indonesia_districts')->where('name', $detailSertifikat->sertifikat->kecamatan)->first();
        return view('layouts.admin.sertifikat.edit', compact('detailSertifikat', 'page', 'kecamatan', 'valueKecamatan'));
    }

    public function update(Request $request, $id)
    {
        $provinsi = "ACEH";
        $kota = "BIREUN";
        $kecamatan = DB::table('indonesia_districts')->where('code', $request->kecamatan)->first();
        $validated = $request->validate([
            'hak' => ['required', 'string', 'max:255'],
            'nomor_sertifikat' => ['required', 'digits:14'],
            'nomor' => ['required', 'numeric'],
            'tanggal_berakhir_hak' => ['required', 'date'],
            'nib' => ['required', 'numeric'],
            'desa' => ['required', 'string', 'max:255'],
            'asal_hak' => ['required', 'string', 'max:255'],
            'dasar_pendaftaran' => ['required', 'string', 'max:255'],
            'dasar_pendaftaran_tanggal' => ['required', 'date'],
            'dasar_pendaftaran_nomor' => ['required', 'numeric'],
            'surat_ukur_tanggal' => ['required', 'date'],
            'surat_ukur_nomor' => ['required', 'numeric'],
            'surat_ukur_luas' => ['required', 'numeric'],
            'nama_pemegang_hak' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'date'],
            'pembukuan_tanggal' => ['required', 'date'],
            'pembukuan_nama' => ['required', 'string', 'max:255'],
            'pembukuan_nip' => ['required', 'numeric'],
            'penerbitan_tanggal' => ['required', 'date'],
            'penerbitan_nama' => ['required', 'string', 'max:255'],
            'penerbitan_nip' => ['required', 'numeric']
        ]);
        $detailSertifikat = DetailSertifikat::findOrFail($id);
        $sertifikat = Sertifikat::findOrFail($detailSertifikat->sertifikat_id);
        $dasarPendaftaran = DasarPendaftaran::findOrFail($detailSertifikat->dasar_pendaftaran_id);
        $suratUkur = SuratUkur::findOrFail($detailSertifikat->surat_ukur_id);
        $pemegangHak = PemegangHak::findOrFail($detailSertifikat->pemegang_hak_id);
        $pembukuan = Pembukuan::findOrFail($detailSertifikat->pembukuan_id);
        $penerbitanSertifikat = PenerbitanSertifikat::findOrFail($detailSertifikat->penerbitan_sertifikat_id);
        $sertifikat->update([
            'nomor_sertifikat' => $validated['nomor_sertifikat'],
            'hak' => $validated['hak'],
            'nomor' => $validated['nomor'],
            'provinsi' => $provinsi,
            'kabupaten' => $kota,
            'kecamatan' => $kecamatan->name,
            'desa' => $validated['desa'],
        ]);

        $dasarPendaftaran->update([
            'dasar' =>  $validated['dasar_pendaftaran'],
            'tanggal' => $validated['dasar_pendaftaran_tanggal'],
            'nomor' => $validated['dasar_pendaftaran_nomor'],
        ]);

        $suratUkur->update([
            'tanggal' => $validated['surat_ukur_tanggal'],
            'nomor' => $validated['surat_ukur_nomor'],
            'luas' => $validated['surat_ukur_luas']
        ]);

        $pemegangHak->update([
            'nama' => $validated['nama_pemegang_hak'],
            'tanggal' => $validated['tanggal_lahir'],
        ]);

        $pembukuan->update([
            'kota' => $kota,
            'tanggal' => $validated['pembukuan_tanggal'],
            'nama' => $validated['pembukuan_nama'],
            'nip' => $validated['pembukuan_nip']
        ]);

        $penerbitanSertifikat->update([
            'kota' => $kota,
            'tanggal' => $validated['penerbitan_tanggal'],
            'nama' => $validated['penerbitan_nama'],
            'nip' => $validated['penerbitan_nip'],
        ]);

        $detailSertifikat->update([
            'nomor' => $validated['nomor'],
            'desa' => $validated['desa'],
            'tgl_berakhir_hak' => $validated['tanggal_berakhir_hak'],
            'nib' => $validated['nib'],
            'asal_hak' => $validated['asal_hak'],
            'penunjuk' => $request->penunjuk,
        ]);
        return redirect()->route('sertifikat.index')->with('success', 'Data Sertifikat Berhasil diupdate');
    }

    public function delete(Request $request)
    {
        $detail = DetailSertifikat::where('sertifikat_id', $request->id)->first();
        $detail->delete();
        Sertifikat::find($detail->sertifikat_id)->delete();
        DasarPendaftaran::find($detail->dasar_pendaftaran_id)->delete();
        SuratUkur::find($detail->surat_ukur_id)->delete();
        PemegangHak::find($detail->pemegang_hak_id)->delete();
        Pembukuan::find($detail->pembukuan_id)->delete();
        PenerbitanSertifikat::find($detail->penerbitan_sertifikat_id)->delete();
        return back()->with('success', 'Data Berhasil dihapus !');
    }
}
