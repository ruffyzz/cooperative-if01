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
        Edit Pendaftaran Pelanggan Kode #{{ $customer->code }}
    </div>
    <div class="card-body">
        <form action="{{ route('customer.update') }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $customer->id }}">
        <div class="mb-2">
            <label for="">Nama Pelanggan</label>
            <input type="text" name="name" class="form-control" placeholder="Nama Pelanggan"
                value="{{ $customer->name }}">
        </div>
        <div class="mb-2">
            <label for="">Telepon</label>
            <input type="text" name="phone" class="form-control" placeholder="Nomor Telepon"
                value="{{ $customer->phone }}">
        </div>
        <div class="mb-2">
            <label for="">Alamat</label>
            <textarea name="address" id="" cols="30" rows="3" class="form-control" 
            placeholder="Jl. XXX"{{ $customer->address }}></textarea>

        </div>
        <div class="mb-2">
            <input type="submit" value="Simpan">
        </div>
        </form>
    </div>
</div>

@endsection
