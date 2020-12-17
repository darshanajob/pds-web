@extends('layouts.site')
@section('menuLocation')
	<!-- Page location -->
	<section id="subintro">
		<div class="container">
			<div class="row">
				<div class="span8">	
					<ul class="breadcrumb">					
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

<section id="intro">
	<div class="container">
		<div class="row">
			<div class="span12">
				<!-- Place somewhere in the <body> of your page -->
				<div id="mainslider" class="flexslider">
					<ul class="slides">
						<li data-thumb="{{{URL::asset('img/slides/flexslider/img1.jpg')}}}">
							<img src="{{{URL::asset('img/slides/flexslider/img1.jpg')}}}" alt="" />
							<div class="flex-caption primary">
								<h2>Polgolla Dam</h2>
								
							</div>
						</li>
						<li data-thumb="{{{URL::asset('img/slides/flexslider/img2.jpg')}}}">
							<img src="{{{URL::asset('img/slides/flexslider/img2.jpg')}}}" alt="" />
							<div class="flex-caption warning">
								<h2>Ras Ella Wattegama</h2>
								
							</div>
						</li>
						<li data-thumb="{{{URL::asset('img/slides/flexslider/img3.png')}}}">
							<img src="{{{URL::asset('img/slides/flexslider/img3.png')}}}" alt="" />
							<div class="flex-caption success">
								<h2>Wattegama Railway Station</h2>
								
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="row">
	<div class="span12">
		<div class="call-action">

			<div class="text">
				<h2>Background</h2>
				<p class="para">
					The Pathadumbara Regional Council is situated in North boarder of Kandy district of Central Province. 
					This region includes Udagampaha Korale and Pallegampaha  Korale cantons. 
					The north boundary of the region is Malate district whereas the south boundary is surrounded by Mahaweli river, Gagawata Korale and Kundasale divisional secretariats. 
					The total area of the region is 45.5 Km2 and it has subdivided into 42 Grama Niladari divisions. 
					The total number of population is 96672. 

				</p>
			</div>		
			<!-- end tagline -->
		</div>
	</div>

	<div class="row">
		<div class="span3 features e_pulse">
			<img src="{{{URL::asset('img/dummies/img1.jpg')}}}" alt="" />
			<div class="box">
				<div class="divcenter">
					<a href="#"><i class="icon-circled icon-48 icon-magic active icon"></i></a>
					<h4>Responsive <br />twitter bootstrap</h4>
				</div>
			</div>
		</div>

		<div class="span3 features e_pulse">
			<img src="{{{URL::asset('img/dummies/img2.jpg')}}}" alt="" />
			<div class="box">
				<div class="divcenter">
					<a href="#"><i class="icon-circled icon-48 icon-briefcase icon"></i></a>
					<h4>Unparalleled <br />premium support</h4>
				</div>
			</div>
		</div>

		<div class="span3 features e_pulse">
			<img src="{{{URL::asset('img/dummies/img3.jpg')}}}" alt="" />
			<div class="box">
				<div class="divcenter">
					<a href="#"><i class="icon-circled icon-48 icon-cogs icon"></i></a>
					<h4>Valid <br />HTML code</h4>
				</div>
			</div>
		</div>

		<div class="span3 features e_pulse">
			<img src="{{{URL::asset('img/dummies/img4.jpg')}}}" alt="" />
			<div class="box">
				<div class="divcenter">
					<a href="#"><i class="icon-circled icon-48 icon-bullhorn icon"></i></a>
					<h4>Flexible <br />multi usage</h4>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="span12">
			<h4 class="rheading">Recent works<span></span></h4>
			<div class="row">
				<div class="span3">

					<p class="hidden-phone">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in lacus rhoncus elit egestas luctus. Nullam at lectus augue.
					</p>

					<a href="#" class="btn btn-theme">Read More</a>
				</div>

				<div class="span9">
					<div id="latest-work" class="carousel btleft">
						<div class="carousel-wrapper">
							<ul class="da-thumbs">

								<li>
									<img src="{{{URL::asset('img/dummies/work1.jpg')}}}" alt="" />
									<article class="da-animate da-slideFromRight">
										<a class="zoom" data-pretty="prettyPhoto" href="{{{URL::asset('img/dummies/big1.jpg')}}}">
											<i class="icon-zoom-in icon-rounded icon-48 active"></i>
										</a>
										<a href="portfolio-detail.html">
											<i class="icon-link icon-rounded icon-48 active"></i>
										</a>
										<div class="hidden-tablet">
											<p>Serenity theme</p>
										</div>
									</article>
								</li>

								<li>
									<img src="{{{URL::asset('img/dummies/work2.jpg')}}}" alt="" />
									<article class="da-animate da-slideFromRight">
										<a class="zoom" data-pretty="prettyPhoto" href="{{{URL::asset('img/dummies/big1.jpg')}}}">
											<i class="icon-zoom-in icon-rounded icon-48 active"></i>
										</a>
										<a href="portfolio-detail.html">
											<i class="icon-link icon-rounded icon-48 active"></i>
										</a>
										<div class="hidden-tablet">
											<p>Dark apps</p>
										</div>
									</article>
								</li>

								<li>
									<img src="{{{URL::asset('img/dummies/work3.jpg')}}}" alt="" />
									<article class="da-animate da-slideFromRight">
										<a class="zoom" data-pretty="prettyPhoto" href="{{{URL::asset('img/dummies/big1.jpg')}}}">
											<i class="icon-zoom-in icon-rounded icon-48 active"></i>
										</a>
										<a href="portfolio-detail.html">
											<i class="icon-link icon-rounded icon-48 active"></i>
										</a>
										<div class="hidden-tablet">
											<p>Mobile apps</p>
										</div>
									</article>
								</li>

								<li>
									<img src="{{{URL::asset('img/dummies/work4.jpg')}}}" alt="" />
									<article class="da-animate da-slideFromRight">
										<a class="zoom" data-pretty="prettyPhoto" href="{{{URL::asset('img/dummies/big1.jpg')}}}">
											<i class="icon-zoom-in icon-rounded icon-48 active"></i>
										</a>
										<a href="portfolio-detail.html">
											<i class="icon-link icon-rounded icon-48 active"></i>
										</a>
										<div class="hidden-tablet">
											<p>Mobile template</p>
										</div>
									</article>
								</li>

								<li>
									<img src="{{{URL::asset('img/dummies/work5.jpg')}}}" alt="" />
									<article class="da-animate da-slideFromRight">
										<a class="zoom" data-pretty="prettyPhoto" href="{{{URL::asset('img/dummies/big1.jpg')}}}">
											<i class="icon-zoom-in icon-rounded icon-48 active"></i>
										</a>
										<a href="portfolio-detail.html">
											<i class="icon-link icon-rounded icon-48 active"></i>
										</a>
										<div class="hidden-tablet">
											<p>Business theme</p>
										</div>
									</article>
								</li>

								<li>
									<img src="{{{URL::asset('img/dummies/work6.jpg')}}}" alt="" />
									<article class="da-animate da-slideFromRight">
										<a class="zoom" data-pretty="prettyPhoto" href="{{{URL::asset('img/dummies/big1.jpg')}}}">
											<i class="icon-zoom-in icon-rounded icon-48 active"></i>
										</a>
										<a href="portfolio-detail.html">
											<i class="icon-link icon-rounded icon-48 active"></i>
										</a>
										<div class="hidden-tablet">
											<p>Portfolio graphic</p>
										</div>
									</article>
								</li>

							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
@stop
