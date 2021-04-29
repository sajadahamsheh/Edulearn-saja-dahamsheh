@extends('../dashboard/index')

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

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!-- dashboard Table -->

@endsection
