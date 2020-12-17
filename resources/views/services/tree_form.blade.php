@extends('layouts.site')
@section('menuLocation')
  <link rel="stylesheet" href="{{ asset('admin/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">

<section id="intro">
	<div class="container">
		<div class="row">
			<div class="span12">
				<!-- Place somewhere in the <body> of your page -->

			</div>
		</div>
	</div>
</section>



<div class="row">
	<div class="span12">
				  <div class="row  col-md-12 col-lg-12 col-sm-12" >
<h1> Not completed <h1>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Council Approval For Cutting Down Trees</div>
						<div class="panel-body">

                                <!--{!! Form::open(['method'=>'POST','action'=>'waterController@store','files'=>true]) !!}-->
                                {!! Form::open(['method'=>'POST','action'=>'','files'=>true]) !!}

                                <div class='form-group'>
                                    {!! Form::label('name','Name of Applicant:') !!}
                                    {!! Form::text('txtNameAp',null,['class'=>'form-control']) !!}
                                    <!-- /*validation errors*/ -->
                                    @if ($errors->has('txtNameAp'))
                                        <span class="help-block">
                                            <strong >{{ $errors->first('txtNameAp') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class='form-group'>
                                        {!! Form::label('name','Address of Applicant:') !!}
                                        {!! Form::textarea('txtaddressAp',null,['class'=>'form-control']) !!}
                                        <!-- /*validation errors*/ -->
                                        @if ($errors->has('txtaddressAp'))
                                            <span class="help-block">
                                                <strong >{{ $errors->first('txtaddressAp') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class='form-group'>
                                            {!! Form::label('name','Reuest Name:') !!}
                                            {!! Form::text('txtNamereq',null,['class'=>'form-control']) !!}
                                            <!-- /*validation errors*/ -->
                                            @if ($errors->has('txtNamereq'))
                                                <span class="help-block">
                                                    <strong >{{ $errors->first('txtNamereq') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class='form-group'>
                                                {!! Form::label('name','Reuest Address:') !!}
                                                {!! Form::text('txtaddressreq',null,['class'=>'form-control']) !!}
                                                <!-- /*validation errors*/ -->
                                                @if ($errors->has('txtaddressreq'))
                                                    <span class="help-block">
                                                        <strong >{{ $errors->first('txtaddressreq') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class='form-group'>
                                                    {!! Form::label('name','Reuest phone Number:') !!}
                                                    {!! Form::Number('txtreqpno',null,['class'=>'form-control']) !!}
                                                    <!-- /*validation errors*/ -->
                                                    @if ($errors->has('txtreqpno'))
                                                        <span class="help-block">
                                                            <strong >{{ $errors->first('txtreqpno') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                        <div class='form-group'>
                                                {!! Form::label('name','Village Division:') !!}
                                                {!! Form::text('Vofficedev',null,['class'=>'form-control']) !!}
                                                <!-- /*validation errors*/ -->
                                                @if ($errors->has('Vofficedev'))
                                                    <span class="help-block">
                                                        <strong >{{ $errors->first('Vofficedev') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                <div class='form-group'>
                                    {!! Form::label('email','Village officer:') !!}
                                    {!! Form::text('ghg',null,['class'=>'form-control']) !!}
                                     <!-- /*validation errors*/ -->
                                    @if ($errors->has('ghg'))
                                        <span class="help-block">
                                            <strong >{{ $errors->first('ghg') }}</strong>
                                        </span>
                                    @endif
                                </div>



                                <div class='form-group'>
                                        {!! Form::label('email','Village officer:') !!}
                                        {!! Form::text('ghg',null,['class'=>'form-control']) !!}
                                         <!-- /*validation errors*/ -->
                                        @if ($errors->has('ghg'))
                                            <span class="help-block">
                                                <strong >{{ $errors->first('ghg') }}</strong>
                                            </span>
                                        @endif
                                    </div>



                                    <div class='form-group'>
                                            {!! Form::label('email','Register Mobile Number:') !!}
                                            {!! Form::Number('rpnum',null,['class'=>'form-control']) !!}
                                             <!-- /*validation errors*/ -->
                                            @if ($errors->has('rpnum'))
                                                <span class="help-block">
                                                    <strong >{{ $errors->first('rpnum') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class='form-group'>
                                                {!! Form::label('email','Useage:') !!}
                                                {!! Form::text('Useage',null,['class'=>'form-control']) !!}
                                                 <!-- /*validation errors*/ -->
                                                @if ($errors->has('Useage'))
                                                    <span class="help-block">
                                                        <strong >{{ $errors->first('Useage') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class='form-group'>
                                                    {!! Form::label('email','Reason:') !!}
                                                    {!! Form::text('Reason',null,['class'=>'form-control']) !!}
                                                     <!-- /*validation errors*/ -->
                                                    @if ($errors->has('Reason'))
                                                        <span class="help-block">
                                                            <strong >{{ $errors->first('Reason') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                                <div class='form-group'>
                                                        {!! Form::label('email','Current Service:') !!}
                                                        {!! Form::text('Current',null,['class'=>'form-control']) !!}
                                                         <!-- /*validation errors*/ -->
                                                        @if ($errors->has('Current'))
                                                            <span class="help-block">
                                                                <strong >{{ $errors->first('Current') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>




                                <div class='form-group'>
                                    {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
                                </div>

                                {!! Form::close() !!}


	  <!--{!! Form::open(['method'=>'POST', 'action'=>'cuttreeController@store']) !!} -->
	  {!! Form::open(['method'=>'POST','action'=>'' ]) !!}
                            {{ csrf_field() }}

                           	 	<table class="table table-bordered table-striped">

                           	 		<div class="form-group">
									<tr>
										<td> Name of Applicant  </td>
										<td>
											<input class="form-control" type="text"  required  name="txtNameAp"  />
										</td>
									</tr>
									</div>

									<div class="form-group">
									<tr>
										<td> Address of Applicant  </td>
										<td>
											<input class="form-control" type="text"   required name="txtaddressAp"  />
										</td>
									</tr>
									</div>

									<div class="form-group">
									<tr>
										<td> Reuest Name   </td>
										<td>
											<input class="form-control" type="text"  required name="txtNamereq"  />
										</td>
									</tr>
									</div>

									<div class="form-group">
									<tr>
										<td> Reuest address  </td>
										<td>
											<input class="form-control" type="text"  required name="txtaddressreq"  />
										</td>
									</tr>
									</div>

									<div class="form-group">
									<tr>
										<td> Reuest phone Number  </td>
										<td>
											<input class="form-control" type="text"   required name="txtreqpno"  />
										</td>
									</tr>
									</div>

									<div class="form-group">
									<tr>
										<td> Village Division </td>
										<td>
											<input class="form-control"   type="text" name="Vofficedev"  />
										</td>
									</tr>
									</div>


									<div class="form-group">
									<tr>
										<td> Village officer </td>
										<td>
											<input class="form-control"  type="text"  name="ghg"  />
										</td>
									</tr>
									</div>

									<table class="table">
								    <thead>
								      <tr class="info">
								        <th>Tree Type</th>
								        <th>Tree No</th>

								      </tr>
								    </thead>
								    <tbody>
								      <tr>
								        <td><input class="form-control"  type="text"  name="namesk"  /></td>
								        <td><input class="form-control" type="text"   required name="namesssss"  /></td>

								      </tr>
								    </tbody>
								  </table>




									<div class="form-group">
									<tr>
										<td> Location </td>
										<td>
											<input class="form-control"  type="text"  name="location"  />
										</td>
									</tr>
									</div>

									<div class="form-group">
									<tr>
										<td> Officer statement </td>
										<td>
											<input class="form-control"  type="text"  name="osteatement"  />
										</td>
									</tr>
									</div>

									<div class="form-group">
									<tr>
										<td> Image </td>
										<td>
											<input class="input-block-level"  type="file"  name="filennn"  />
										</td>
									</tr>
									</div>


									<div class="form-group">
									<tr>
										<td>  statement </td>
										<td>
											<input class="form-control"  type="text"  name="steatement"  />
										</td>
									</tr>
									</div>














                            <tr>
											<td colspan="2">
                                <input type="submit" class="btn btn-primary"
                                       value="Submit"/>
                            </td>
							</tr>
            </table>
			{!! Form::close() !!}


      </div>
		<div class="call-action">




		</div>

	</div>
		</div>
	</div>


@stop
