@extends('layouts.auth.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped mb-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nomor Sertifikat</th>
                        <th scope="col">Dasar Pendaftaran</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nomor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dasar as $s)
                        <tr>
                            <th scope="row">
                                {{ ($dasar->currentPage() - 1) * $dasar->perPage() + $loop->iteration }}</th>
                            <td>{{ $s->sertifikat->nomor_sertifikat }}</td>
                            <td>{{ $s->dasar_pendaftaran->dasar }}</td>
                            <td>{{ $s->dasar_pendaftaran->tanggal }}</td>
                            <td>{{ $s->dasar_pendaftaran->nomor }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $dasar->links() }}
@endsection
