@extends('layouts.app')



@section('content')
<br> <br> <br>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<h4>Edit users</h4>

<div class='col-sm-9'>
    {!! Form::open(['method'=>'POST','action'=>'imageController@store','files'=>true]) !!}


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
            {!! Form::label('des','Description:') !!}
            {!! Form::text('des',null,['class'=>'form-control']) !!}
            <!-- /*validation errors*/ -->
            @if ($errors->has('des'))
                <span class="help-block">
                    <strong >{{ $errors->first('des') }}</strong>
                </span>
            @endif
        </div>

    <input required type="file" class="form-control" name="images[]" placeholder="address" multiple>














    <div class='form-group'>
        {!! Form::submit('Update',['class'=>'btn btn-primary']) !!}
    </div>



</div>


@stop
