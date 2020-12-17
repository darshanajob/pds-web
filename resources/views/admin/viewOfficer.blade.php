@extends('layouts.app')
@section('menuLocation')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="icon_profile"></i> Council Officer </h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="/adminhome">Home</a></li>
			<li><i class="icon_profile"></i>Council Officer</li>

		</ol>
	</div>
</div>
@stop
@section('content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading"> View / Edit Council Officer </header>
			<div class="panel-body">

<table id="dataTables-example" class="table table-striped table-bordered table-hover">
    <thead >
    <tr class='info'>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Civil Status</th>
        <th>NIC</th>
        <th>Email</th>
        <th>Office Phone No</th>
        <th>Mobile Phone No</th>
        <th>Personal Address</th>
        <th>Create At</th>
        <th>Update At</th>
    </tr>
    </thead>
    <tbody>
    @if($users)

    @foreach($users as $c_officer)
    <tr>
        <td>{{$c_officer->id}}</td>
        <td><a href="/member/{{$c_officer->id}}/edit/">  {{$c_officer->name}}</a></td>
        @if($c_officer->gender == 0)
        <td>Male</td>
        @elseif ($c_officer->gender == 1)
        <td>Female</td>
        @endif
        @if($c_officer->civilstatus == 0)
        <td>Single</td>
        @elseif ($c_officer->civilstatus == 1)
        <td>Married</td>
        @endif

        <td>{{$c_officer->nic}}</td>
        <td>{{$c_officer->email}}</td>
        <td>{{$c_officer->tpLand}}</td>
        <td>{{$c_officer->tpMobile}}</td>
        <td>{{$c_officer->address}}</td>
        <td>{{$c_officer->created_at->diffForHumans()}}</td>
        <td>{{$c_officer->updated_at->diffForHumans()}}</td>

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
