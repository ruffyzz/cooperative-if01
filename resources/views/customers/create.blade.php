@extends('layouts.main')

@section('pendaftaran')
<h1>Pendaftaran Pelanggan</h1>
<form action="{{ route('customer.store') }}" method="post">
    @csrf
    <label for="">Kode Pelanggan</label>
    <input type="text" name="code" placeholder="Kode Pelanggan" class="form-control">
    <br>
    <label for="">Nama Pelanggan</label>
    <input type="text" name="name" placeholder="Nama Pelanggan" class="form-control">
    <br>
    <label for="">Nomor HP Pelanggan</label>
    <input type="text" name="phone" placeholder="Nomor HP Pelanggan" class="form-control">
    <br>
    <label for="">Alamat Pelanggan</label>
    <input type="text" name="address" placeholder="Alamat Pelanggan" class="form-control">
    <br>
    <input type="submit" value="Simpan" class="btn btn-success mt-3">
</form>

@if (count($errors)>0)
    <p>ERROR Woi</p>
    @foreach ($errors->all() as $item)
        <li>{{ $item }}</li>

    @endforeach

@endif
@endsection
