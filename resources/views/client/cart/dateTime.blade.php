@extends('client.home')
@section('content')

     <form action="" method="POST">
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
                                <input type="date" class="mt-4 form-control w-25 rounded" name="date" id="dateInput" onchange="selectDate()">
     
                            </div>
                  </div>
             </div>
     
              <div class="btn btn-light my-5 w-100 py-5">
                   <h3 class="fw-semibold" id="selectedDate">Ngày</h3>
              </div>
              <div>
                 <div class="form-group">
                        <h2 class="fw-bold" style="padding-left:50px ">Chọn giờ xem</h2>
                           <div class="w-100 py-3 mt-4 text-center" style="background-color: rgb(224, 242, 242);">
                             @foreach ($film->hours as $key => $hour)
                             <button class="btn btn-warning px-5 py-3 fw-medium fs-5 hour-button" style="margin-right: 20px; margin-top:10px; display: inline-block;" onclick="selectHour('{{ $hour->time }}')">
                                 {{ $hour->time }}
                             </button>
                         
                             @if (($key + 1) % 6 == 0)
                                 <br> <!-- Xuống dòng sau khi hiển thị 6 dữ liệu -->
                             @endif
                         @endforeach
                           </div>
                 </div>
            </div>
     
            <div class="btn btn-light my-5 w-100 py-5">
                <h3 class="fw-semibold" id="selectedHour">Giờ </h3>
            </div>
            <div class="text-center mt-5" style="margin-bottom: 70px">
                     <button class="btn btn-danger px-5 py-2 fs-4">
                            Tiếp tục
                            <br>
                            Đặt chỗ ngồi
                     </button>
            </div>
        </div>
     </form>
   <script>
           function selectDate() {
                    var selectedDate = document.getElementById("dateInput").value;
                    var selectedDateElement = document.getElementById("selectedDate");
                    selectedDateElement.textContent = "Đã chọn ngày: " + selectedDate;
                }

                // Hàm được gọi khi người dùng chọn giờ
                function selectHour(hour) {

                    var selectedHourElement = document.getElementById("selectedHour");
                    selectedHourElement.textContent = "Đã chọn giờ: " + hour;

                    var hourButtons = document.querySelectorAll(".hour-button");
                        hourButtons.forEach(function(button) {
                            button.classList.remove("selected-hour");
                        });
                        event.currentTarget.classList.add("selected-hour");
                    
                }
   </script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    .selected-hour {
    background-color: red;
    color: white;
}
</style>
@endsection