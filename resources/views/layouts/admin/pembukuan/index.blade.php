@extends('layouts.auth.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped mb-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nomor Sertifikat</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama Kepala Kantor</th>
                        <th scope="col">NIP</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembukuan as $s)
                        <tr>
                            <th scope="row">
                                {{ ($pembukuan->currentPage() - 1) * $pembukuan->perPage() + $loop->iteration }}</th>
                            <td>{{ $s->sertifikat->nomor_sertifikat }}</td>
                            <td>{{ $s->pembukuan->kota }}</td>
                            <td>{{ $s->pembukuan->tanggal }}</td>
                            <td>{{ $s->pembukuan->nama }}</td>
                            <td>{{ $s->pembukuan->nip }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $pembukuan->links() }}
@endsection
