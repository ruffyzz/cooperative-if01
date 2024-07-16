@extends('layouts.main')

@section('content')
    <div class="user text-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <div class="user-profil">
                        @if ($customer->image)
                            <img src="/img/IKN.jpg" class="img-thumbnail">
                        @else
                            <img src="{{ asset('storage/' . $customer->image) }}" class="img-thumbnail">
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="user-detail">
                        <h1>{{ $customer->name }}</h1>
                        <p>
                            <i class='bx bx-id-card'></i> {{ $customer->code }}
                            <i class='bx bx-male-female' style='color:#ffffff'></i> {{ $customer->gender }}
                            <i class='bx bx-phone' style='color:#ffffff'></i> {{ $customer->phone }}
                            <i class='bx bxs-location-plus' style="color:#ffffff"></i> {{ $customer->address }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
