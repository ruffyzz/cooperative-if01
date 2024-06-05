@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('customer.create') }}" class="btn btn-success float-end">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $customer->code }}</td>
                            <td>{{ $customer->name }}</td>
                            <td><a href="{{ route('customer.show', $customer->id) }}" class="btn btn-info btn-sm">Lihat Data</a>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection