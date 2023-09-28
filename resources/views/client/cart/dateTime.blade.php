@extends('client.home')
@section('content')

<div class="container">
    <div class="mt-5">
        <h2 class="ms-3 fw-bold">1. Chọn ngày và giờ</h2>
        <hr>
    </div>

    <div class="mt-5">
        <div style="padding-left:50px; padding-right:50px;" class="form-group">
            <h2 class="fw-bold">Chọn ngày xem</h2>
            <div class="d-flex align-items-center">
                <h3 class="fw-bold mx-4 mt-3">Date: </h3>
                @foreach ($showtimes as $showtime)
                    @if (!isset($previousDate) || $showtime->day != $previousDate)
                        <h2 class="ms-5 mt-3 showtime-day date-button" data-showtime-date="{{ $showtime->day }}">{{ $showtime->day }}</h2>
                        @php $previousDate = $showtime->day @endphp
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="btn btn-light my-5 w-100 py-5">
        <h3 class="fw-semibold" id="selectedDateText">Ngày</h3>
    </div>
    <div>
        <div class="form-group">
            <h2 class="fw-bold" style="padding-left:50px ">Chọn giờ xem</h2>
            <div class="w-100 py-3 mt-4 text-center" style="background-color: rgb(224, 242, 242);">
                @foreach ($showtimes as $item)
                <button class="btn btn-warning px-5 py-3 fw-medium fs-5 custom-bg-red hour-button"
                    data-showtime-date="{{ $item->day }}" style="margin-right: 20px; margin-top:10px; display: none;"
                    onclick="selectHour('{{ $item->hours->time }}')">
                    {{ $item->hours->time }}
                </button>
                @endforeach
            </div>
        </div>
    </div>

    <div class="btn btn-light my-5 w-100 py-5">
        <h3 class="fw-semibold" id="selectedHourText">Giờ </h3>
    </div>
    <form method="POST" action="{{route('date',['film_id'=> $film->id]) }}">
        @csrf
        <input type="hidden" name="selectedDate" id="selectedDate" value="">
        <input type="hidden" name="selectedHour" id="selectedHour" value="">

        <div class="text-center mt-5" style="margin-bottom: 70px">
            <button type="submit" class="btn btn-danger px-5 py-2 fs-4">
                Tiếp tục
                <br>
                Đặt chỗ ngồi
            </button>
        </div>
    </form>
</div>

<script>
    var selectedDate = ""; // Biến để lưu trữ ngày được chọn

    // Hàm được gọi khi người dùng chọn ngày
    function selectDate(date) {
        selectedDate = date;
        var selectedDateElement = document.getElementById("selectedDate");
        var selectedDateElementText = document.getElementById("selectedDateText");
        selectedDateElementText.textContent = "Đã chọn ngày: " + selectedDate;
        selectedDateElement.value = selectedDate;
        var dateHover = document.querySelectorAll(".date-button");
        dateHover.forEach(function (button) {
            button.classList.remove("selected-date");
        });
        event.currentTarget.classList.add("selected-date");

        // Hiển thị giờ xem tương ứng với ngày được chọn và ẩn giờ xem của các ngày khác
        var hourButtons = document.querySelectorAll(".hour-button");
        hourButtons.forEach(function (button) {
            var showtimeDate = button.getAttribute("data-showtime-date");
            if (showtimeDate === selectedDate) {
                button.style.display = "inline-block";
            } else {
                button.style.display = "none";
            }
        });
    }

    // Hàm được gọi khi người dùng chọn giờ
    function selectHour(hour) {
        var selectedHourElement = document.getElementById("selectedHour");
        var selectedHourElementText = document.getElementById("selectedHourText");
        selectedHourElementText.textContent = "Đã chọn giờ: " + hour;
        selectedHourElement.value = hour; // Cập nhật giá trị input selectedHour

        var hourButtons = document.querySelectorAll(".hour-button");
        hourButtons.forEach(function (button) {
            button.classList.remove("selected-hour");
        });
        event.currentTarget.classList.add("selected-hour");
}

    // Sự kiện click trên mỗi ngày để xác định ngày được chọn
    var showtimeDayElements = document.querySelectorAll(".showtime-day");
    showtimeDayElements.forEach(function (element) {
        element.addEventListener("click", function () {
            var selectedDay = element.getAttribute("data-showtime-date");
            selectDate(selectedDay);
        });
    });
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    .selected-date {
        background-color: gainsboro;
        padding: 8px 20px;
        border: 1px;
        border-radius: 10px;
        color: black;
    }
    .selected-hour {
        background-color: red;
        color: white;
    }

    .custom-bg-red:hover {
        background-color: red;
        color: white;
    }
</style>
@endsection
