@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="card p-2">
        <div class="card-body">
            <table class="table table-hover">
                <thead style="background-color: #D8B06D; color: white;">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Kode Pelanggan</th>
                        <th>Nama Pelanggan</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mandatorySavings as $ms)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $ms->date }}</td>
                            <td>{{ $ms->customer->code }}</td>
                            <td>{{ $ms->customer->name }}</td>
                            <td>Rp {{ number_format($ms->amount) }}</td>
                            <td class="d-flex justify-content-center">
                                <!-- Button for deletion confirmation -->
                                <button type="button" class="btn btn-danger btn-sm m-1"
                                    onclick="confirmDeletion({{ $ms->id }})">
                                    <i class='bx bx-trash'></i> Hapus
                                </button>
                                <!-- Hidden form for deletion -->
                                <form id="delete-form-{{ $ms->id }}" action="{{ route('admin-mandatory-saving.destroy', $ms->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDeletion(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus itu!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        })
    }
</script>
@endsection
