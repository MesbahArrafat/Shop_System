@extends('backend.dashboard.mastertemp')

@section('breadcrumb')
<h4>Product</h4>
<nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.html">Dashboard</a>
    <a class="breadcrumb-item" href="#">Cost</a>
    <span class="breadcrumb-item active text-success">Cost</span>
  </nav>
  @endsection
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
                    <!-- Modal -->
                    <div class="modal fade" id="DataInsertModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                         <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cost Info</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                         <div class="modal-body">
                       </div>

                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success SaveData">Data Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Modal -->
            <div class="br-pagebody">
              <div class="row">
                <div class="col-md-4">
                      <div class="card">
                        <div class="card-header">
                             <h1>Insert data</h1>
                        </div>
                        <div class="card-body">
                        <form action="{{route('registestore')}}" method="POST">
                          @csrf 
                            <div class="form-group">
                              <label for="">Name</label>
                              <input type="text" class="form-control" name="name"  >
                              <span class="text-danger date_error"></span>
                            </div>
                            <div class="form-group">
                              <label for="">Address </label>
                              <textarea type="text" class="form-control purpose" placeholder="Enter address" name="address"></textarea>
                              <span class="text-danger purpose_error"></span>
                            </div>
                            <div class="form-group">
                              <label for="">phone </label>
                              <input type="text" class="form-control spender" placeholder=" Enter phone" name="phone">
                              <span class="text-danger amount_error"></span>
                            </div>
                              <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control " name="email" placeholder=" Enter Email" name="email">
                                <span class="text-danger amount_error"></span>
                              </div>
                              <div class="form-group">
                                <input type="submit" class="btn btn-success">
                              </div>
                              </form>
                        </div>
                      </div>
                </div>
                <div class="col-md-8">
                  <div class="card">
                    <div class="card-header">
                      <h1>table infomation</h1>
                    </div>
                    <div class="card-body">
                    <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                      <thead>
                        <tr>
                            <th class="wd-15p">SL</th>
                            <th class="wd-15p">user Id</th>
                            <th class="wd-15p">Token</th>
                            <th class="wd-15p">Email</th>
                        </tr>
                      </thead>
                      <tbody class="datashow">
                      @foreach ($data as $key=>$product)
                         <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$product->user_id}}</td>
                          <td>{{$product->token}}</td>
                          <td>{{$product->email}}</td>
                         </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div><!-- table-wrapper -->
                    </div>
                  </div>
                </div>
              </div>
       


          
    </div>
</div>
@endsection

@section('footer')
<script>
$(document).ready( function () {
    $('#datatable1').DataTable();
} );
    </script> 

@endsection
