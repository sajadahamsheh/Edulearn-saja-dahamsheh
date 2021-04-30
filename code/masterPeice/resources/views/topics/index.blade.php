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
    
    
    {!! Form::open(['method' => 'POST', 'route' => ['topics.store']]) !!}

    <div class="panel panel-default">
       
        <div class="panel-body">
            <div class="row">
                <div class="col-xl-12 form-group">
                    {!! Form::label('title', 'Add new Topic*', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'Enter topic name']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 form-group">
                    {!! Form::label('desc', 'Add description*', ['class' => 'control-label']) !!}
                    {!! Form::text('desc', old('desc'), ['class' => 'form-control', 'placeholder' => 'Add description']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('desc'))
                        <p class="help-block">
                            {{ $errors->first('desc') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('submit'), ['class' => 'redbtn']) !!}
    {!! Form::close() !!}

    

    <div class="panel panel-default">

        <div class="panel-body">
            <table class="table table-bordered {{ count($topics) > 0 ? 'datatable' : '' }} dt-select" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Topics title</th>
                        <th>Topics desc</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($topics) > 0)
                        @foreach ($topics as $topic)
                            <tr>
                                
                                <td>{{ $topic['title'] }}</td>
                                <td>{{ $topic['desc'] }}</td>
                                <td>
                                   
                                    <a href="{{ route('topics.edit',[$topic->id]) }}" class='btn btn-info' style="border: none; border-radius: 0%; padding: 7px 20px; "> Edit</a>
                                    
                                    
                                    
                                </td>
                                <td>{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.are_you_sure")."');",
                                        'route' => ['topics.destroy', $topic->id])) !!}
                                    {!! Form::submit(trans('Delete'), array('class' => 'btn btn-xs btn-danger'),array('style'=>"border: none; border-radius: 0%; padding: 7px 20px; ")) !!}
                                    {!! Form::close() !!}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    
@stop


