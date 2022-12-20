@extends('layouts.auth.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped mb-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nomor Sertifikat</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nomor</th>
                        <th scope="col">Luas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($suratUkur as $s)
                        <tr>
                            <th scope="row">
                                {{ ($suratUkur->currentPage() - 1) * $suratUkur->perPage() + $loop->iteration }}</th>
                            <td>{{ $s->sertifikat->nomor_sertifikat }}</td>
                            <td>{{ $s->surat_ukur->tanggal }}</td>
                            <td>{{ $s->surat_ukur->nomor }}</td>
                            <td>{{ $s->surat_ukur->luas }} M2</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $suratUkur->links() }}
@endsection
