@extends('client.home')
@section('content')

<div class="container">
    <div class="mt-5">
        <h2 class="ms-3 fw-bold">1. Chọn Phòng</h2>
        <hr>
    </div>
    <div class="mt-5">
        <div class="row g-3">
            @foreach($showtimes as $item)
            <div class="col room-item" data-room-id="{{ $item->rooms->id }}" data-name-id="{{ $item->rooms->name }}">
                <h3>{{ $item->rooms->name }}</h3>
                <h3>Số Lượng: {{ $item->rooms->max }}</h3>
            </div>
        @endforeach
        </div>
    </div>
        
    <form method="get" action="{{route('seat',['film_id'=> $film->id]) }}">
        @csrf
        <input type="hidden" name="selectedRoomID" id="selectedRoomID" value="">
        <input type="hidden" name="selectedRoomName" id="selectedRoomName" value="">

        <div class="text-center mt-5" style="margin-bottom: 70px">
            <button type="submit" class="btn btn-danger px-5 py-2 fs-4">
                Tiếp tục
                <br>
                Đặt chỗ ngồi
            </button>
        </div>
    </form>
</div>

<!-- Import thư viện Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>
    /* Định dạng cho phòng đã chọn */
    .selected-room {
        background-color: rgb(245, 237, 237);
        color: black;
        font-weight: bold;
    }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const roomElements = document.querySelectorAll(".room-item");
    const selectedRoomInputID = document.getElementById("selectedRoomID");
    const selectedRoomInputName = document.getElementById("selectedRoomName");

    roomElements.forEach(function (roomElement) {
        roomElement.addEventListener("click", function () {
            // Loại bỏ lớp "selected-room" từ tất cả các phòng trước
            roomElements.forEach(function (element) {
                element.classList.remove("selected-room");
            });

            // Thêm lớp "selected-room" cho phòng đã chọn
            roomElement.classList.add("selected-room");

            // Lấy ID phòng được lưu trữ trong thuộc tính "data-room-id"
            const selectedRoomId = roomElement.getAttribute("data-room-id");
            const selectedRoomName = roomElement.getAttribute("data-name-id");

            // Lấy Name phòng được lưu trữ trong thuộc tính "data-name-id"

            // Cập nhật giá trị input ẩn
            selectedRoomInputID.value = selectedRoomId;
            selectedRoomInputName.value = selectedRoomName;
        });
    });
});
</script>
@endsection
