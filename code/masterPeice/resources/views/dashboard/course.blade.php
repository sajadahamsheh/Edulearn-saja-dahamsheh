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
<form action="course/addcourse" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="form-group">
        <label for="name">Name of course</label>
        <input type="text" name='course_name' class="form-control" id="name" aria-describedby=nameHelp"
            placeholder="Name of course">
        <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
        <label for="name">Course price</label>
        <input type="number" name='course_price' class="form-control" id="name" aria-describedby=nameHelp"
            placeholder="course price">
        <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
        <label for="name">Course description</label>
        <input type="text" name='course_desc' class="form-control" id="name" aria-describedby=nameHelp"
            placeholder="course description">
        <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
        <label for="name">Course discount</label>
        <input type="number" name='course_discount' class="form-control" id="name" aria-describedby=nameHelp"
            placeholder="course discount">
        <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
        <label for="name">Number of lessons</label>
        <input type="number" name='lessons' class="form-control" id="name" aria-describedby=nameHelp"
            placeholder="course discount">
        <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
        <label for="name">course teacher</label>
        <input type="text" name='course_teacher' class="form-control" id="name" aria-describedby=nameHelp"
            placeholder="course discount">
        <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
        <label for="name">teacher education</label>
        <input type="text" name='teacher_education' class="form-control" id="name" aria-describedby=nameHelp"
            placeholder="course discount">
        <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Course image</label>
        <input type="file" name='course_img' class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Teacher image</label>
        <input type="file" name='teacher_img' class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="name">Course level</label>
        
            <select class="form-control" name="course_level">
                <option selected="">Choose ....</option>
                
                <option >Basic</option>
                <option >mid level</option>
                <option >high level</option>
                
            </select>
        
    </div>
    <div class="form-group">
        <label for="name">Category Name</label>
        
            <select class="form-control" name="cat_id">
                <option selected="">Choose ....</option>
                @foreach ($cats as $cat)
                <option value="{{$cat['id']}}">{{$cat['cat_name']}}</option>
                @endforeach
            </select>
        
    </div>

    <button type="submit" class="redbtn">Submit</button>
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
                        <th>Number of lessons</th>
                        <th>Course level</th>
                        <th>Course teacher</th>
                        <th>Teacher education</th>
                        <th>Teacher image</th>
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
                        <th>Number of lessons</th>
                        <th>Course level</th>
                        <th>Course teacher</th>
                        <th>Teacher education</th>
                        <th>Teacher image</th>
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
                        <td>{{$course['lessons']}}</td>
                        <td>{{$course['course_level']}}</td>
                        <td>{{$course['course_teacher']}}</td>
                        <td>{{$course['teacher_education']}}</td>
                        <td><<img style="height: 75px;" src="/images/{{$course['teacher_img']}}" alt=""></td>
                        @foreach ($cats as $cat)
                        @if ($cat['id']== $course['cat_id'])
                        <td> {{$cat['cat_name']}}</td>
                        @endif
                        @endforeach
                        <td><a class='btn btn-info'   style="border:none !important;border-radius: 0% !important;padding:7px 20px !important ;  "  href="course/editcourse/{{$course['id']}}/editcourse">Edit</a></td>
                        <td><a class='btn btn-danger' style="border:none !important;border-radius: 0% !important;padding:7px 20px !important ;  "   href="course/deletecourse/{{$course['id']}}">Delete</a></td>



                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
