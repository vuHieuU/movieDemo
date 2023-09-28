@extends('admin.layout.home')
@section('content')

    <!-- Wrapper Start -->
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
        </div>      <div class="content-page">
       <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                      <div>
                          <h4 class="mb-3">dayHour List</h4>
                          <p class="mb-0">The product list effectively dictates product presentation and provides space<br> to list your products and offering in the most appealing way.</p>
                      </div>
                      <a href="/dayHour/create" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add dayHour</a>
                  </div>
              </div>
              <div class="col-lg-12">
                  <div class="table-responsive rounded mb-3">
                  <table class="data-tables table mb-0 tbl-server-info">
                      <thead class="bg-white text-uppercase">
                          <tr class="ligth ligth-data">
                              <th>
                                  <div class="checkbox d-inline-block">
                                      <input type="checkbox" class="checkbox" id="checkbox1" data-master-checkbox>
                                      <label for="checkbox1" class="mb-0"></label>
                                  </div>
                              </th>
                              <th>Day</th>
                              <th>Hour</th>
                            
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody class="ligth-body">

                        @foreach ($dayHour as $item)
                            
                    
              
                          <tr>
                              <td>
                                  <div class="checkbox d-inline-block">
                                      <input type="checkbox" class="checkbox" id="checkbox10">
                                      <label for="checkbox10" class="mb-0"></label>
                                  </div>
                              </td>
                              <td>{{ $item->day->day }}</td>
                              <td>{{ $item->hour->time }}</td>
                            
                              <td>
                                  <div class="d-flex align-items-center list-action">
                                      <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                          href="#"><i class="ri-eye-line mr-0"></i></a>
                                      <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                          href="/dayHour/edit/{{ $item->id }}"><i class="ri-pencil-line mr-0"></i></a>
                                      <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                          href="/dayHour/delete/{{ $item->id }}"><i class="ri-delete-bin-line mr-0"></i></a>
                                  </div>
                              </td>
                          </tr>

                          @endforeach
                      </tbody>
                  </table>
                  </div>
              </div>
          </div>
          <!-- Page end  -->
      </div>
      <!-- Modal Edit -->
      <div class="modal fade" id="edit-note" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-body">
                      <div class="popup text-left">
                          <div class="media align-items-top justify-content-between">                            
                              <h3 class="mb-3">Product</h3>
                              <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                          </div>
                          <div class="content edit-notes">
                              <div class="card card-transparent card-block card-stretch event-note mb-0">
                                  <div class="card-body px-0 bukmark">
                                      <div class="d-flex align-items-center justify-content-between pb-2 mb-3 border-bottom">                                                    
                                          <div class="quill-tool">
                                          </div>
                                      </div>
                                      <div id="quill-toolbar1">
                                          <p>Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday.Virtual Digital Marketing Course every week on Monday</p>
                                      </div>
                                  </div>
                                  <div class="card-footer border-0">
                                      <div class="d-flex flex-wrap align-items-ceter justify-content-end">
                                          <div class="btn btn-primary mr-3" data-dismiss="modal">Cancel</div>
                                          <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
        </div>
      </div>
@endsection