@extends('layouts.app')

@section('menuLocation')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="icon_group"></i> Users </h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="/adminhome">Home</a></li>
            <li><i class="icon_group"></i>Applications</li>
            <li><i class="icon_group"></i>Water Supply</li>
            <li><i class="icon_group"></i>{{$ApprovelWsup->rName}}</li>

		</ol>
	</div>
</div>
@stop

@section('content')

<table id="dataTables-example" class="table table-striped table-bordered table-hover">
    <thead >
    <tr class='info'>
        <th>ID</th>
        <th> Name</th>
        <th> Address</th>
        <th>Contact Number</th>
        <th>Reason</th>

        <th>Useage</th>
        <th>Current Service</th>
         <th>Status</th>
         <th>Action</th>
    </tr>
    </thead>
    <tbody>
            @if($ApprovelWsup)


            <tr>
                <td>{{$ApprovelWsup->id}}</td>
                <td>{{$ApprovelWsup->rName}}</td>
                <td>{{$ApprovelWsup->rAddress}}</td>
                <td>{{$ApprovelWsup->rpnum}}</td>
                <td>{{$ApprovelWsup->Reason}}</td>
                <td>{{$ApprovelWsup->Useage}}</td>
                <td>{{$ApprovelWsup->Current_Service}}</td>
                <td>{{$ApprovelWsup->status== 1 ? 'Approve':'Pending'}}</td>


                    {!! Form::model($ApprovelWsup, ['method'=>'PATCH','action'=>['officerApprovalWaterSupplyController@update',$ApprovelWsup->id],'files'=>true]) !!}
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
