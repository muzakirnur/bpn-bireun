@extends('layouts.auth.app')

@section('content')
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{ $sertifikat }}</h3>

                        <p>Sertifikat</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-fw fa-certificate"></i>
                    </div>
                    <a href="#" class="small-box-footer text-dark">Tambah <i class="fa fa-plus"></i></a>
                </div>
            </div>

            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $suratUkur }}</h3>

                        <p>Surat Ukur</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-fw fa-envelope"></i>
                    </div>
                    <a href="#" class="small-box-footer text-dark">Lihat <i class="fas fa-fw fa-eye"></i></a>
                </div>
            </div>

            <!-- ./col -->

            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $pemegangHak }}</h3>

                        <p>Pemegang Hak</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-fw fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer text-dark">Lihat <i class="fas fa-fw fa-eye"></i></a>
                </div>
            </div>
        </div>

    </section>
@endsection
