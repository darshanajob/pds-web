<header class="header dark-bg">
	<div class="toggle-nav">
		<div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
	</div>

	<!--logo start-->
	<a href="{{url( 'welcome') }}" class="logo" target="_blank">
		<span class="lite">
		{{ __('PATHADUMBARA REGIONAL COUNCIL') }}
		</span>
	</a>
	<!--logo end-->

	<div class="top-nav notification-row">
		<!-- notificatoin dropdown start-->
		<ul class="nav pull-right top-menu">

			<!-- user login dropdown start-->
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">
					<span class="profile-ava">
						<img alt="" src="img/avatar1_small.jpg">
					</span>
					<span class="username">{{ Auth::user()->name }}</span>
					<b class="caret"></b>
				</a>

				<ul class="dropdown-menu extended logout">
					<div class="log-arrow-up"></div>
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
			</li>
			<!-- user login dropdown end -->
		</ul>
		<!-- notificatoin dropdown end-->
	</div>
</header>
<!--header end-->
