@extends('layouts.main')

@section('content')
    <div class="user text-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                @if ($customers->count() > 0)
                    @foreach ($customers as $customer)
                        <div class="col-md-2 col-xxl-2">
                            <div class="user-profil">
                                @if ($customer->image)
                                    <img src="{{ asset('storage/' . $customer->image) }}" class="img-thumbnail">
                                @else
                                    <img src="/img/logo.jpg" class="img-thumbnail">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-6">
                            <div class="user-detail">
                                <h1>{{ $customer->name }}</h1>
                                <p>
                                    <i class='bx bx-id-card'></i> {{ $customer->code }}
                                    <i class='bx bx-male-female' style='color:#ffffff'></i> {{ $customer->gender }}
                                    <i class='bx bx-phone' style='color:#ffffff'></i> {{ $customer->phone }}
                                    <i class='bx bxs-location-plus' style="color:#ffffff"></i> {{ $customer->address }}
                                </p>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editModal{{ $customer->id }}">
                                    <i class='bx bxs-edit' style='color:#ffffff'></i>Edit
                                </button>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-2 col-xxl-2">
                        <div class="user-profil">
                            <img src="/img/logo.png" class="img-thumbnail">
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-6">
                        <div class="user-detail">
                            <h1>{{ auth()->user()->name }}</h1>
                            <p>
                                <i class='bx bx-id-card'></i>
                                <i class='bx bx-male-female' style='color:#ffffff'></i>
                                <i class='bx bx-phone' style='color:#ffffff'></i>
                                <i class='bx bxs-location-plus' style="color:#ffffff"></i>
                            </p>
                            <p>Lengkapi Data</p>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                <i class='bx bxs-edit' style='color:#ffffff'></i>Edit
                            </button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 pt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/img/Simpanan wajib.jpg" class="img-thumbnail" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Simpanan Wajib</h5>
                                    @if ($mandatorySavings->sum('amount') > 0)
                                        <p class="card-text">
                                            Total :Rp {{ number_format($mandatorySavings->sum('amount')) }}
                                        </p>
                                        @php
                                            $sortedSavings = $mandatorySavings->sortByDesc('date');
                                            $lastSaving = $sortedSavings->first();
                                        @endphp
                                        <small class="text-muted"><i class='bx bx-calendar'
                                                style='color:rgba(95,84,84,0.55)'></i>Last updated
                                            @if ($lastSaving)
                                                {{ $lastSaving->date }}
                                            @endif
                                        </small>
                                    @else
                                        <p>Belum ada pemasukan</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-6 col-md-6 col-sm-12 pt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/img/tabungan.jpg" class="img-thumbnail" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Tabungan</h5>
                                    @if ($mySavings->sum('amount') > 0)
                                        <p class="card-text">
                                            Total :Rp {{ number_format($mySavings->sum('amount')) }}
                                        </p>
                                        @php
                                            $sortedSavings = $mySavings->sortByDesc('date');
                                            $lastSaving = $sortedSavings->first();
                                        @endphp
                                        <small class="text-muted"><i class='bx bx-calendar'
                                                style='color:rgba(95,84,84,0.55)'></i>Last updated
                                            @if ($lastSaving)
                                                {{ $lastSaving->date }}
                                            @endif
                                        </small>
                                    @else
                                        <p>Belum ada pemasukan</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center" style="background-color: #143855; color:white;">
                    <h5 class="modal-title" id="staticBackdropLabel">Lengkapi Data Nasabah</h5>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-2" hidden>
                                    <input type="number" name="user_id" value="{{ auth()->user()->id }}" readonly>
                                </div>
                                <div class="mb-2" hidden>
                                    <label for="name">Kode Nasabah</label>
                                    <input type="code" name="code" id="code" class="form-control"
                                        value="{{ $nextCode }}" readonly>
                                </div>
                                <div class="mb-2">
                                    <label for="name">Nama Nasabah</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Nama">
                                </div>
                                <div class="mb-2">
                                    <label for="gender">Jenis Kelamin</label>
                                    <select name="gender" class="form-select">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="phone">Phone Nasabah</label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="08xxxxxxx">
                                </div>
                                <div class="mb-2">
                                    <label for="formFileSm" class="form-label">Image</label>
                                    <input class="form-control form-control-sm" name="image" id="formFileSm"
                                        type="file">
                                </div>
                                <div class="mb-2">
                                    <label for="address">Address Nasabah</label>
                                    <textarea name="address" id="address" cols="30" rows="5" class="form-control" placeholder="Bandung"></textarea>
                                </div>
                                <div class="mb-2">
                                    <div class="card-footer float-end">
                                        <a href="{{ route('customer.index') }}" class="btn btn-danger">Batal</a>
                                        <button type="submit" class="btn btn-success">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Edit Customer --}}
    @foreach ($customers as $customer)
        <div class="modal fade" id="editModal{{ $customer->id }}" tabindex="-1"
            aria-labelledby="editModalLabel{{ $customer->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header text-center" style="background-color: #D8B06D; color:white;">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Nasabah</h5>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('customer.update', $customer->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" value="{{ $customer->id }}">
                                    <div class="mb-2">
                                        <label for="name">Nama Lengkap</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            value="{{ $customer->name }}">
                                    </div>
                                    <div class="mb-2">
                                        <label for="gender">Jenis Kelamin</label>
                                        <select name="gender" class="form-select">
                                            <option value="Laki-Laki"
                                                {{ $customer->gender == 'Laki-Laki' ? 'selected' : '' }}>
                                                Laki-Laki
                                            </option>
                                            <option value="Perempuan"
                                                {{ $customer->gender == 'Perempuan' ? 'selected' : '' }}>
                                                Perempuan
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label for="phone">Phone </label>
                                        <input type="text" name="phone" id="phone" class="form-control"
                                            value="{{ $customer->phone }}">
                                    </div>
                                    <div class="mb-2">
                                        <label for="formFileSm" class="form-label">Image</label>
                                        <input class="form-control form-control-sm" name="image" id="formFileSm"
                                            type="file" value="{{ $customer->image }}">
                                    </div>
                                    <div class="mb-2">
                                        <label for="address">Alamat</label>
                                        <textarea name="address" id="address" cols="30" rows="5" class="form-control">{{ $customer->address }}</textarea>
                                    </div>
                                    <div class="mb-2">
                                        <div class="card-footer float-end">
                                            <a href="{{ route('customer.index') }}" class="btn btn-danger">Batal</a>
                                            <button type="submit" class="btn btn-success">Kirim</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
