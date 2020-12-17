@extends('layouts.site')
@section('menuLocation')
	<!-- Page location -->
	<section id="subintro">
		<div class="container">
			<div class="row">
				<div class="span8">	
					<ul class="breadcrumb">
						<li>&nbsp;&nbsp;&nbsp;<a href="/en/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
						<li><a>{{ __('Services') }} </a><i class="icon-angle-right"></i></li>
						<li><a>{{ __('Get Approval') }} </a><i class="icon-angle-right"></i></li>
						<li class="active"> {{ __('Building Plans') }} </li>					
					</ul>
				</div>
				<div class="span4">
					<div class="search">
					  <form class="input-append">
						<input class="search-form" id="appendedPrependedInput" type="text" placeholder="{{ __('Search here..') }}" />
						<button class="btn btn-inverse" type="submit"> {{ __('Search') }} </button>
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
			&nbsp; {{ __('Building Plans') }}
		</div>
		<div class="call-action">
			<img src="{{{URL::asset('img/services/56.jpg')}}}" alt="" />
			<div class="text">
				<p> 
					A Pradeshiya Sabha controls and regulates all construction activities within its area of authority. Accordingly, all persons engaged in construction activities within the administrative limits of the Homagama Pradeshiya Sabha should obtain a permit from the Pradeshiya Sabha. 
				</p>

				<p>
					Since the area of authority of the Hoamgama Pradeshiya Sabha has been declared as an urban development area under the Urban Development Authority Act No. 41 of 1978, all construction activities should be in compliance with the rules and regulations set out therein. 
				</p>
				
				<h2> Steps for the approval of building plans </h2>
				
				<ul>
					<li>
						A building application form should be obtained from the pradeshiya sabha office on payment of (Rs. 300= + VAT.).
					</li>
					<li>
						A plan of the building to be approved together with three photo copies of the original plans and a copy of the relevant deed should be sent together with the perfected application to the building section and a receipt for payment made according to the extent of square feet should be obtained. (Particulars in this respect are given in the application form).
					</li>
					<li>
						Thereafter the relevant site will be examined by the technical officer / public health inspector of the pradeshiya sabha and the file with their recommendation will be submitted to the planning committee for its approval.).</li>
					<li>
						The approved plan can be obtained upon placing the ‘approved’ seal on the plan (Further details are given in the application form).
				   </li>				  
				</ul> 
				<button  class="btn-inverse"> <a href="/en/s/cutTree_apply" class="appLink"> Apply online </a> </button>
				<button  class="btn-inverse"> <a href="/en/s/cutTree_apply" class="appLink"> Download Application </a> </button>
			</div>
		</div>
			<!-- end tagline -->
	</div>
</div>
@stop
