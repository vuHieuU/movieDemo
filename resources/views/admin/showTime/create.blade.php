@extends('admin.layout.home')
@section('content')
<form action="/showTime/store" method="POST" data-toggle="validator" enctype="multipart/form-data">
    @csrf
    <div class="wrapper">
        <div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <h4 class="mb-3">New Order</h4>
                            <div class="content create-workform bg-body">
                                <div class="pb-3">
                                    <label class="mb-2">Email</label>
                                    <input type="text" class="form-control" placeholder="Enter Name or Email">
                                </div>
                                <div class="col-lg-12 mt-4">
                                    <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                        <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                        <div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-page">
            <div class="container-fluid add-form-list">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Add Showtime</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Film</label>
                                                  <select name="film_id" class="form-control">
                                                         @if (!empty($film))

                                                            @foreach ($film as $item)
                                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                            @endforeach
                                                             
                                                         @endif
                                                  </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                  </div> 
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>day</label>
                                            <input type="date" class="form-control"
                                                name="day">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                  </div> 
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Time</label>
                                                  <select name="hour_id" class="form-control">
                                                         @if (!empty($hour))

                                                            @foreach ($hour as $item)
                                                                <option value="{{ $item->id }}">{{ $item->time }}</option>
                                                            @endforeach
                                                             
                                                         @endif
                                                  </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                  </div> 
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Room</label>
                                                  <select name="room_id" class="form-control">
                                                         @if (!empty($room))

                                                            @foreach ($room as $item)
                                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                            @endforeach
                                                             
                                                         @endif
                                                  </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                  </div> 

                                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                                    <button type="reset" class="btn btn-danger mr-2">Reset</button>
                                    {{-- <a href="/user/index"><button type="submit" class="btn btn-danger">Back</button></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page end  -->
            </div>
        </div>
    </div>
</form>

@endsection