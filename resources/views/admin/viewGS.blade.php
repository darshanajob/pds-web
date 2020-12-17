@extends('layouts.app')
@section('menuLocation')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="icon_profile"></i> Village Officer </h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="/adminhome">Home</a></li>
			<li><i class="icon_profile"></i>Village Officer</li>
			<li><i class="fa fa-file-text-o"></i>View Edit</li>
		</ol>
	</div>
</div>
@stop
@section('content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading"> View / Edit Village Officer </header>
			<div class="panel-body">		

<table id="dataTables-example" class="table table-striped table-bordered table-hover">
    <thead >
    <tr class='info'>
        <th>ID</th>
        <th>GS Division</th>
        <th>Officer Name</th>
        <th>Contact Number</th>
        <th>Status</th>
        <th>Create At</th>
        <th>Update At</th>
    </tr>
    </thead>
    <tbody>
    @if($users)

    @foreach($users as $gs)
    <tr>
        <td>{{$gs->id}}</td>
        <td><a href="/gramasewaka/{{$gs->id}}/edit/"> {{$gs->name}} </a></td>
        <td>{{$gs->email}}</td>
        <td>{{$gs->is_active == 1 ? 'Active':'Not Active'}}</td>
        <td>{{$gs->created_at->diffForHumans()}}</td>
        <td>{{$gs->updated_at->diffForHumans()}}</td>

    </tr>
    @endforeach
    @endif
    </tr>
    </tbody>
</table>

			</div>
		</section>
	</div>
</div>
@stop
