@extends('admin.layout.home')
@section('content')
<form action="/film/update/{{ $film->id }}" method="POST" data-toggle="validator" enctype="multipart/form-data">
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
                                    <h4 class="card-title">Update Film</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Name *</label>
                                            <input type="text" class="form-control"
                                                name="name" value="{{ $film->name }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                  </div>
                             
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Thời lượng chiếu</label>
                                                <input type="text" class="form-control"
                                                    name="thoiLuongChieu" value="{{ $film->thoiLuongChieu }}">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ngày khởi chiếu</label>
                                                <input type="date" class="form-control"
                                                    name="ngayKhoiChieu" value="{{ $film->ngayKhoiChieu }}">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ngôn ngữ</label>
                                                <input type="text" class="form-control"
                                                    name="ngonNgu" value="{{ $film->ngonNgu }}">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Trailer</label>
                                                <input type="text" class="form-control"
                                                    name="trailer" value="{{ $film->trailer }}">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Đạo diễn</label>
                                                <input type="text" class="form-control"
                                                    name="daoDien"  value="{{ $film->daoDien }}">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Diễn Viên</label>
                                                <input type="text" class="form-control"
                                                    name="dienVien"  value="{{ $film->dienVien }}">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Thumb</label>
                                                <input type="file" class="form-control"
                                                    name="thumb">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Trạng thái</label>
                                                <input type="text" class="form-control"
                                                    name="status" value="{{ $film->status }}">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Content</label>
                                                  <textarea name="content" class="form-control" cols="30" rows="5">{{ $film->content }}</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                      </div> 

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Thể loại</label>
                                            <div class="row container m-auto">
                        
                                                @foreach ($cate as $item)
                                                <div class="form-check mx-3 d-flex align-items-center">
                                                    <input class="form-check-input" name="id_cate[]" type="checkbox"
                                                    {{ $film->categories->contains('name', $item->name) ? 'checked':''}} value="{{ $item->id }}">
                                                    <label class="form-check-label mx-1">
                                                      {{ $item->name }}
                                                    </label>
                                                  </div>
                                              @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Rạp chiếu</label>
                                            <div class="row container m-auto">
                        
                                                @foreach ($cinema as $item)
                                                <div class="form-check mx-3 d-flex align-items-center">
                                                    <input class="form-check-input" name="id_cinema[]" type="checkbox"
                                                    {{  $film->cinemas->contains('name', $item->name) ? 'checked':''}} value="{{ $item->id }}">
                                                    <label class="form-check-label mx-1">
                                                      {{ $item->name }}
                                                    </label>
                                                  </div>
                                              @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Giờ chiếu</label>
                                            <div class="row container m-auto">
                        
                                                @foreach ($hour as $item)
                                                <div class="form-check mx-3 d-flex align-items-center">
                                                    <input class="form-check-input" name="id_hour[]" type="checkbox"
                                                    {{  $film->hours->contains('time', $item->time) ? 'checked':''}} value="{{ $item->id }}">
                                                    <label class="form-check-label mx-1">
                                                      {{ $item->time }}
                                                    </label>
                                                  </div>
                                              @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    
                                
                                    <button type="submit" class="btn btn-primary mr-2">Update Film</button>
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