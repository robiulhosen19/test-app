@extends('admin/layouts/two_col')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Pending Users</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank" -->
                           

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ALL Users</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pending_users as $p)
                                        <tr>
                                            <td>{{$p->first_name}} {{$p->last_name}}</td>
                                            <td>{{$p->email}}</td>
                                            <td>
                                                @if($p->status) 
                                                <span class="badge badge-success">Not Approved</span>
                                                @else
                                                <span class="badge badge-danger">Not Approved</span>
                                                @endif


                                            </td>
                                            <td>
                                                <a href="{{url('admin/approve-user/'.$p->id)}}" class="btn btn-sm btn-primary"  >Approved</a>
                                                
                                            </td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection

