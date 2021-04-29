@extends('../dashboard/index')

@section('content')
<form action="course/addcourse" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="form-group">
        <label for="name">Name of course</label>
        <input type="text" name='course_name' class="form-control" id="name" aria-describedby=nameHelp"
            placeholder="Enter name">
        <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
        <label for="name">course price</label>
        <input type="number" name='course_price' class="form-control" id="name" aria-describedby=nameHelp"
            placeholder="Enter name">
        <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
        <label for="name">course description</label>
        <input type="text" name='course_desc' class="form-control" id="name" aria-describedby=nameHelp"
            placeholder="Enter name">
        <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
        <label for="name">course discount</label>
        <input type="number" name='course_discount' class="form-control" id="name" aria-describedby=nameHelp"
            placeholder="Enter name">
        <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">course image</label>
        <input type="file" name='course_img' class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="name">category Name</label>
        <div class="col-sm-12 col-md-10">
            <select class="custom-select col-12" name="cat_id">
                <option selected="">Choose ....</option>
                @foreach ($cats as $cat)
                <option value="{{$cat['id']}}">{{$cat['cat_name']}}</option>
                @endforeach
            </select>
        </div>
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
                        <th>course name</th>
                        <th>course description</th>
                        <th>course img</th>
                        <th>course price</th>
                        <th>course discount</th>
                        <th>category name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>course name</th>
                        <th>course description</th>
                        <th>course img</th>
                        <th>course price</th>
                        <th>course discount</th>
                        <th>category name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($courses as $course)
                    <tr>
                        <td>{{$course['id']}}</td>
                        <td>{{$course['course_name']}}</td>
                        <td>{{$course['course_desc']}}</td>
                        <td><img style="height: 75px;" src="/images/{{$course['course_img']}}" alt=""></td>
                        <td>{{$course['course_price']}}</td>
                        <td>{{$course['course_discount']}}</td>
                        @foreach ($cats as $cat)
                        @if ($cat['id']== $course['cat_id'])
                        <td> {{$cat['cat_name']}}</td>
                        @endif
                        @endforeach
                        <td><a href="course/editcourse/{{$course['id']}}/editcourse">Edit</a></td>
                        <td><a href="course/deletecourse/{{$course['id']}}">Delete</a></td>



                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
