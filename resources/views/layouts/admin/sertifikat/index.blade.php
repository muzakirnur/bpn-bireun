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
                                <a href="#" data-id={{ $s->id }} class="btn btn-danger delete"
                                    data-toggle="modal" data-target="#deleteModal">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $sertifikat->links() }}
    <!-- Delete Warning Modal -->
    <div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapu Sertifikat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('sertifikat.delete') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" id="id" name="id" value="">
                        <h5 class="text-center">Yakin ingin menghapus seritifikat ini ?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Delete Modal -->
@endsection
@push('js')
    <script>
        $(document).on('click', '.delete', function() {
            let id = $(this).attr('data-id');
            $('#id').val(id);
        });
    </script>
@endpush
