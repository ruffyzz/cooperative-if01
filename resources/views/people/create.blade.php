@extends('layouts.main')

@section('content')
<h1>Form Pendaftaran</h1>

<form action="{{ route('person.store') }}" method="post">
    @csrf 
    <input type="text" name="name" placeholder="Inputkan Nama Anda" class="form-control">
    <input type="submit" value="Simpan" class="btn btn-success mt-3">
</form>
@endsection