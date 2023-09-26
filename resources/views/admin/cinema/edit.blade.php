@extends('admin.layout.home')
@section('content')
<form action="/cinema/update/{{ $cinema->id }}" method="POST" data-toggle="validator" enctype="multipart/form-data">
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
                                    <h4 class="card-title">Add cinemas</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Name *</label>
                                            <input type="text" class="form-control"
                                                name="name" value="{{ $cinema->name }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                  </div> 
                                  <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address *</label>
                                            <input type="text" class="form-control"
                                                name="address" value="{{ $cinema->address }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>city</label>
                                              <select class="form-control" name="country_id" aria-label="Default select example">
                                                <option value="0" disabled>Chọn thành phố</option>
                                                @if (!empty($country))
                                                @foreach ($country as $item)
                     
                                                    <option value="{{ $item->id }}"{{$cinema->country_id == $item->id ? 'selected':''}}>{{$item->name}}</option>
                     
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
                                            <label>description</label>
                                              <textarea name="description" class="form-control" cols="30" rows="5">{{ $cinema->description }}</textarea>
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