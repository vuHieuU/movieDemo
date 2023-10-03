@extends('client.home')
@section('content')

<div class="container">
    <div class="mt-5">
        <h2 class="ms-3 fw-bold">1. Chọn Ghế</h2>
        <hr>
    </div>
    <div class="mt-5">
        <div class="row g-3">
            @foreach($seats as $seat)
            <div class="col">
                @if($seat->isActive == 1)
                    <button class="btn btn-light seat-button" data-seat="{{ $seat->seat_number }}" data-seat-id="{{ $seat->id }}">
                        {{ $seat->seat_number }}
                        <span style="display: none">{{ $seat->price }}</span>
                    </button>
                @else
                    <button class="btn btn-danger" disabled>
                        {{ $seat->seat_number }} (Đã đặt)
                    </button>
                @endif
            </div>
        @endforeach
        
        </div>  
    </div>

    <div>
        <h4>Bạn chọn ghế: <span id="selected-seats"></span></h4>
    </div>

    <div>
        <h4>Tổng tiền : <span id="total-price">0</span> đ</h4>
    </div>
    
    <form method="get" action="{{ route('pay',['film_id'=> $film->id]) }}">
        @csrf
        <input type="hidden" name="selectedSeatsID" id="selectedSeatsID" value="">
        <input type="hidden" name="selectedSeatsName" id="selectedSeatsName" value="">
        <input type="hidden" name="total" id="total" value="">

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

<!-- JavaScript to handle seat selection -->
<script>
  // Lấy các ghế đã chọn
const seatButtons = document.querySelectorAll('.seat-button');
const selectedSeatsDisplay = document.getElementById('selected-seats');
const selectedSeatsInputID = document.getElementById('selectedSeatsID');
const selectedSeatsInputName = document.getElementById('selectedSeatsName');
const totalPriceDisplay = document.getElementById('total-price');
const totalPriceInput = document.getElementById('total');

let totalPrice = 0;

seatButtons.forEach(button => {
    button.addEventListener('click', () => {
        button.classList.toggle('selected');

        // Lấy tất cả name của các ghế đã chọn
        const selectedSeats = Array.from(document.querySelectorAll('.seat-button.selected'))
            .map(selectedSeat => selectedSeat.dataset.seat);
        selectedSeatsDisplay.textContent = selectedSeats.join(', ');
        selectedSeatsInputName.value = selectedSeats.join(', ');
         // Lấy tất cả id của các ghế đã chọn
        const selectedSeatIds = Array.from(document.querySelectorAll('.seat-button.selected'))
            .map(selectedSeat => selectedSeat.getAttribute("data-seat-id"));
            selectedSeatsInputID.value = selectedSeatIds.join(', ');

        // Tính tổng tiền dựa trên ghế đã chọn
        totalPrice = selectedSeats.reduce((total, seat) => {
            const seatPrice = parseFloat(document.querySelector(`.seat-button[data-seat="${seat}"] span`).textContent);
            return total + seatPrice;
        }, 0);

        // Cập nhật hiển thị tổng tiền
        totalPriceDisplay.textContent = totalPrice;
        totalPriceInput.value = totalPrice;
    });
});

</script>
