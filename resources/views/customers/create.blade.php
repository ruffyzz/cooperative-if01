@extends('layouts.main')
@section('pendaftaran')
@if (count($errors)>0)
    <div class="alert alert-danger"><p>ERROR Woi</p>
    @foreach ($errors->all() as $item)
        <li>{{ $item }}</li>

    @endforeach
    </div>
@endif
<div class="card">
    <div class="card-header">
        Pendaftaran Pelanggan
    </div>
    <div class="card-body">
        <form action="{{ route('customer.store') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label for="">Kode Pelanggan</label>
            <input type="text" name="code" class="form-control" placeholder="Kode Pelanggan">
        </div>
        <div class="mb-2">
            <label for="">Nama Pelanggan</label>
            <input type="text" name="name" class="form-control" placeholder="Nama Pelanggan">
        </div>
        <div class="mb-2">
            <label for="">Telepon</label>
            <input type="text" name="phone" class="form-control" placeholder="Nomor Telepon">
        </div>
        <div class="mb-2">
            <label for="">Alamat</label>
            <input type="text" name="address" class="form-control" placeholder="Alamat">
        </div>
        <div class="mb-2">
            <input type="submit" value="Simpan">
        </div>
        </form>
    </div>
</div>

@endsection
