
<header>
      <!-- Navbar
      ================================================== -->
      <div class="navbar navbar-static-top">
      	<div class="navbar-inner">
      		<div class="container">
      			<!-- banner -->
      			<div class="logo">
      				<div class="banner">
						<img src="{{asset('img/logo_si.png')}}" alt="" />
						{{ __('PATHADUMBARA REGIONAL COUNCIL') }}
      				</div>
      			</div>
      			<!-- end banner -->

      			<!-- language -->
				<div class="language">
				    @foreach (config('app.available_locales') as $locale)					
						<a 
						   href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
						   @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>
						   @if ($locale == 'si')  
								සිංහල
						   @endif
						   @if ($locale == 'en')  
								English
						   @endif
						   @if ($locale == 'ta')  
								தமிழ் 
						   @endif
						   <!-- {{ strtoupper($locale) }}-->
						</a> 
						@if ($locale != 'ta')
							&nbsp;|
						@endif
					@endforeach
      			</div>
      			<!-- end language -->

      			<!-- top menu -->
      			<div class="navigation" style="float:left;">
      				<nav>
      					<ul class="nav topnav" id="menu">
      						<li class="{{ setActive('welcome', 'active') }}">
								<a href="{{url( app()->getLocale(),'welcome') }}" class="item"> <i class="icon-home"></i>{{ __('Home') }}</a>
      						</li>

							<li class="dropdown {{ setActiveBySegments('s', 'active') }}">
      							<a class="item"><i class="icon-cog"></i> {{ __('Services') }} <i class="icon-angle-down"></i></a>
      							<ul class="dropdown-menu">
      								<li class="dropdown"><a class="item"> {{ __('Get Approval') }} <i class="icon-angle-right"></i></a>
      									<ul class="dropdown-menu sub-menu">
											<li><a href="{{url( app()->getLocale(),'s/waterSupply') }}" class="item"> {{ __('Water Supply') }} </a></li>
											<li><a href="{{url( app()->getLocale(),'s/waterBowser') }}" class="item"> {{ __('Water Bowser') }} </a></li>
      										<li><a href="{{url( app()->getLocale(),'s/building') }}" class="item"> {{ __('Building Plans') }} </a></li>
      										<li><a href="{{url( app()->getLocale(),'s/landBlock') }}" class="item"> {{ __('Land Blocks') }} </a></li>
      										<li><a href="{{url( app()->getLocale(),'s/roadExcavation') }}" class="item"> {{ __('Road Excavation') }} </a></li>
                                            <li><a href="{{url( app()->getLocale(),'s/cutTree') }}" class="item"> {{ __('Cutting Trees') }} </a></li>
      									</ul>
      								</li>

      								<li class="dropdown"><a> {{ __('Issue License') }} <i class="icon-angle-right"></i></a>
      									<ul class="dropdown-menu sub-menu">
                                            <li><a href="{{url( app()->getLocale(),'s/tradeLicense') }}"> {{ __('Trade License') }} </a></li>
      										<li><a href="{{url( app()->getLocale(),'s/envirProtect') }}"> {{ __('Environment Protection') }} </a></li>
      									</ul>
      								</li>

      								<li class="dropdown"><a> {{ __('Hiring') }} <i class="icon-angle-right"></i></a>
      									<ul class="dropdown-menu sub-menu">
      										<li><a href="{{url( app()->getLocale(),'s/hirePlayground') }}"> {{ __('Playgrounds') }} </a></li>
      										<li><a href="{{url( app()->getLocale(),'s/hireHall') }}"> {{ __('Halls') }} </a></li>
      									</ul>
      								</li>

      								<li class="dropdown"><a> {{ __('Garbage Management') }} <i class="icon-angle-right"></i></a>
      									<ul class="dropdown-menu sub-menu">
      										<li><a href="{{url( app()->getLocale(),'s/garbageTransport') }}"> {{ __('Garbage Transport') }} </a></li>
      										<li><a href="{{url( app()->getLocale(),'s/garbageDisposal') }}"> {{ __('Garbage Disposal') }} </a></li>
      									</ul>
      								</li>

                                    <li><a href="{{url( app()->getLocale(),'s/threewheelReg') }}"> {{ __('Threewheeler Registration') }} </a></li>
      								<li><a href="{{url( app()->getLocale(),'s/ayurvedaMedical') }}"> {{ __('Ayurveda Medical Service') }} </a></li>
      								<li><a href="{{url( app()->getLocale(),'s/streetLight') }}"> {{ __('Lighting of Streets') }}  </a></li>
      							</ul>
      						</li>

							<li class="{{ setActive('project', 'active') }}">
								<a href="{{url( app()->getLocale(),'project') }}">
								<i class="icon-tasks"></i> {{ __('Projects') }} </a>
							</li>

      						<li class="dropdown {{ setActiveBySegments('d', 'active') }}">
      							<a><i class="icon-download-alt"></i> {{ __('Downloads') }} <i class="icon-angle-down"></i></a>
      							<ul class="dropdown-menu">
      								<li><a href="{{url( app()->getLocale(),'d/application') }}"> 
									{{ __('Application Forms') }} 
									</a></li>
      								<li><a href="{{url( app()->getLocale(),'d/gazette') }}"> 
									{{ __('Gazette') }} 
									</a></li>
      							</ul>
      						</li>

							<li class="dropdown {{ setActiveBySegments('t', 'active') }}">
								<a><i class="icon-briefcase"></i> {{ __('Tender') }} <i class="icon-angle-down"></i></a>
								<ul class="dropdown-menu">
									  <li><a href="{{url( app()->getLocale(),'t/supplierReg') }}"> 
									  {{ __('Supplier Registration') }} 
									  </a></li>
									  <li><a href="{{url( app()->getLocale(),'t/tenderCall') }}"> 
									  {{ __('Tender Calling') }} 
									  </a></li>
									  <li><a href="{{url( app()->getLocale(),'t/bidding') }}"> 
									  {{ __('Bidding') }} 
									  </a></li>
								</ul>
							</li>

      						<li class="{{ setActive('gallery', 'active') }}">
      							<a href="{{url( app()->getLocale(),'gallery') }}"><i class="icon-picture"></i> {{ __('Photo Gallery') }} </a>
      						</li>

      						<li class="dropdown {{ setActiveBySegments('c', 'active') }}">
      							<a><i class="icon-bullhorn"></i> {{ __('Complain') }} <i class="icon-angle-down"></i></a>
								<ul class="dropdown-menu">
      								<li><a href="{{url( app()->getLocale(),'c/complain') }}"> 
									{{ __('Make Complain') }} </a></li>
      								<li><a href="{{url( app()->getLocale(),'c/viewComplain') }}"> 
									{{ __('View Complain') }} </a></li>				
								</ul>
      						</li>

                              <li class="eborder-top">
                                    <a href="#"><i class="icon_profile"></i> My Profile</a>
                              </li>

                              <li>
                                    <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                              </li>

                    <li>
                        <a href="{{ route('logout',app()->getLocale()) }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>

                              <li>
                                    <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                              </li>
                    

      					</ul>
      				</nav>
      			</div>
      			<!-- end menu -->
      		</div>
      	</div>
    </div>
</header>