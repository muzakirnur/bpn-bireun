@extends('layouts.auth.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped mb-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nomor Sertifikat</th>
                        <th scope="col">Nama Pemegang Hak</th>
                        <th scope="col">Tanggal Lahir/Akta Pendirian</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pemegang as $s)
                        <tr>
                            <th scope="row">
                                {{ ($pemegang->currentPage() - 1) * $pemegang->perPage() + $loop->iteration }}</th>
                            <td>{{ $s->sertifikat->nomor_sertifikat }}</td>
                            <td>{{ $s->pemegang_hak->nama }}</td>
                            <td>{{ $s->pemegang_hak->tanggal }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $pemegang->links() }}
@endsection
