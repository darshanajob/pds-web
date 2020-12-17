@extends('layouts.app')

@section('menuLocation')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="icon_group"></i> Users </h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="/adminhome">Home</a></li>
            <li><i class="icon_group"></i>Applications</li>
            <li><i class="icon_group"></i>Tree Permit</li>
            <li><i class="icon_group"></i>{{$cut_tree->reg_name}}</li>

		</ol>
	</div>
</div>
@stop

@section('content')

<table id="dataTables-example" class="table table-striped table-bordered table-hover">
    <thead >
    <tr class='info'>

        <th>Request Name</th>
        <th>Request Address</th>
        <th>Request Contact Number</th>
        <th>Owner Name</th>

        <th>Owner Address</th>
        <th>Statement</th>
         <th>Personal Statement</th>
         <th>Map</th>
         <th>GS Division</th>
         <th>p_statement</th>
         <th>Status</th>
         <th>Action</th>
    </tr>
    </thead>
    <tbody>
            @if($cut_tree)


            <tr>
                <td>{{$cut_tree->reg_name}}</td>
                <td>{{$cut_tree->reg_address}}</td>
                <td>{{$cut_tree->reg_telephone}}</td>
                <td>{{$cut_tree->owner_name}}</td>
                <td>{{$cut_tree->owner_address}}</td>
                <td>{{$cut_tree->road}}</td>
                <td>{{$cut_tree->statement}}</td>
                <td>{{$cut_tree->p_statement}}</td>
                <td>{{$cut_tree->map}}</td>
                <td>{{$cut_tree->gs_division}}</td>
                <td>{{$cut_tree->status== 1 ? 'Approve':'Pending'}}</td>


                    {!! Form::model($cut_tree, ['method'=>'PATCH','action'=>['officercutTreeController@update',$cut_tree->id],'files'=>true]) !!}
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
