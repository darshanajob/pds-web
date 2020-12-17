@extends('layouts.app')
@section('menuLocation')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="icon_globe-2"></i> News </h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="/adminhome">Home</a></li>
			<li><i class="icon_globe-2"></i>News</li>
			<li><i class="fa fa-file-text-o"></i>Add</li>
		</ol>
	</div>
</div>
@stop
@section('content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading"> Add News </header>
			<div class="panel-body">			
			{!! Form::open(['method'=>'POST','class' => 'form-horizontal','action'=>'newsController@store','files'=>true]) !!}
				<div class='form-group'>
					{!! Form::label('name','Heading:',['class'=>'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
						{!! Form::text('heading',null,['class'=>'form-control', 'required']) !!}
						<!-- /*validation errors*/ -->
						@if ($errors->has('name'))
							<span class="help-block">
								<strong >{{ $errors->first('name') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
				<div class='form-group'>
					{!! Form::label('news','News:',['class'=>'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
						<!--{!! Form::textarea('news', null, ['class'=>'form-control ckeditor', 'required']) !!} -->
						{!! Form::textarea('news', null, ['class'=>'form-control', 'required']) !!}
						<!--<div id="editor" class="btn-toolbar" data-role="editor-toolbar" data-target="#editor"></div>-->
						<!-- /*validation errors*/ -->
						@if ($errors->has('news'))
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