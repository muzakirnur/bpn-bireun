@extends('layouts.auth.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <form>
                <div class="row">
                    <h3>SERTIFIKAT</h3>
                    <hr>
                    <div class="col-md-6 col-sm-12 xs-12">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">HAK</label>
                            <select name="hak" id="hak" class="form-select">
                                <option value="">Pilih Hak</option>
                                <option value="MILIK">HAK MILIK (SHM)</option>
                                <option value="GUNA BANGUNAN">HAK GUNA BANGUNAN (HGB)</option>
                                <option value="GUNA USAHA">HAK GUNA USAHA (HGU)</option>
                                <option value="PAKAI">HAK PAKAI (HP)</option>
                                <option value="ATAS SATUAN RUMAH SUSUN">HAK ATAS SATUAN RUMAH SUSUN (SHSRS)</option>
                                <option value="TANAH GIRIK">TANAH GIRIK</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">NOMOR SERTIFIKAT</label>
                            <input type="number" name="nomor_sertifikat" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">NO</label>
                            <input type="number" name="nomor" class="form-control" id="exampleInputPassword1">
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
                            <select class="form-select" name="provinsi" id="provinsi" disabled>
                                <option value="BIREUN">BIREUN</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">KECAMATAN</label>
                            <select class="form-select" name="kecamatan" id="kecamatan">
                                <option value="">Pilih Kecamatan</option>
                                @foreach ($kecamatan as $row)
                                    <option value="{{ $row->code }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">DESA/KELURAHAN</label>
                            <select class="form-select" name="desa" id="desa">
                                <option value="">Pilih Desa/Kelurahan</option>
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
                            <input type="number" name="nib" class="form-control" id="exampleInputPassword1">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h3>ASAL HAK</h3>
                        <hr>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">NIB</label>
                            <select name="asal_hak" id="asal_hak" class="form-select">
                                <option value="" selected>Pilih Asal Hak</option>
                                <option value="Konversi">Konversi</option>
                                <option value="Pemberian Hak">Pemberian Hak</option>
                                <option value="Pemecahan Bidang">Pemecahan Bidang</option>
                                <option value="Pemisahan Bidang">Pemisahan Bidang</option>
                                <option value="Penggabungan Bidang">Penggabungan Bidang</option>
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
                            <select name="asal_hak" id="asal_hal" class="form-select">
                                <option value="" selected>Pilih Dasar Pendaftaaran</option>
                                <option value="Daftar Isian 202">Daftar Isian 202</option>
                                <option value="Surat Keputusan">Surat Keputusan</option>
                                <option value="Permohonan Pemecahan Bidang">Permohonaan Pemecahan Bidang</option>
                                <option value="Permohonan Pemisahan Bidang">Permohonaan Pemisahan Bidang</option>
                                <option value="Permohonan Penggabungan Bidang">Permohonaan Penggabungan Bidang</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                            <input type="date" name="dasar_pendaftaran_tanggal" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">No</label>
                            <input type="text" name="dasar_pendaftaran_nomor" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h3>SURAT UKUR</h3>
                        <hr>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                            <input type="date" name="surat_ukur_tanggal" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">No</label>
                            <input type="text" name="surat_ukur_nomor" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Luas (M2)</label>
                            <input type="number" name="surat_ukur_luas" class="form-control">
                        </div>
                    </div>
                </div>
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
