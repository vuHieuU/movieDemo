<?php

namespace App\Http\Controllers\cart;

use App\Models\film;
use App\Models\seat;
use App\Models\ticket;
use App\Models\showtimes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\showtime_seat;
use Illuminate\Support\Facades\Auth;

class dateTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $id)
    {
        $film = film::findOrFail($id);
        $showtimes = $film->showtimes;
        return view('client.cart.dateTime',compact('film','showtimes'));
    }
//     public function room(Request $request, $id)
// {
//     $film = Film::findOrFail($id);
//     $selectedDate = $request->input('selectedDate');
//     $selectedHour = $request->input('selectedHour');
//     session(['selectedDate' => $selectedDate]);
//     session(['selectedHour' => $selectedHour]);
//     // Sử dụng whereHas để lọc showtimes theo day và hour từ bảng hours
//     $showtimes = $film->showtimes()
//         ->whereHas('hours', function ($query) use ($selectedDate, $selectedHour) {
//             $query->where('day', $selectedDate)
//                   ->where('time', $selectedHour);
//         })
//         ->get();

//     return view('client.cart.Room', compact('film', 'showtimes'));
// }
public function seat(Request $request, $id)
{
    // Lấy thông tin về phim
    $film = Film::findOrFail($id);
    $selectedDate = $request->input('selectedDate');
    $selectedHour = $request->input('selectedHour');
    $selectedShowtimeId = $request->input('selectedShowtimeId');
    session(['selectedDate' => $selectedDate]);
    session(['selectedHour' => $selectedHour]);
    session(['selectedShowtimeId' => $selectedShowtimeId]);
    $showTime = ShowTimes::findOrFail($selectedShowtimeId);
    $seats = DB::table('showtime_seats')
    ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
    ->join('type_seats', 'seats.typeSeat_id', '=', 'type_seats.id')
    ->where('showtime_seats.showtime_id', $selectedShowtimeId)
    ->select('seats.*', 'showtime_seats.isActive', 'type_seats.price')
    ->get();

        // dd($seats);
    return view('client.cart.seat', compact('film', 'seats'));
}


public function pay(Request $request, $id)
{
    $film = Film::findOrFail($id);
    $data = [
        $film['name'],
        $selectedDate = session('selectedDate'),
        $selectedHour = session('selectedHour'),
        $selectedRoomName = session('selectedRoomName'),
        $selectedSeatsName = $request->input('selectedSeatsName'),
        $total = $request->input('total'),
    ];
    $selectedSeatsID = $request->input('selectedSeatsID');
    session(['selectedSeatsID' => $selectedSeatsID]);
    session(['selectedSeatsName' => $selectedSeatsName]);
    session(['total' => $total]);
    return view('client.cart.pay',compact('film','data'));
}

public function handlePay(Request $request, $film_id)
{
    // Lấy thông tin đơn hàng từ request
    $selectedDate = session('selectedDate');
    $selectedHour = session('selectedHour');
    $selectedShowtimeId = session('selectedShowtimeId');
    $selectedRoomName = session('selectedRoomName');
    $selectedSeatsName = session('selectedSeatsName');
    $selectedSeatsID = session('selectedSeatsID');
    // dd($selectedSeatsName);
    $total = session('total');

    // Lấy thông tin người đăng nhập
    $user = auth()->user();

    // Lấy thông tin bộ phim từ biến $film
    $film = Film::findOrFail($film_id);

    // Tạo bản ghi Ticket và lưu vào cơ sở dữ liệu
    $ticket = new Ticket();
    $ticket->film_name = $film->name;
    $ticket->selected_date = $selectedDate;
    $ticket->selected_hour = $selectedHour;
    $ticket->selected_room = 'Room1';
    $ticket->selected_seats = $selectedSeatsName;
    $ticket->user_id = $user->id;
    $ticket->buyer_name = $user->name;
    $ticket->film_id = $film_id;
    $ticket->total = $total;

    $ticket->save();

    $selectSeatArray = explode(',', $selectedSeatsID);

    showtime_seat::where('showtime_id',$selectedShowtimeId)
               ->whereIn('seat_id',$selectSeatArray)
               ->update(['isActive' => 2]);


    return redirect('/'); 
}

}
