@extends('layouts.auth.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <h3>SERTIFIKAT</h3>
                <hr>
                <div class="col-md-6 col-sm-12 xs-12">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">HAK</label>
                        <select name="hak" id="hak" class="form-select" disabled>
                            <option value="">{{ $detail->sertifikat->hak }}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">NOMOR SERTIFIKAT</label>
                        <input type="number" name="nomor_sertifikat" class="form-control" id="exampleInputPassword1"
                            value="{{ $detail->sertifikat->nomor_sertifikat }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">NO</label>
                        <input type="number" name="nomor" class="form-control" id="exampleInputPassword1"
                            value="{{ $detail->sertifikat->nomor }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Berakhirnya Hak</label>
                        <input type="date" name="tanggal_berakhir_hak" class="form-control" id="exampleInputPassword1"
                            value="{{ $detail->tgl_berakhir_hak }}" disabled>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 xs-12">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">PROVINSI</label>
                        <select class="form-select" name="provinsi" id="provinsi" disabled>
                            <option value="ACEH">ACEH</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">KABUPATEN/KOTA</label>
                        <select class="form-select" name="kabupaten" id="kabupaten" disabled>
                            <option value="BIREUN">BIREUN</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">KECAMATAN</label>
                        <select class="form-select" name="kecamatan" id="kecamatan" disabled>
                            <option value="">{{ $detail->sertifikat->kecamatan }}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">DESA/KELURAHAN</label>
                        <select class="form-select" name="desa" id="desa" disabled>
                            <option value="" selected>{{ $detail->sertifikat->desa }}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h3>NIB</h3>
                    <hr>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">NIB</label>
                        <input type="number" name="nib" class="form-control" id="exampleInputPassword1"
                            value="{{ $detail->nib }}" disabled>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h3>ASAL HAK</h3>
                    <hr>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">NIB</label>
                        <select name="asal_hak" id="asal_hak" class="form-select" disabled>
                            <option value="" selected>{{ $detail->asal_hak }}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h3>DASAR PENDAFTARAN</h3>
                    <hr>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Dasar Pendaftaran</label>
                        <select name="dasar_pendaftaran" id="dasar_pendaftaran" class="form-select" disabled>
                            <option value="" selected>{{ $detail->dasar_pendaftaran->dasar }}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                        <input type="date" name="dasar_pendaftaran_tanggal" class="form-control"
                            value="{{ $detail->dasar_pendaftaran->tanggal }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">No</label>
                        <input type="number" name="dasar_pendaftaran_nomor"
                            class="form-control @error('dasar_pendaftaran_nomor') is-invalid @enderror"
                            value="{{ $detail->dasar_pendaftaran->nomor }}" disabled>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h3>SURAT UKUR</h3>
                    <hr>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                        <input type="date" name="surat_ukur_tanggal" class="form-control"
                            value="{{ $detail->surat_ukur->tanggal }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">No</label>
                        <input type="number" name="surat_ukur_nomor" class="form-control"
                            value="{{ $detail->surat_ukur->nomor }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Luas (M2)</label>
                        <input type="number" name="surat_ukur_luas" class="form-control"
                            value="{{ $detail->surat_ukur->luas }}" disabled>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h3>PENUNJUK</h3>
                    <hr>
                    <div class="mb-3">
                        {!! $detail->penunjuk !!}
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h3>PEMEGANG HAK</h3>
                    <hr>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                        <input type="text" name="nama_pemegang_hak" class="form-control"
                            value="{{ $detail->pemegang_hak->nama }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Lahir/Akta Pendirian</label>
                        <input type="date" name="tanggal_lahir" class="form-control"
                            value="{{ $detail->pemegang_hak->tanggal }}" disabled>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h3>PEMBUKUAN SERTIFIKAT</h3>
                    <hr>
                    <div class="mb-3">
                        <label for="pembukuan_kota" class="form-label">Kota</label>
                        <input type="text" name="pembukuan_kota" id="pembukuan_kota" value="BIREUN" disabled
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input class="form-control" type="date" name="pembukuan_tanggal" id="pembukuan_tanggal"
                            value="{{ $detail->pembukuan->tanggal }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Kepala Kantor Pertanahan</label>
                        <input class="form-control" type="text" name="pembukuan_nama" id="pembukuan_nama"
                            value="{{ $detail->pembukuan->nama }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">NIP</label>
                        <input class="form-control" type="number" name="pembukuan_nip" id="pembukuan_nip"
                            value="{{ $detail->pembukuan->nip }}" disabled>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                    <h3>PENERBITAN SERTIFIKAT</h3>
                    <hr>
                    <div class="mb-3">
                        <label for="pembukuan_kota" class="form-label">Kota</label>
                        <input type="text" name="penerbitan_kota" id="penerbitan_kota" value="BIREUN" disabled
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input class="form-control" type="date" name="penerbitan_tanggal" id="penerbitan_tanggal"
                            value="{{ $detail->penerbitan_sertifikat->tanggal }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Kepala Kantor Pertanahan</label>
                        <input class="form-control" type="text" name="penerbitan_nama" id="penerbitan_nama"
                            value="{{ $detail->penerbitan_sertifikat->nama }}">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">NIP</label>
                        <input class="form-control" type="number" name="penerbitan_nip" id="penerbitan_nip"
                            value="{{ $detail->penerbitan_sertifikat->nip }}">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h3>QR Code</h3>
                    <hr>
                    <h2 class="text-center">
                        {!! QrCode::size(150)->generate(qrCode($detail->id)) !!}
                    </h2>
                </div>
            </div>
            <button type="button" onclick="history.back(-1)" class="btn btn-primary shadow-sm"><i
                    class="fas fa-fw fa-arrow-left"></i>
                Kembali</button>
        </div>
    </div>
@endsection
