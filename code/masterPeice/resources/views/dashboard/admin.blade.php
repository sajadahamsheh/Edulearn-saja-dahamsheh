@extends('../dashboard/index')
@section('style')
<style>
            .redbtn{
                background-color: #ff3115 !important;
                color: white !important;
                border-radius:0 !important ;
                border: none !important;
                padding: 7px 20px !important  ;
                margin: auto !important;
                margin-bottom: 20px !important;
                display: flex !important;
                justify-content: center !important;

                
            }
            .redbtn:hover{
                background-color: #e41f05 !important;
                color: rgba(255, 255, 255, 0.7) !important;
                box-shadow: 0 10px 20px rgb(255 255 255 / 4%) !important;

            }
</style>
@endsection

@section('content')
<form action="/admin/addadmin" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" name='name' class="form-control" id="name" aria-describedby=nameHelp" placeholder="Enter name">
                                <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            
                            <button type="submit" class="btn btn-primary redbtn">Submit</button>
                    </form>
                     <!-- dashboard Table -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Admin name</th>
                                                <th>Admin email</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Admin name</th>
                                                <th>Admin email</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach ($admins as $admin)
                                            <tr>
                                                <td>{{$admin['id']}}</td>
                                                <td>{{$admin['name']}}</td>
                                                <td>{{$admin['email']}}</td>
                                                <td><a class="btn btn-info" style="border:none !important;border-radius: 0% !important;padding:7px 20px !important ;  " href="admin/editadmin/{{$admin['id']}}/editadmin ">Edit</a></td>
                                                <td><a class="btn btn-danger"   style="border:none !important;border-radius: 0% !important;padding:7px 20px !important ;" href="admin/deleteadmin/{{$admin['id']}} ">Delete</a></td>
                                               
                                            </tr>
                                          @endforeach 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endsection