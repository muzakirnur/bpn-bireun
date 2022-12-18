@extends('layouts.auth.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <button class="btn btn-primary mb-2"><i class="fas fa-fw fa-plus"></i> Tambah Sertifikat</button>
            <table class="table table-striped mb-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Hak</th>
                        <th scope="col">Nomor</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Kabupaten/Kota</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Desa/Kelurahan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sertifikat as $s)
                        <tr>
                            <th scope="row">
                                {{ ($sertifikat->currentPage() - 1) * $sertifikat->perPage() + $loop->iteration }}</th>
                            <td>{{ $s->hak }}</td>
                            <td>{{ $s->nomor }}</td>
                            <td>{{ $s->provinsi }}</td>
                            <td>{{ $s->kabupaten }}</td>
                            <td>{{ $s->kecamatan }}</td>
                            <td>{{ $s->desa }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $sertifikat->links() }}
        </div>
    </div>
@endsection
