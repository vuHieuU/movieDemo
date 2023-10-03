@extends('client.home')
@section('content')

<div class="container">
    <div class="mt-5">
        <h2 class="ms-3 fw-bold">1. Thông tin vé đặt</h2>
        <hr>
    </div>
    <div class="mt-5">
        <div class="row g-3">
                <p>Film Name: {{ $film->name }}</p>
                <p>Date: {{ $data[1] }}</p>
                <p>Hour: {{ $data[2] }}</p>
                <p>Room: {{ $data[3] }}</p>
                <p>Seats: {{ $data[4] }}</p>
                <p>Total: {{ $data[5] }}</p>
        </div>
    </div>

    <form method="POST" action="{{ route('saveTicket', ['film_id' => $film->id]) }}">
        @csrf
        <div class="text-center mt-5" style="margin-bottom: 70px">
            <button type="submit" class="btn btn-danger px-5 py-2 fs-4">
                Tiếp tục
                <br>
                Thanh toán
            </button>
        </div>
    </form>
    
</div>

<!-- Import thư viện Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</html>
