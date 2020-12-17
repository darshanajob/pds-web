@extends('layouts.app')
@section('menuLocation')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="icon_profile"></i> Village Officer </h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="/adminhome">Home</a></li>
			<li><i class="icon_profile"></i>Village Officer</li>
			<li><i class="icon_pencil-edit"></i>Add</li>
		</ol>
	</div>
</div>
@stop
@section('content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading"> Add Village Officer </header>
			<div class="panel-body">		
			{!! Form::open(['method'=>'POST','class' => 'form-horizontal','action'=>'gsController@store', 'files'=>true]) !!}
				<div class='form-group'>
					{!! Form::label('name','Officer Name:',['class'=>'col-sm-2 control-label']) !!}
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
					{!! Form::label('gender','Gender:',['class'=>'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
					{!! Form::select('gender', array(0=> 'Male', 1=> 'Female') , null,['class'=>'form-control', 'required']) !!}
					<!-- /*validation errors*/ -->
					@if ($errors->has('gender'))
						<span class="help-block">
							<strong >{{ $errors->first('gender') }}</strong>
						</span>
					@endif
					</div>
				</div>

				<div class='form-group'>
					{!! Form::label('civilstatus','Civilstatus:',['class'=>'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
					{!! Form::select('civilstatus', array(0=> 'Single', 1=> 'Married') , null,['class'=>'form-control', 'required']) !!}
					<!-- /*validation errors*/ -->
					@if ($errors->has('civilstatus'))
						<span class="help-block">
							<strong >{{ $errors->first('civilstatus') }}</strong>
						</span>
					@endif
					</div>
				</div>

				<div class='form-group'>
					{!! Form::label('nic','NIC:',['class'=>'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
					{!! Form::text('nic',null,['class'=>'form-control', 'required']) !!}
					<!-- /*validation errors*/ -->
					@if ($errors->has('nic'))
						<span class="help-block">
							<strong >{{ $errors->first('nic') }}</strong>
						</span>
					@endif
					</div>
				</div>

				<div class='form-group'>
					{!! Form::label('email','Email:',['class'=>'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
					{!! Form::text('email',null,['class'=>'form-control', 'required']) !!}
					 <!-- /*validation errors*/ -->
					@if ($errors->has('email'))
						<span class="help-block">
							<strong >{{ $errors->first('email') }}</strong>
						</span>
					@endif
					</div>
				</div>
				
				<div class='form-group'>
					{!! Form::label('gsdivision','GS division:',['class'=>'col-sm-2 control-label']) !!}					
					<div class="col-sm-10">
					{!! Form::select('gsdivision', $gsdivision, null,['class' => 'form-control', 'required']) !!}
					<!-- /*validation errors*/ -->
					@if ($errors->has('gsdivision'))
						<span class="help-block">
							<strong>{{ $errors->first('gsdivision') }}</strong>
						</span>
					@endif	
					</div>
				</div>
				
				<div class='form-group'>
					{!! Form::label('tpLand','Land Phone Number:',['class'=>'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
					{!! Form::Number('tpLand',null,['class'=>'form-control']) !!}
					 <!-- /*validation errors*/ -->
					@if ($errors->has('tpLand'))
						<span class="help-block">
							<strong >{{ $errors->first('tpLand') }}</strong>
						</span>
					@endif
					</div>
				</div>

				<div class='form-group'>
					{!! Form::label('tpMobile','Mobile Phone Number:',['class'=>'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
					{!! Form::Number('tpMobile',null,['class'=>'form-control']) !!}
					 <!-- /*validation errors*/ -->
					@if ($errors->has('tpMobile'))
						<span class="help-block">
							<strong >{{ $errors->first('tpMobile') }}</strong>
						</span>
					@endif
					</div>
				</div>

				<div class='form-group'>
					{!! Form::label('address','Address:',['class'=>'col-sm-2 control-label']) !!}
					<div class="col-sm-10">
					{!! Form::text('address',null,['class'=>'form-control', 'required']) !!}
					<!-- /*validation errors*/ -->
					@if ($errors->has('address'))
						<span class="help-block">
							<strong >{{ $errors->first('address') }}</strong>
						</span>
					@endif
					</div>
				</div>
				<div class='form-group'>
					<div class="col-lg-offset-2 col-lg-10">
					{!! Form::submit('ADD ',['class'=>'btn btn-outline btn-primary']) !!}
					{!! Form::reset('CLEAR ',['class'=>'btn btn-default']) !!}
					</div>
				</div>
				{!! Form::close() !!}    
			</div>
		</section>
	</div>
</div>
@stop
