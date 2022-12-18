@extends('layouts.auth.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped mb-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Pemegang Hak</th>
                        <th scope="col">Tanggal Lahir/Akta Pendirian</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pemegang as $s)
                        <tr>
                            <th scope="row">
                                {{ ($pemegang->currentPage() - 1) * $pemegang->perPage() + $loop->iteration }}</th>
                            <td>{{ $s->nama }}</td>
                            <td>{{ $s->tanggal }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $pemegang->links() }}
        </div>
    </div>
@endsection
