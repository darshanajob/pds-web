@extends('layouts.app')

@section('menuLocation')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="icon_group"></i> Users </h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="/adminhome">Home</a></li>
            <li><i class="icon_group"></i>Applications</li>
            <li><i class="icon_group"></i>Building Permit</li>
            <li><i class="icon_group"></i>{{$enaviron_protect->v_name}}</li>

		</ol>
	</div>
</div>
@stop

@section('content')

<table id="dataTables-example" class="table table-striped table-bordered table-hover">
    <thead >
    <tr class='info'>
        <th>Industry Name</th>
        <th> Name</th>
        <th> Address</th>
        <th>Industry Detail</th>
        <th>Industry Location</th>

        <th>Industry Address</th>

         <th>industry_zone</th>
         <th>version</th>
         <th>Status</th>
         <th>Action</th>
    </tr>
    </thead>
    <tbody>
            @if($enaviron_protect)


            <tr>

                <td>{{$enaviron_protect->industry_name}}</td>
                <td>{{$enaviron_protect->reg_name}}</td>
                <td>{{$enaviron_protect->reg_address}}</td>
                <td>{{$enaviron_protect->industry_detail}}</td>
                <td>{{$enaviron_protect->industry_location}}</td>
                <td>{{$enaviron_protect->industry_address}}</td>
                <td>{{$enaviron_protect->industry_zone}}</td>
                <td>{{$enaviron_protect->version}}</td>


                <td>{{$enaviron_protect->status== 1 ? 'Approve':'Pending'}}</td>


                    {!! Form::model($enaviron_protect, ['method'=>'PATCH','action'=>['officerEnavironprotectAppController@update',$enaviron_protect->id],'files'=>true]) !!}
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
