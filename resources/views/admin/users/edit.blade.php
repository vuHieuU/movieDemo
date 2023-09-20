@extends('admin.layout.home')
@section('content')
<form action="/user/update/{{ $user->id }}" method="POST" data-toggle="validator">
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
                                    <h4 class="card-title">Add Roles</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Name *</label>
                                            <input type="text" class="form-control" placeholder="name"
                                                name="name" value="{{ $user->name }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                  </div>
                             
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email *</label>
                                                <input type="text" class="form-control" placeholder="Enter email"
                                                    name="email" value="{{ $user->email }}">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>phone</label>
                                                <input type="text" class="form-control" placeholder="phone"
                                                    name="phone" value="{{ $user->phone }}">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>address</label>
                                                <input type="text" class="form-control" placeholder="address"
                                                    name="address" value="{{ $user->address }}">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>gender</label>
                                                <input type="text" class="form-control" placeholder="gender"
                                                    name="gender" value="{{ $user->gender }}">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>password</label>
                                                <input type="password" class="form-control" placeholder="password"
                                                    name="password">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label>
                                         <div class="row container m-auto">
                                                @foreach ($role as $groupName => $role)
                                                <div class="col-4 pb-3">
                                                        <h4><b>{{ $groupName }}</b></h4>
                                                        @foreach ($role as $item)
                                                        <div class="form-check">
                                                          <input class="form-check-input" name="role_ids[]" type="radio" 
                                                          {{ $user->roles->contains('id',$item->id) ? 'checked':'' }} value="{{ $item->id }}">
                                                          <label class="form-check-label" for="flexCheckDefault">
                                                            {{ $item->display_name }}
                                                          </label>
                                                        </div>
                                                        @endforeach
                                                      </div>
                                                @endforeach
                                          </div>
                                      </div>
                                    <button type="submit" class="btn btn-primary mr-2">Update User</button>
                                    <button type="reset" class="btn btn-danger mr-2">Reset</button>
                                    <a href="/user/index"><button type="submit" class="btn btn-danger">Back</button></a>
                             
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