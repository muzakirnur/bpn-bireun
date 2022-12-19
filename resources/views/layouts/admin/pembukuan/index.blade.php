@extends('layouts.auth.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped mb-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
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
                            <td>{{ $s->kota }}</td>
                            <td>{{ $s->tanggal }}</td>
                            <td>{{ $s->nama }}</td>
                            <td>{{ $s->nip }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $pembukuan->links() }}
        </div>
    </div>
@endsection
