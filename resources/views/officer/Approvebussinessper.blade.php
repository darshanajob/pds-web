@extends('layouts.app')

@section('menuLocation')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="icon_group"></i> Users </h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="/adminhome">Home</a></li>
            <li><i class="icon_group"></i>Applications</li>
            <li><i class="icon_group"></i>Bussiness Registation</li>
            <li><i class="icon_group"></i>{{$bussinessper->name}}</li>

		</ol>
	</div>
</div>
@stop

@section('content')

<table id="dataTables-example" class="table table-striped table-bordered table-hover">
    <thead >
    <tr class='info'>

        <th> Name</th>
        <th> Address</th>
        <th>Contact Number</th>
        <th>Email</th>

        <th>Bussiness Name</th>
        <th>Bussiness Address</th>
        <th>Office Number</th>
         <th>Year Tax</th>
         <th>Year Permit</th>
         <th>Recept No</th>
         <th>No of Employees</th>
         <th>Status</th>
         <th>Action</th>
    </tr>
    </thead>
    <tbody>
            @if($bussinessper)


            <tr>

                <td>{{$bussinessper->name}}</td>
                <td>{{$bussinessper->p_address}}</td>
                <td>{{$bussinessper->p_phonenm}}</td>
                <td>{{$bussinessper->p_email}}</td>
                <td>{{$bussinessper->B_name}}</td>
                <td>{{$bussinessper->B_address}}</td>
                <td>{{$bussinessper->b_phoneno}}</td>
                <td>{{$bussinessper->lyear_permit_tax}}</td>
                <td>{{$bussinessper->lyear_permit_No}}</td>
                <td>{{$bussinessper->No_of_emp}}</td>
                <td>{{$bussinessper->lyear_receptNO}}</td>
                <td>{{$bussinessper->status== 1 ? 'Approve':'Pending'}}</td>


                    {!! Form::model($bussinessper, ['method'=>'PATCH','action'=>['officerBussinessperappControoller@update',$bussinessper->id],'files'=>true]) !!}
                  <td>
                  <div class="form-group">


                              <div class="btn-group">
                                <button type="submit" class="btn btn-success delete-user "><i class="icon_close_alt2"></i></button>


                              </div>

                  </div>
                  {!! Form::close() !!}

            </tr>

            @endif

    </tr>
    </tbody>
</table>

@stop
