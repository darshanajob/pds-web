@extends('layouts.site')
@section('menuLocation')
	<!-- Page location -->
	<section id="subintro">
		<div class="container">
			<div class="row">
				<div class="span8">	
					<ul class="breadcrumb">
						<li>&nbsp;&nbsp;&nbsp;<a href="/en/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
						<li><a> {{ __('Services') }} </a><i class="icon-angle-right"></i></li>
						<li><a> {{ __('Get Approval') }} </a><i class="icon-angle-right"></i></li>
						<li class="active"> {{ __('Land Blocks') }} </li>					
					</ul>
				</div>
				<div class="span4">
					<div class="search">
					  <form class="input-append">
						<input class="search-form" id="appendedPrependedInput" type="text" placeholder="{{ __('Search here..') }}" />
						<button class="btn btn-inverse" type="submit">{{ __('Search') }}</button>
					  </form>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop

@section('content')
<div class="row">		
	<div class="span12">
		<div class="page-header">
			&nbsp; {{ __('Land Blocks') }}
		</div>
		<div class="call-action">
			<img src="{{{URL::asset('img/services/DSC00007.jpg')}}}" alt="" />		
			<div class="text">				
				<p>
					All land development activities and the blocking out of lands within the administrative area of the Pradeshiya Sabha should first be registered at the Pradeshiya Sabha. This is done with the aim of regulating land development activities in urban areas.
				</p>

				<h2> Eligibility </h2>

				<ul>
					<li>
						Should be an owner of a land located within the area of authority of the Pradeshiya Sabha which is due to be developed or blocked out.
					</li>
					<li>The owner should possess a registered deed.</li>
				</ul> 

				<h2> Procedure for approving blocks of land </h2>

				<ul>
					<li>
						Should be an owner of a land located within the area of authority of the Pradeshiya Sabha which is due to be developed or blocked out.
					</li>
					<li>
						Plan of the land to be approved together with three photocopies of the original plans and a copy of the relevant deed should be sent together with the duly completed application form to the building section and a receipt for payment made according to the number of blocks of land should be obtained.  (Particulars in this respect are given in the application form).
					</li>
					<li>
						The land is thenn examined by a technical officer of the Pradeshiya Sabha and the relevant files are submitted to the planning committee after which the approval is granted.
					</li>
					<li>
						Thereafter the approved plan can be obtained after it is franked ‘approved’. (Further details are given in the application for
					</li>				  
				</ul> 
				<button  class="btn-inverse"> <a href="/en/s/cutTree_apply" class="appLink"> Apply online </a> </button>
				<button  class="btn-inverse"> <a href="/en/s/cutTree_apply" class="appLink"> Download Application </a> </button>
			</div>
		</div>
	</div>
</div>

	
@stop
