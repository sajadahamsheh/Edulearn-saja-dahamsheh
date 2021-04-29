@extends('../dashboard/index')

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
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
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
                                                <td><a href="admin/editadmin/{{$admin['id']}}/editadmin ">Edit</a></td>
                                                <td><a href="admin/deleteadmin/{{$admin['id']}} ">Delete</a></td>
                                               
                                            </tr>
                                          @endforeach 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endsection