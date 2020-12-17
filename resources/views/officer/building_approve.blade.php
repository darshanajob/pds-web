@extends('layouts.app')

@section('menuLocation')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="icon_group"></i> Users </h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="/adminhome">Home</a></li>
            <li><i class="icon_group"></i>Applications</li>
            <li><i class="icon_group"></i>Building Permit</li>
            <li><i class="icon_group"></i>{{$building_app->v_name}}</li>

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
        <th>location</th>

        <th>Tax No</th>

         <th>Status</th>
         <th>Action</th>
    </tr>
    </thead>
    <tbody>
            @if($building_app)


            <tr>
                <td>{{$building_app->id}}</td>
                <td>{{$building_app->v_name}}</td>
                <td>{{$building_app->v_address}}</td>
                <td>{{$building_app->v_tp}}</td>
                <td>{{$building_app->location}}</td>
                <td>{{$building_app->accesss_tax_no	}}</td>

                <td>{{$building_app->status== 1 ? 'Approve':'Pending'}}</td>


                    {!! Form::model($building_app, ['method'=>'PATCH','action'=>['officerBuildingApproveController@update',$building_app->id],'files'=>true]) !!}
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
