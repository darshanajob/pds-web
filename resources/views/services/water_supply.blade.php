@extends('layouts.site')

@section('menuLocation')
	<!-- Page location -->
	<section id="subintro">
		<div class="container">
			<div class="row">
				<div class="span8">	
					<ul class="breadcrumb">
						<li>&nbsp;&nbsp;&nbsp;<a href="/en/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
						<li><a>{{ __('Services') }}</a><i class="icon-angle-right"></i></li>
						<li><a>{{ __('Get Approval') }}</a><i class="icon-angle-right"></i></li>
						<li class="active">{{ __('Water Supply') }}</li>
						
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
			&nbsp; {{ __('Water Supply') }}
		</div>
		<div class="call-action">
			<img src="{{{URL::asset('img/services/water.jpg')}}}" alt="" />				
			<div class="text">
				<br> 
				<h4> {{ __('Procedure to follow') }} :</h4>								
				<ol>
					<li>
						{{ __('An application should be forwarded to the Secretary of the Pradeshiya Sabha') }}.
					</li>
					<li>
						{{ __('A letter from the Water Supply and Drainage Board should be submitted') }}.
					</li>
					<li>
						{{ __('Approval is granted after levying the relevant fee on the recommendation of the technical officer') }}.
					</li>  
				</ol> 
				
				<button  class="btn-inverse"> <a href="/en/s/cutTree_apply" class="appLink"> 
				{{ __('Apply online') }} 
				</a> </button>
				<button  class="btn-inverse"> <a href="/en/s/cutTree_apply" class="appLink"> 
				{{ __('Download Application') }} 
				</a> </button>
			</div>
			

			</div>
			<!-- end tagline -->
		</div>
	</div>	
@stop
