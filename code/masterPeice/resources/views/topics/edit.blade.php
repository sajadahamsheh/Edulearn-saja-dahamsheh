@extends('../dashboard/index')

@section('content')
    <!-- <h3 class="page-title">@lang('quickadmin.topics.title')</h3> -->
    
    {!! Form::model($topic, ['method' => 'PUT', 'route' => ['topics.update', $topic->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            <!-- @lang('dit') -->
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xl-12 form-group ">
                    {!! Form::label('title', 'Edit topic*', ['class' => 'control-label']) !!}
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

    {!! Form::submit(trans('update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

