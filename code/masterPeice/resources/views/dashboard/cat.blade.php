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
<form action="/cat/addcat" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
        <label for="name">Category name</label>
        <input type="name" name='cat_name' class="form-control" id="name" aria-describedby=nameHelp"
            placeholder="Enter name">
        <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
        <label for="exampleInputimg">category img</label>
        <input type="file" name='cat_img' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter email">
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
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
                        <th>category name</th>
                        <th>category img</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>category name</th>
                        <th>category img</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($cats as $cat)
                    <tr>
                        <td>{{$cat['id']}}</td>
                        <td>{{$cat['cat_name']}}</td>
                        <td><img style="height: 75px;" src="/images/{{$cat['cat_img']}}"></td>
                        <td><a  class='btn btn-info' style="border:none !important;border-radius: 0% !important;padding:7px 20px !important ;  "  href="cat/editcat/{{$cat['id']}}/editcat">Edit</a></td>
                        <td><a  class='btn btn-danger' style="border:none !important;border-radius: 0% !important;padding:7px 20px !important ;  "  href="cat/deletecat/{{$cat['id']}}">Delete</a></td>



                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
