@extends('../dashboard/index')

@section('content')
<form action="/admin/updateadmin/{{$admin['id']}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" name='name' class="form-control" id="name" value="{{$admin['name']}}" aria-describedby=nameHelp" placeholder="Enter name">
                                <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name='email' class="form-control" value="{{$admin['email']}} " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                     <!-- dashboard Table -->
                       
                        @endsection