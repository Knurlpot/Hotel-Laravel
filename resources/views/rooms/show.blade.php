@extends('layouts.app')

@section('content')
<div class="room-page">

    {{-- Breadcrumb --}}
    <p class="breadcrumb">Home > <strong>Rooms & Suites</strong></p>

    <div class="room-container">
        {{-- LEFT INFO --}}
        <div class="room-info">
            <h2>Single Bedroom</h2>

            <h4>About</h4>
            <p>
                Our Single Room is thoughtfully designed for guests who value comfort,
                privacy, and simplicity. Featuring cozy interiors and modern amenities,
                it’s ideal for solo travelers seeking relaxation after a long day.
            </p>

            <p class="price">₱ 1,309 <span>/ night</span></p>

            <button class="btn-primary" onclick="openCheckout()">Book Now</button>
        </div>

        {{-- RIGHT IMAGES --}}
        <div class="room-images">
            <img src="{{ asset('images/room-main.jpg') }}" class="main-img">

            <div class="thumbs">
                <img src="{{ asset('images/room-1.jpg') }}">
                <img src="{{ asset('images/room-2.jpg') }}">
            </div>
        </div>
    </div>
</div>

{{-- Checkout Modal --}}
@include('rooms.checkout-modal')

@endsection

@push('scripts')
<script>
    function openCheckout() {
        document.getElementById('checkoutModal').style.display = 'flex';
    }

    function closeCheckout() {
        document.getElementById('checkoutModal').style.display = 'none';
    }
</script>
@endpush
