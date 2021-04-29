@extends('../dashboard/index')

@section('content')
    
    <h3 class="page-title">@lang('topics')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['topics.store']]) !!}

    <div class="panel panel-default">
       
        <div class="panel-body">
            <div class="row">
                <div class="col-xl-12 form-group">
                    {!! Form::label('title', 'Add new Topic*', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('submit'), ['class' => 'btn btn-danger mb-3']) !!}
    {!! Form::close() !!}

    

    <div class="panel panel-default">

        <div class="panel-body">
            <table class="table table-bordered {{ count($topics) > 0 ? 'datatable' : '' }} dt-select" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>@lang('Topics title')</th>
                        <th>@lang('Edit')</th>
                        <th>@lang('Delete')</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($topics) > 0)
                        @foreach ($topics as $topic)
                            <tr>
                                
                                <td>{{ $topic['title'] }}</td>
                                <td>
                                   
                                    <a href="{{ route('topics.edit',[$topic->id]) }}" >@lang('Edit')</a>
                                    
                                    
                                    
                                </td>
                                <td>{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.are_you_sure")."');",
                                        'route' => ['topics.destroy', $topic->id])) !!}
                                    {!! Form::submit(trans('Delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">@lang('no entries in table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    
@stop


