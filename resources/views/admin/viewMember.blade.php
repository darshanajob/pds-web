@extends('layouts.app')
@section('menuLocation')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="icon_profile"></i> Council Member </h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="/adminhome">Home</a></li>
			<li><i class="icon_profile"></i>Council Member</li>

		</ol>
	</div>
</div>
@stop
@section('content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading"> View / Edit Council Member </header>
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

    @foreach($users as $c_member)
    <tr>
        <td>{{$c_member->id}}</td>
        <td><a href="/member/{{$c_member->id}}/edit/">  {{$c_member->name}}</a></td>
        @if($c_member->gender == 0)
        <td>Male</td>
        @elseif ($c_member->gender == 1)
        <td>Female</td>
        @endif
        @if($c_member->civilstatus == 0)
        <td>Single</td>
        @elseif ($c_member->civilstatus == 1)
        <td>Married</td>
        @endif

        <td>{{$c_member->nic}}</td>
        <td>{{$c_member->email}}</td>
        <td>{{$c_member->tpLand}}</td>
        <td>{{$c_member->tpMobile}}</td>
        <td>{{$c_member->address}}</td>
        <td>{{$c_member->created_at->diffForHumans()}}</td>
        <td>{{$c_member->updated_at->diffForHumans()}}</td>

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
