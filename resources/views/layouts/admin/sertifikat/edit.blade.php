@extends('layouts.auth.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('sertifikat.update', $detailSertifikat->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <h3>SERTIFIKAT</h3>
                    <hr>
                    <div class="col-md-6 col-sm-12 xs-12">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">HAK</label>
                            <select name="hak" id="hak" class="form-select @error('hak') is-invalid @enderror">
                                <option value="{{ $detailSertifikat->sertifikat->hak }}" selected>
                                    {{ $detailSertifikat->sertifikat->hak }}</option>
                                <option value="">Pilih Hak</option>
                                <option value="MILIK" {{ old('hak') == 'MILIK' ? 'selected' : '' }}>HAK MILIK (SHM)
                                </option>
                                <option value="GUNA BANGUNAN" {{ old('hak') == 'GUNA BANGUNAN' ? 'selected' : '' }}>
                                    HAK GUNA BANGUNAN (HGB)</option>
                                <option value="GUNA USAHA" {{ old('hak') == 'GUNA USAHA' ? 'selected' : '' }}>HAK
                                    GUNA USAHA (HGU)</option>
                                <option value="PAKAI" {{ old('hak') == 'PAKAI' ? 'selected' : '' }}>HAK PAKAI (HP)
                                </option>
                                <option value="ATAS SATUAN RUMAH SUSUN"
                                    {{ old('hak') == 'ATAS SATUAN RUMAH SUSUN' ? 'selected' : '' }}>HAK ATAS SATUAN
                                    RUMAH SUSUN (SHSRS)</option>
                                <option value="TANAH GIRIK" {{ old('hak') == 'TANAH GIRIK' ? 'selected' : '' }}>TANAH
                                    GIRIK</option>
                            </select>
                            @error('hak')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">NOMOR SERTIFIKAT</label>
                            <input type="number" name="nomor_sertifikat"
                                class="form-control @error('nomor_sertifikat') is-invalid @enderror"
                                id="exampleInputPassword1" value="{{ $detailSertifikat->sertifikat->nomor_sertifikat }}">
                            @error('nomor_sertifikat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">NO</label>
                            <input type="number" name="nomor" class="form-control @error('nomor') is-invalid @enderror"
                                id="exampleInputPassword1" value="{{ $detailSertifikat->sertifikat->nomor }}">
                            @error('nomor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Berakhirnya Hak</label>
                            <input type="date" name="tanggal_berakhir_hak"
                                class="form-control @error('tanggal_berakhir_hak') is-invalid @enderror"
                                id="exampleInputPassword1" value="{{ $detailSertifikat->tgl_berakhir_hak }}">
                            @error('tanggal_berakhir_hak')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
                            <select class="form-select @error('kecamatan') is-invalid @enderror" name="kecamatan"
                                id="kecamatan">
                                <option value="{{ $valueKecamatan->code }}" selected>
                                    {{ $detailSertifikat->sertifikat->kecamatan }}</option>
                                @foreach ($kecamatan as $row)
                                    <option value="{{ $row->code }}"
                                        {{ old('kecamatan') == $row->code ? 'selected' : '' }}>{{ $row->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kecamatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">DESA/KELURAHAN</label>
                            <select class="form-select @error('kecamatan') is-invalid @enderror" name="desa"
                                id="desa" required>
                                <option value="{{ $detailSertifikat->sertifikat->desa }}" selected>
                                    {{ $detailSertifikat->sertifikat->desa }}</option>
                            </select>
                            @error('desa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h3>NIB</h3>
                        <hr>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">NIB</label>
                            <input type="number" name="nib" class="form-control @error('nib') is-invalid @enderror"
                                id="exampleInputPassword1" value="{{ $detailSertifikat->nib }}">
                            @error('nib')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h3>ASAL HAK</h3>
                        <hr>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Asal Hak</label>
                            <select name="asal_hak" id="asal_hak"
                                class="form-select @error('asal_hak') is-invalid @enderror">
                                <option value="{{ $detailSertifikat->asal_hak }}" selected>
                                    {{ $detailSertifikat->asal_hak }}</option>
                                <option value="Konversi" {{ old('asal_hak') == 'Konversi' ? 'selected' : '' }}>
                                    Konversi</option>
                                <option value="Pemberian Hak" {{ old('asal_hak') == 'Pemberian Hak' ? 'selected' : '' }}>
                                    Pemberian Hak
                                </option>
                                <option value="Pemecahan Bidang"
                                    {{ old('asal_hak') == 'Pemecahan Bidang' ? 'selected' : '' }}>Pemecahan Bidang
                                </option>
                                <option value="Pemisahan Bidang"
                                    {{ old('asal_hak') == 'Pemisahan Bidang' ? 'selected' : '' }}>Pemisahan Bidang
                                </option>
                                <option value="Penggabungan Bidang"
                                    {{ old('asal_hak') == 'Penggabungan Bidang' ? 'selected' : '' }}>Penggabungan
                                    Bidang
                                </option>
                            </select>
                            @error('asal_hak')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h3>DASAR PENDAFTARAN</h3>
                        <hr>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Dasar Pendaftaran</label>
                            <select name="dasar_pendaftaran" id="dasar_pendaftaran"
                                class="form-select @error('dasar_pendaftaran') is-invalid @enderror">
                                <option value="{{ $detailSertifikat->dasar_pendaftaran->dasar }}" selected>
                                    {{ $detailSertifikat->dasar_pendaftaran->dasar }}</option>
                                <option value="Daftar Isian 202"
                                    {{ old('dasar_pendaftaran') == 'Daftar Isian 202' ? 'selected' : '' }}>Daftar
                                    Isian
                                    202
                                </option>
                                <option value="Surat Keputusan"
                                    {{ old('dasar_pendaftaran') == 'Surat Keputusan' ? 'selected' : '' }}>Surat
                                    Keputusan</option>
                                <option value="Permohonan Pemecahan Bidang"
                                    {{ old('dasar_pendaftaran') == 'Permohonan Pemecahan Bidang' ? 'selected' : '' }}>
                                    Permohonaan Pemecahan Bidang</option>
                                <option value="Permohonan Pemisahan Bidang"
                                    {{ old('dasar_pendaftaran') == 'Permohonan Pemisahan Bidang' ? 'selected' : '' }}>
                                    Permohonaan Pemisahan Bidang</option>
                                <option value="Permohonan Penggabungan Bidang"
                                    {{ old('dasar_pendaftaran') == 'Permohonan Penggabungan Bidang' ? 'selected' : '' }}>
                                    Permohonaan Penggabungan Bidang</option>
                            </select>
                            @error('dasar_pendaftaran')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                            <input type="date" name="dasar_pendaftaran_tanggal"
                                class="form-control @error('dasar_pendaftaran_tanggal') is-invalid @enderror"
                                value="{{ $detailSertifikat->dasar_pendaftaran->tanggal }}">
                            @error('dasar_pendaftaran_tanggal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">No</label>
                            <input type="number" name="dasar_pendaftaran_nomor"
                                class="form-control @error('dasar_pendaftaran_nomor') is-invalid @enderror"
                                value="{{ $detailSertifikat->dasar_pendaftaran->nomor }}">
                            @error('dasar_pendaftaran_nomor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h3>SURAT UKUR</h3>
                        <hr>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                            <input type="date" name="surat_ukur_tanggal"
                                class="form-control @error('surat_ukur_tanggal') is-invalid @enderror"
                                value="{{ $detailSertifikat->surat_ukur->tanggal }}">
                            @error('surat_ukur_tanggal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">No</label>
                            <input type="number" name="surat_ukur_nomor"
                                class="form-control @error('surat_ukur_nomor') is-invalid @enderror"
                                value="{{ $detailSertifikat->surat_ukur->nomor }}">
                            @error('surat_ukur_nomor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Luas (M2)</label>
                            <input type="number" name="surat_ukur_luas"
                                class="form-control @error('surat_ukur_luas') is-invalid @enderror"
                                value="{{ $detailSertifikat->surat_ukur->luas }}">
                            @error('surat_ukur_luas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h3>PENUNJUK</h3>
                        <hr>
                        <div class="mb-3">
                            <textarea name="penunjuk" id="myeditorinstance">{{ $detailSertifikat->penunjuk }}</textarea>
                            @error('penunjuk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h3>PEMEGANG HAK</h3>
                        <hr>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama</label>
                            <input type="text" name="nama_pemegang_hak"
                                class="form-control @error('nama_pemegang_hak') is-invalid @enderror"
                                value="{{ $detailSertifikat->pemegang_hak->nama }}">
                            @error('nama_pemegang_hak')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Lahir/Akta Pendirian</label>
                            <input type="date" name="tanggal_lahir"
                                class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                value="{{ $detailSertifikat->pemegang_hak->tanggal }}">
                            @error('tanggal_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
                            <input class="form-control @error('pembukuan_tanggal') is-invalid @enderror" type="date"
                                name="pembukuan_tanggal" id="pembukuan_tanggal"
                                value="{{ $detailSertifikat->pembukuan->tanggal }}">
                            @error('pembukuan_tanggal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Kepala Kantor Pertanahan</label>
                            <input class="form-control @error('pembukuan_nama') is-invalid @enderror" type="text"
                                name="pembukuan_nama" id="pembukuan_nama"
                                value="{{ $detailSertifikat->pembukuan->nama }}">
                            @error('pembukuan_nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">NIP</label>
                            <input class="form-control @error('pembukuan_nip') is-invalid @enderror" type="number"
                                name="pembukuan_nip" id="pembukuan_nip" value="{{ $detailSertifikat->pembukuan->nip }}">
                            @error('pembukuan_nip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h3>PENERBITAN SERTIFIKAT</h3>
                        <hr>
                        <div class="mb-3">
                            <label for="pembukuan_kota" class="form-label">Kota</label>
                            <input type="text" name="penerbitan_kota" id="penerbitan_kota" value="BIREUN" disabled
                                class="form-control @error('penerbitan_kota') is-invalid @enderror">
                            @error('penerbitan_kota')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input class="form-control @error('penerbitan_tanggal') is-invalid @enderror" type="date"
                                name="penerbitan_tanggal" id="penerbitan_tanggal"
                                value="{{ $detailSertifikat->penerbitan_sertifikat->tanggal }}">
                            @error('penerbitan_tanggal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Kepala Kantor Pertanahan</label>
                            <input class="form-control @error('penerbitan_nama') is-invalid @enderror" type="text"
                                name="penerbitan_nama" id="penerbitan_nama"
                                value="{{ $detailSertifikat->penerbitan_sertifikat->nama }}">
                            @error('penerbitan_nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">NIP</label>
                            <input class="form-control @error('penerbitan_nip') is-invalid @enderror" type="number"
                                name="penerbitan_nip" id="penerbitan_nip"
                                value="{{ $detailSertifikat->penerbitan_sertifikat->nip }}">
                            @error('penerbitan_nip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-save"></i>
                    Simpan</button>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script>
        var services;

        function onChangeSelect(url, id, name) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "GET",
                url: url,
                data: {
                    code: id
                },
                success: function(data) {
                    $('#' + name).empty();
                    $('#' + name).append('<option value="" selected>Pilih</option>');

                    $.each(data, function(key, value) {
                        $('#' + name).append('<option value="' + value.name + '">' + value.name +
                            '</options>');
                    });
                }
            });
        }

        $(function() {
            $('#kecamatan').on('change', function() {
                onChangeSelect('{{ route('village') }}', $(this).val(), 'desa');
                $('#desa').empty();
                $('#desa').append('<option value="" selected>Pilih</option>');
            });
        });
    </script>
@endsection
