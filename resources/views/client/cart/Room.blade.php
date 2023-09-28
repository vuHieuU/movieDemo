@extends('client.home')
@section('content')

<div class="container">
    <div class="mt-5">
        <h2 class="ms-3 fw-bold">1. Chọn Phòng</h2>
        <hr>
    </div>

       <div>
          @foreach ($showtimes as $item)
                    <h3 id="roomName">{{ $item->rooms->name }}</h3>
          @endforeach
       </div>

    <form method="get">
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Lắng nghe sự kiện thay đổi ngày giờ và cập nhật tên phòng
            document.getElementById("selectedDate").addEventListener("change", updateRoomName);
            document.getElementById("selectedHour").addEventListener("change", updateRoomName);
    
            // Hàm cập nhật tên phòng
            function updateRoomName() {
                // Lấy giá trị ngày và giờ từ các input
                var selectedDate = document.getElementById("selectedDate").value;
                var selectedHour = document.getElementById("selectedHour").value;
    
                // Gửi yêu cầu Ajax (hoặc fetch) đến máy chủ để lấy tên phòng dựa trên ngày và giờ
                // Sau khi nhận được dữ liệu từ máy chủ, cập nhật nội dung của phần tử #roomName
                // Ví dụ sử dụng fetch:
                fetch(`/get-room-name?date=${selectedDate}&hour=${selectedHour}`)
                    .then(function (response) {
                        return response.json();
                    })
                    .then(function (data) {
                        document.getElementById("roomName").innerText = data.roomName;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        });
    </script>
    
@endsection
