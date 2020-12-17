@extends('layouts.site')
@section('menuLocation')
	<!-- Page location -->
	<section id="subintro">
		<div class="container">
			<div class="row">
				<div class="span8">	
					<ul class="breadcrumb">
						<li>&nbsp;&nbsp;&nbsp;<a href="/en/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
						<li class="active"> {{ __('Downloads') }} <i class="icon-angle-right"></i> </li>					
						<li class="active"> {{ __('Application Forms') }} </li>					
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
			&nbsp; {{ __('Application Forms') }}
		</div>
		<div class="call-action">
			
			<div class="text">
				<br> 
				<h4> {{ __('Procedure to follow') }} : </h4>								
				<div class="container" style="width:190%">      
					<a href="{{ url('/download/CutTree.pdf')  }}" target="_blank">
					   Get permission to cut down trees
					</a>
				</div>
			</div>		
		</div>			
	</div>
<div>	

@stop
