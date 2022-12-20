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
                    @foreach ($penerbitan as $s)
                        <tr>
                            <th scope="row">
                                {{ ($penerbitan->currentPage() - 1) * $penerbitan->perPage() + $loop->iteration }}</th>
                            <td>{{ $s->sertifikat->nomor_sertifikat }}</td>
                            <td>{{ $s->penerbitan_sertifikat->kota }}</td>
                            <td>{{ $s->penerbitan_sertifikat->tanggal }}</td>
                            <td>{{ $s->penerbitan_sertifikat->nama }}</td>
                            <td>{{ $s->penerbitan_sertifikat->nip }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $penerbitan->links() }}
@endsection
