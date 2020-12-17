<aside>
    <div id="sidebar"  class="nav-collapse ">
		<!-- sidebar menu start-->
        <ul class="sidebar-menu">
			<li class="">
				<a>
				<form class="navbar-form">
					<input class="form-control" placeholder="Search" type="text" id="sidebarSearch">
				</form>
				</a>
			</li>
			<!-- Admin menu start-->
			@if(Auth::user()->role_id == 1)
			<li class="sub-menu">
                <a href="javascript:;" class="">
                      <i class="icon_globe-2"></i>
                      <span>News</span>
                      <span class="menu-arrow arrow_carrot-right"></span>
				</a>
				<ul class="sub">
					<li>
					<a class="" href="/news">View/Edit</a>
                    </li>
					<li>
					<a class="" href="/news/create">Add</a>
                    </li>
				</ul>
            </li>

			<li class="sub-menu">
                <a href="javascript:;" class="">
                      <i class="icon_images"></i>
                      <span>Image Gallery</span>
                      <span class="menu-arrow arrow_carrot-right"></span>
				</a>
				<ul class="sub">
					<li>
					<a class="" href="">View/Edit</a>
                    </li>
					<li>
					<a class="" href="/imageGallery">Add</a>
                    </li>
				</ul>
            </li>

			<li class="sub-menu">
                <a href="javascript:;" class="">
                      <i class="icon_group"></i>
                      <span>Users</span>
                      <span class="menu-arrow arrow_carrot-right"></span>
				</a>
				<ul class="sub">
					<li>
					<a class="" href="/adminhome">View/Edit</a>
                    </li>
					<li>
					<a class="" href="/adminhome/create">Add</a>
                    </li>
				</ul>
            </li>

			<li class="sub-menu">
                <a href="javascript:;" class="">
					<i class="icon_profile"></i>
					<span>Village Officer</span>
					<span class="menu-arrow arrow_carrot-right"></span>
				</a>
				<ul class="sub">
					<li>
						<a class="" href="/gramasewaka"> View/Edit </a>
					</li>
					<li>
						<a class="" href="/gramasewaka/create"> Add </a>
					</li>
				</ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="">
					<i class="icon_profile"></i>
					<span>Council Member </span>
					<span class="menu-arrow arrow_carrot-right"></span>
				</a>
				<ul class="sub">
					<li>
						<a class="" href="/member"> View/Edit </a>
					</li>
					<li>
						<a class="" href="/adminhome/create">Add</a>
					</li>
				</ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="">
					<i class="icon_profile"></i>
					<span>Council Officer </span>
					<span class="menu-arrow arrow_carrot-right"></span>
				</a>
				<ul class="sub">
					<li>
						<a class="" href="/officer"> View/Edit </a>
					</li>
					<li>
						<a class="" href="/adminhome/create">Add</a>
					</li>
				</ul>
            </li>

             @elseif(Auth::user()->role_id == 2)
			<li>
				<a  href="/officerWaterSup">
					<i class=""></i>
					<span>Water Supply</span>
				</a>
            </li>
            <li>
                    <a  href="/officerBusApp">
                        <i class=""></i>
                        <span>Bussiness Registation</span>
                    </a>
            </li>
            <li>
                    <a  href="/officerBuildApp">
                        <i class=""></i>
                        <span>Building Approve</span>
                    </a>
            </li>
            <li>
                    <a  href="/officerTreeCutA">
                        <i class=""></i>
                        <span>Tree Permit</span>
                    </a>
            </li>
            <li>
                    <a  href="/officerEnvApp">
                        <i class=""></i>
                        <span>Environment Protect</span>
                    </a>
            </li>
			@endif
			<!-- Admin menu end-->
        </ul>
		<!-- sidebar menu end-->
    </div>
</aside>
