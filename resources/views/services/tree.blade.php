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
						<li class="active"> {{ __('Cutting Trees') }} </li>					
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
			&nbsp; {{ __('Cutting Trees') }}
		</div>
		<div class="call-action">
			<img src="{{{URL::asset('img/services/tree.jpg')}}}" alt="" />
			<div class="text">	
				<p>
					The Pradeshiya Sabha takes action to remove trees when a tree or any part thereof poses a threat to the safety of a road or a house. For this purpose, an application should be submitted to the Secretary of the Pradeshiya Sabha together with a request in writing addressed to the Chairman of the Pradeshiya Sabha. If the tree or the branch is not removed within 14 days, the Chairman is vested with powers to remove the tree and recover the expenses for same from the owner of the tree.
				</p>
				<button  class="btn-inverse"> <a href="/en/s/cutTree_apply" class="appLink"> Apply online </a> </button>
				<button  class="btn-inverse"> <a href="/en/s/cutTree_apply" class="appLink"> Download Application </a> </button>
			</div>			
		</div>
	</div>
</div>	
@stop
