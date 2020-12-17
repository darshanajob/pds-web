@extends('layouts.app')



@section('content')
<br> <br> <br>
<h4>Edit Village Officer</h4>
<div class='col-sm-2'>

    <td><img height="100" width="100" class='img-responsive img-rounded' src="/img/{{$user->img ? $user->img : 'no photo'}}" alt='' ></td>
</div>
<div class='col-sm-9'>
{!! Form::model($user, ['method'=>'PATCH','action'=>['gsController@update',$user->id],'files'=>true]) !!}


    <div class='form-group'>
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
        <!-- /*validation errors*/ -->
        @if ($errors->has('name'))
            <span class="help-block">
                <strong >{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <div class='form-group'>
        {!! Form::label('email','Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
         <!-- /*validation errors*/ -->
        @if ($errors->has('email'))
            <span class="help-block">
                <strong >{{ $errors->first('email') }}</strong>
            </span>
        @endif    
    </div>





    <div class='form-group'>
        {!! Form::label('is_active','Active or Deactivate:') !!}
        {!! Form::select('is_active', array(1=> 'Active', 0=> 'Not Active'), null,['class'=>'form-control']) !!}
        <!-- /*validation errors*/ -->
        @if ($errors->has('is_active'))
            <span class="help-block">
                <strong >{{ $errors->first('is_active') }}</strong>
            </span>
        @endif
    </div>

    <div class='form-group'>
        {!! Form::label('Reset','Reset Password:') !!}
        {!! Form::radio('result','1',true,['class'=>"btn btn-success btn-circle"]) !!}Yes
        {!! Form::radio('result','0',false,['class'=>"btn btn-success btn-circle"]) !!}No

    </div>

    <div class='form-group'>
        {!! Form::label('file','Profie Picture:') !!}
        {!! Form::file('image',['class'=>'form-control']) !!}
        <!-- /*validation errors*/ -->
        @if ($errors->has('name'))
            <span class="help-block">
                <strong >{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>







    <div class='form-group'>
        {!! Form::submit('Update',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
</div>


@stop
