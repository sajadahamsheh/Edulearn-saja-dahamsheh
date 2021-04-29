@extends('../dashboard/index')

@section('content')
<form action="/cat/updatecat/{{$cats['id'] }}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
     @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="name" name='cat_name' class="form-control" value="{{$cats['cat_name']}}" id="name" aria-describedby=nameHelp"
            placeholder="Enter name">
        <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
        <label for="exampleInputimg">category img</label>
        <input type="file" name='cat_img' class="form-control" value="images/{{$cats['cat_img']}}" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter email">
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!-- dashboard Table -->

@endsection
