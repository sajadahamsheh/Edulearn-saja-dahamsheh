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


    <button type="submit" class="redbtn">Submit</button>
</form>
<!-- dashboard Table -->

@endsection
