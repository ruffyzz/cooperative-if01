@extends('layouts.main')
@section('content')
    <div class="d-flex justify-content-center align-items-center text-center pt-5 pb-5">
        <h1>Tabungan Nasabah</h1>
    </div>

    <div class="card p-2">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead style="background-color: #D8B06D;color:white;">
                        <tr class="text-center">
                            <th>Tanggal Bayar</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($mandatorySavings as $ms)
                            <tr>
                                <td>{{ $ms->date }}</td>
                                <td>Rp {{ number_format($ms->amount) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
