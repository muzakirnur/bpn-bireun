@extends('layouts.auth.app')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <i class="fas fa-fw fa-check"></i>
            <div>
                {{ session('success') }}
            </div>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <a href="{{ route('sertifikat.create') }}" class="btn btn-primary mb-2"><i class="fas fa-fw fa-plus"></i>
                Tambah Sertifikat</a>
            <table class="table table-striped mb-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nomor Sertifikat</th>
                        <th scope="col">Hak</th>
                        <th scope="col">Nomor</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Kabupaten/Kota</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Desa/Kelurahan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sertifikat as $s)
                        <tr>
                            <th scope="row">
                                {{ ($sertifikat->currentPage() - 1) * $sertifikat->perPage() + $loop->iteration }}</th>
                            <td>{{ $s->nomor_sertifikat }}</td>
                            <td>{{ $s->hak }}</td>
                            <td>{{ $s->nomor }}</td>
                            <td>{{ $s->provinsi }}</td>
                            <td>{{ $s->kabupaten }}</td>
                            <td>{{ $s->kecamatan }}</td>
                            <td>{{ $s->desa }}</td>
                            <td>
                                <a href="{{ route('sertifikat.show', $s->id) }}" class="btn btn-success"><i
                                        class="fas fa-fw fa-eye"></i> Lihat</a>
                                <a href="{{ route('sertifikat.edit', $s->id) }}" class="btn btn-primary"><i
                                        class="fas fa-fw fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $sertifikat->links() }}
@endsection
