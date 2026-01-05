@extends('layouts.reception')

@section('content')

{{-- HERO --}}
<section class="reception-hero">
    <div class="hero-text">
        <h1>RECEPTION</h1>
        <p>Manage daily operations, guests, and bookings efficiently.</p>
    </div>
</section>

{{-- SEARCH --}}
<div class="reception-search">
    <input type="text" placeholder="Search Guests & Rooms">
    <button>🔍</button>
</div>

{{-- RESERVATIONS --}}
<section class="reception-section">
    <small>Guests arriving</small>
    <h2>RESERVATIONS</h2>

    <table class="reception-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>ROOM</th>
                <th>CHECK IN</th>
                <th>CHECK OUT</th>
                <th>AMOUNT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>101</td>
                <td><strong>Stephen Malkmus</strong></td>
                <td>Single</td>
                <td>DEC 24, 2025</td>
                <td>DEC 25, 2025</td>
                <td>₱ 1,309</td>
                <td><button class="btn-primary">CHECK IN</button></td>
            </tr>

            <tr>
                <td>102</td>
                <td><strong>Kali Uchis</strong></td>
                <td>Suite</td>
                <td>DEC 24, 2025</td>
                <td>DEC 28, 2025</td>
                <td>₱ 2,309</td>
                <td><button class="btn-primary">CHECK IN</button></td>
            </tr>
        </tbody>
    </table>
</section>

<hr>

{{-- CHECKOUTS --}}
<section class="reception-section">
    <small>Guests leaving</small>
    <h2>CHECK-OUTS</h2>

    <table class="reception-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>ROOM</th>
                <th>CHECK IN</th>
                <th>CHECK OUT</th>
                <th>AMOUNT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>101</td>
                <td><strong>Stephen Malkmus</strong></td>
                <td>Single</td>
                <td>DEC 24, 2025</td>
                <td>DEC 25, 2025</td>
                <td>₱ 1,309</td>
                <td><button class="btn-primary">CHECK OUT</button></td>
            </tr>

            <tr>
                <td>102</td>
                <td><strong>Kali Uchis</strong></td>
                <td>Suite</td>
                <td>DEC 24, 2025</td>
                <td>DEC 28, 2025</td>
                <td>₱ 2,309</td>
                <td><button class="btn-primary">CHECK OUT</button></td>
            </tr>
        </tbody>
    </table>
</section>

@endsection
