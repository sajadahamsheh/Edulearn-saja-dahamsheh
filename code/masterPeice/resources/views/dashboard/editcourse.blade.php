@extends('../dashboard/index')
@section('style')
<style>
            .redbtn{
                background-color: #ff3115 !important;
                color: white !important;
                border-radius:0 !important ;
                border: none !important;
                padding: 10px 100px !important  ;
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
<form action="/course/updatecourse/{{$course['id']}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    @method('PUT')

    <div class="form-group">
        <label for="name">Name of course</label>
        <input type="text" name='course_name' value="{{$course['course_name']}}" class="form-control" id="name"
            aria-describedby=nameHelp" placeholder="Enter name">

    </div>
    <div class="form-group">
        <label for="name">course price</label>
        <input type="number" name='course_price' value="{{$course['course_price']}}" class="form-control" id="name"
            aria-describedby=nameHelp" placeholder="Enter name">

    </div>
    <div class="form-group">
        <label for="name">course description</label>
        <input type="text" name='course_desc' class="form-control" value="{{$course['course_desc']}}" id="name"
            aria-describedby="nameHelp" placeholder="Enter name">

    </div>
    <div class="form-group">
        <label for="name">course discount</label>
        <input type="number" name='course_discount' value="{{$course['course_discount']}}" class="form-control"
            id="name" aria-describedby="nameHelp" placeholder="Enter name">

    </div>
    <div class="form-group">
        <label for="name">Number of lessons</label>
        <input type="number" name='lessons' class="form-control" value="{{$course['lessons']}}"  id="name" aria-describedby=nameHelp"
            placeholder="course discount">
        <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
        <label for="name">course teacher</label>
        <input type="text" name='course_teacher' class="form-control" value="{{$course['course_teacher']}}"  id="name" aria-describedby=nameHelp"
            placeholder="course discount">
        <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
        <label for="name">teacher education</label>
        <input type="text" name='teacher_education' class="form-control"  value="{{$course['teacher_education']}}" id="name" aria-describedby=nameHelp"
            placeholder="course discount">
        <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Teacher image</label>
        <input type="file" name='teacher_img' class="form-control" value="{{$course['teacher_img']}}"  id="exampleInputPassword1" placeholder="Password">
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
        <label for="exampleInputPassword1">course image</label>
        <input type="file" name='course_img' class="form-control" value="images/{{$course['course_img']}}"
            id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="name">category Name</label>
        <div class="col-sm-12 col-md-10">
            <select class="custom-select col-12" name="cat_id">
                <option value="{{$course['cat_id']}}" selected="">Choose ....</option>
                @foreach ($cat as $cats)
                <option value="{{$cats['id']}}">{{$cats['cat_name']}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <button type="submit" class="redbtn">Submit</button>
</form>
<!-- dashboard Table -->

@endsection
