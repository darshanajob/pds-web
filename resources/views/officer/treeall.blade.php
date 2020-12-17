@extends('layouts.app')

@section('menuLocation')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="icon_group"></i> Users </h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="/adminhome">Home</a></li>
			<li><i class="icon_group"></i>Applicatoins</li>

		</ol>
	</div>
</div>
@stop

@section('content')

<div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                    APPLICATION FOR TREE CUTTING PERMIT - <p class="badge bg-warning">You have {{$count3}} pending applications</p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                    <p  class="badge bg-success" > {{$count3A}} Approve Applications</p>
                                </a>
                          </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse out">
            <div class="panel-body">
                <ul>
                        @if($cut_tree)
                    @foreach($cut_tree as $cut_tree)


                    <li>

                           <table class="table">
                                <thead>
                                  <tr>
                                    <th><a href="/officerTreeCutA/{{$cut_tree->id}}"> {{$cut_tree->reg_name}} </a></th>

                                  </tr>
                                </thead>

                              </table>



                    </li>
                    @endforeach
                    @endif
                </ul>
          </div>
        </div>
      </div>


@stop
