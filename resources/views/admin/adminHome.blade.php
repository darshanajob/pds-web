@extends('layouts.app')

@section('menuLocation')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="icon_group"></i> Users </h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="/adminhome">Home</a></li>
			<li><i class="icon_group"></i>Users</li>

		</ol>
	</div>
</div>
@stop

@section('content')

<table id="dataTables-example" class="table table-striped table-bordered table-hover">
    <thead >
    <tr class='info'>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>

        <th>Create At</th>
        <th>Update At</th>
         <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @if($users)

    @foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td><img height="80" width="80" src="/img/{{$user->img ? $user->img : 'no photo'}}" alt=''></td>

        <td><a href="/adminhome/{{$user->id}}/edit/"> {{$user->name}} </a></td>
        <td>{{$user->email}}</td>
        <td>{{$user->is_active == 1 ? 'Active':'Not Active'}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
          <form method="POST" action="/adminhome/{{$user->id}}">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
  <td>
          <div class="form-group">


                      <div class="btn-group">
                        <button type="submit" class="btn btn-danger delete-user "><i class="icon_close_alt2"></i></button>
                        <input type="submit"  class="btn btn-danger delete-user " value="Delete user"> </input>
                        <a class="btn btn-danger" ><i class="icon_close_alt2"></i></a>
                      </div>

          </div>
          </form>

    </tr>
    @endforeach
    @endif
    </tr>
    </tbody>
</table>

@stop
