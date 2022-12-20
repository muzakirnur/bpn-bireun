@extends('layouts.auth.app')
@section('content')
    <div class="card">
        <div class="card-header bg-white">
            <h1 class="text-center">SERTIFIKAT</h1>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-center mb-5">
                <h4 class="text-center mr-5">
                    HAK : {{ $detail->sertifikat->hak }}
                </h4>
                <h4 class="text-center">
                    NO : {{ $detail->sertifikat->nomor }}
                </h4>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12 mx-auto mb-5">
                <h4>
                    PROVINSI : {{ $detail->sertifikat->provinsi }} <br><br>
                    KABUPATEN/KOTA : {{ $detail->sertifikat->kabupaten }} <br><br>
                    KECAMATAN : {{ $detail->sertifikat->kecamatan }} <br><br>
                    DESA/KELURAHAN : {{ $detail->sertifikat->desa }} <br><br>
                </h4>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 p-3">
                    <h4>
                        KANTOR PERTANAHAN <br>
                        KABUPATEN/KOTA <br><br>
                        {{ $detail->sertifikat->kabupaten }}
                    </h4>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 text-end p-3">
                    <h4>
                        Nomor Sertifikat :
                        {{ $array[0] . $array[1] . '.' . $array[2] . $array[3] . '.' . $array[4] . $array[5] . '.' . $array[6] . $array[7] . '.' . $array[8] . '.' . $array[9] . $array[10] . $array[11] . $array[12] . $array[13] }}
                    </h4>
                </div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6">
                    <h4 class="text-justify">a)
                        HAK : {{ $detail->sertifikat->hak }} <br>
                    </h4>
                    <h4 class="ml-4">
                        No : {{ $detail->sertifikat->nomor }} <br>
                        Desa/Kelurahan : {{ $detail->sertifikat->desa }} <br>
                        Tgl berakhirnya Hak : {{ date('d/m/Y', strtotime($detail->tgl_berakhir_hak)) }} <br>
                    </h4>
                </div>
                <div class="col-md-6">
                    <h4 class="text-justify">b)
                        NIB : {{ $detail->nib }} <br>
                    </h4>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-justify">c)
                        ASAL HAK : {{ $detail->asal_hak }} <br>
                    </h4>
                </div>
                <div class="col-md-6">
                    <h4 class="text-justify">d)
                        DASAR PENDAFTARAN : {{ $detail->dasar_pendaftaran->dasar }} <br>
                    </h4>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-justify">e)
                        SURAT UKUR<br>
                    </h4>
                    <h4 class="ml-4">
                        Tanggal : {{ date('d/m/Y', strtotime($detail->surat_ukur->tanggal)) }} <br>
                        No : {{ $detail->sertifikat->desa }} <br>
                        Luas : {{ date('d/m/Y', strtotime($detail->tgl_berakhir_hak)) }} <br>
                    </h4>
                </div>
                <div class="col-md-6">
                    <h4 class="text-justify mb-5">f)
                        NAMA PEMEGANG HAK
                    </h4>
                    <h4 class="text-center mb-5">
                        {{ $detail->pemegang_hak->nama }}
                    </h4>
                    <h4 class="ml-3">
                        Tanggal Lahir/Akta Pendirian : {{ date('d/m/Y', strtotime($detail->pemegang_hak->tanggal)) }}
                    </h4>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-justify">g)
                        PEMBUKUAN<br>
                    </h4>
                    <h4 class="text-center">
                        {{ $detail->pembukuan->kota }}, {{ date('d/m/Y', strtotime($detail->pembukuan->tanggal)) }} <br>
                        Kepala Kantor Pertanahan <br>
                        Kabupaten/Kota <br>
                        {{ $detail->sertifikat->kabupaten }} <br><br><br>
                        {{ $detail->pembukuan->nama }} <br>
                        <div class="col-md-4 mx-auto">
                            <hr>
                            NIP : {{ $detail->pembukuan->nip }}
                        </div>
                    </h4>
                </div>
                <div class="col-md-6">
                    <h4 class="text-justify">h)
                        PENERBITAN SERTIFIKAT<br>
                    </h4>
                    <h4 class="text-center">
                        {{ $detail->penerbitan_sertifikat->kota }},
                        {{ date('d/m/Y', strtotime($detail->penerbitan_sertifikat->tanggal)) }} <br>
                        Kepala Kantor Pertanahan <br>
                        Kabupaten/Kota <br>
                        {{ $detail->sertifikat->kabupaten }} <br><br><br>
                        {{ $detail->penerbitan_sertifikat->nama }} <br>
                        <div class="col-md-4 mx-auto">
                            <hr>
                            NIP : {{ $detail->penerbitan_sertifikat->nip }}
                        </div>
                    </h4>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 mb-5">
                    <h4 class="text-justify">i)
                        PENUNJUK<br>
                    </h4>
                    <h5>
                        {!! $detail->penunjuk !!}
                    </h5>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 mb-5">
                    <h4 class="text-center">
                        SCAN ME !<br>
                    </h4>
                    <h3 class="text-center">
                        {!! QrCode::size(150)->generate(route('sertifikat.show', $detail->id)) !!}
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        .square {
            height: 50px;
            width: 50px;
            background-color: #9FB6A6;
            border-radius: 3px;
            margin: 0 auto;
        }
    </style>
@endpush
