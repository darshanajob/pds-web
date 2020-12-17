@extends('layouts.app')
@section('menuLocation')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="icon_images"></i> Image Gallery </h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="/adminhome">Home</a></li>
			<li><i class="icon_images"></i>Image Gallery</li>
			<li><i class="fa fa-file-text-o"></i>Add</li>
		</ol>
	</div>
</div>
@stop
@section('content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>-->
			<header class="panel-heading"> Add Images </header>
			<div class="panel-body">			
			{!! Form::open(['method'=>'POST','class' => 'form-horizontal','action'=>'imageController@store','files'=>true]) !!}
				<div class='form-group'>
					{!! Form::label('name','Topic:',['class'=>'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
						{!! Form::text('name',null,['class'=>'form-control', 'required']) !!}
						<!-- /*validation errors*/ -->
						@if ($errors->has('name'))
							<span class="help-block">
								<strong >{{ $errors->first('name') }}</strong>
							</span>
						@endif
					</div>
				</div>

				<div class='form-group'>
					{!! Form::label('des','Description:',['class'=>'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
						{!! Form::textarea('des',null,['class'=>'form-control', 'required']) !!}
						<!-- /*validation errors*/ -->
						@if ($errors->has('des'))
							<span class="help-block">
								<strong >{{ $errors->first('des') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
				<div class='form-group'>
					{!! Form::label('image','Select Images:',['class'=>'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
						<input required type="file" name="images[]" placeholder="address" multiple>
						<p class="help-block">Maximum file size is 200MB.</p>
						<!-- /*validation errors*/ -->
						@if ($errors->has('images[]'))
							<span class="help-block">
								<strong >{{ $errors->first('image') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
				<div class='form-group'>
					<div class="col-lg-offset-2 col-lg-10">
					{!! Form::submit('Add',['class'=>'btn btn-primary']) !!}
					{!! Form::reset('CLEAR ',['class'=>'btn btn-default']) !!}
					</div>
				</div>
				{!! Form::close() !!}    
			</div>
		</section>
	</div>
</div>
@stop