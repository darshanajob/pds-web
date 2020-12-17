@extends('layouts.app')

@section('menuLocation')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="icon_group"></i> Users </h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="/adminhome">Home</a></li>
            <li><i class="icon_group"></i>Applications</li>


		</ol>
	</div>
</div>
@stop

@section('content')

<div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">

ENVIRONMENT PROTECTION LICENSE - <p class="badge bg-warning">You have {{$count4}} pending applications</p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                    <p  class="badge bg-success" > {{$count4A}} Approve Applications</p>
                                </a>
                          </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse out">
            <div class="panel-body">
                <ul>
                        @if($enaviron_protect)
                    @foreach($enaviron_protect as $enaviron_protect)


                    <li>

                           <table class="table">
                                <thead>
                                  <tr>
                                    <th><a href="/officerEnvApp/{{$enaviron_protect->id}}"> {{$enaviron_protect->industry_name}} </a></th>

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
