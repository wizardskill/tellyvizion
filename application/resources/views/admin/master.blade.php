<!DOCTYPE html>
<html lang="en">
<head>

	<?php $settings = Setting::first(); ?>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="HelloVideo Admin Panel" />
	<meta name="author" content="" />

	<title>{{ $settings->website_name . ' - ' . $settings->website_description }}</title>

	<link rel="stylesheet" href="{{ URL::to('/application/assets/admin/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}">
	<link rel="stylesheet" href="{{ URL::to('/application/assets/admin/css/font-icons/entypo/css/entypo.css') }}">
	<link rel="stylesheet" href="{{ URL::to('/application/assets/admin/css/font-icons/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="{{ URL::to('/application/assets/admin/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ URL::to('/application/assets/admin/css/core.css') }}">
	<link rel="stylesheet" href="{{ URL::to('/application/assets/admin/css/theme.css') }}">
	<link rel="stylesheet" href="{{ URL::to('/application/assets/admin/css/forms.css') }}">
	<link rel="stylesheet" href="{{ URL::to('/application/assets/admin/css/custom.css') }}">

	<?php $favicon = (isset($settings->favicon) && trim($settings->favicon) != "") ? $settings->favicon : '/favicon.png'; ?>
	<link rel="icon" href="<?= Config::get('site.uploads_dir') . '/settings/' . $favicon ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= Config::get('site.uploads_dir') . '/settings/' . $favicon ?>" type="image/x-icon">

	@yield('css')

	<script src="{{ URL::to('/application/assets/admin/js/jquery-1.11.0.min.js') }}"></script>
	<script src="{{ URL::to('/application/assets/admin/js/bootstrap-colorpicker.min.js') }}" id="script-resource-13"></script>

	<script>$.noConflict();</script>

	<!--[if lt IE 9]><script src="{{ '/application/assets/admin/js/ie8-responsive-file-warning.js' }}"></script><![endif]-->

	<!-- HTML5 shim and Respond.js') }} IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js') }}/1.4.2/respond.min.js') }}"></script>
	<![endif]-->


</head>
<body class="page-body skin-black">

<a href="{{ URL::to('/') }}" class="top-left-logo">
	<img src="{{ URL::to('/application/assets/admin/images/hv-tv.png') }}" />
</a>

<div class="page-container sidebar-collapsed"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu page-right-in">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="{{ URL::to('/') }}">
						
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>
			
									
			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li class="active">
					<a href="{{ URL::to('admin') }}">
						<i class="entypo-gauge"></i>
						<span class="title">Dashboard</span>
					</a>
				</li>
				<li class="">
					<a href="{{ URL::to('admin/videos') }}">
						<i class="entypo-video"></i>
						<span class="title">Videos</span>
					</a>
					<ul>
						<li>
							<a href="{{ URL::to('admin/videos') }}">
								<span class="title">All Videos</span>
							</a>
						</li>
						<li>
							<a href="{{ URL::to('admin/videos/create') }}">
								<span class="title">Add New Video</span>
							</a>
						</li>
						<li>
							<a href="{{ URL::to('admin/videos/categories') }}">
								<span class="title">Video Categories</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="{{ URL::to('admin/users') }}">
						<i class="entypo-users"></i>
						<span class="title">Users</span>
					</a>
					<ul>
						<li>
							<a href="{{ URL::to('admin/users') }}">
								<span class="title">All Users</span>
							</a>
						</li>
						<li>
							<a href="{{ URL::to('admin/user/create') }}">
								<span class="title">Add New User</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="{{ URL::to('admin/pages') }}">
						<i class="entypo-book-open"></i>
						<span class="title">Pages & Posts</span>
					</a>
					<ul>
						<li>
							<a href="{{ URL::to('admin/pages') }}">
								<span class="title">All Pages</span>
							</a>
						</li>
						<li>
							<a href="{{ URL::to('admin/pages/create') }}">
								<span class="title">Add New Page</span>
							</a>
						</li>
						<li>
							<a href="{{ URL::to('admin/posts') }}">
								<span class="title">All Posts</span>
							</a>
						</li>
						<li>
							<a href="{{ URL::to('admin/posts/create') }}">
								<span class="title">Add New Post</span>
							</a>
						</li>
						<li>
							<a href="{{ URL::to('admin/posts/categories') }}">
								<span class="title">Post Categories</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="{{ URL::to('admin/menu') }}">
						<i class="entypo-list"></i>
						<span class="title">Menu</span>
					</a>
				</li>
				<li class="">
					<a href="{{ URL::to('admin/themes') }}">
						<i class="entypo-monitor"></i>
						<span class="title">Themes</span>
					</a>
				</li>
				<li class="">
					<a href="{{ URL::to('admin/plugins') }}">
						<i class="fa fa-plug"></i>
						<span class="title">Plugins</span>
					</a>
					<ul>
						<li>
							<a href="{{ URL::to('admin/plugins') }}">All Plugins</a>
						</li>
						<?php $PluginsController = new AdminPluginsController(); ?>
						<?php $plugins = $PluginsController->get_plugins(); ?>
						@foreach($plugins as $plugin)
            				<?php $this_plugin = Plugin::where('slug', '=', $plugin['slug'])->first(); ?>
            				<?php if(isset($this_plugin->name) && isset($this_plugin->active) && $this_plugin->active == 1): ?>
            					<li>
            						<a href="/admin/plugin/{{ $this_plugin->slug }}">{{ $this_plugin->name }}</a>
            					</li>
            				<?php endif; ?>
	            		@endforeach
	            	</ul>
				</li>
				<li class="">
					<a href="{{ URL::to('admin/settings') }}">
						<i class="entypo-cog"></i>
						<span class="title">Settings</span>
					</a>
					<ul>
						<li class="">
							<a href="{{ URL::to('admin/settings') }}">
								<span class="title">Site Settings</span>
							</a>
						</li>
						<li class="">
							<a href="{{ URL::to('admin/payment_settings') }}">
								<span class="title">Payment Settings</span>
							</a>
						</li>
						<li class="">
							<a href="{{ URL::to('admin/theme_settings') }}">
								<span class="title">Theme Settings</span>
							</a>
						</li>
					</ul>
				</li>
						
				
			</ul>
			
		</div>

	</div>

	<div class="main-content">
				
		<div class="row">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
		
				<ul class="user-info pull-left pull-none-xsm">
					<!-- Profile Info -->
					<li class="profile"><!-- add class "pull-right" if you want to place this from right -->
							<img src="{{ Config::get('site.uploads_dir') . 'avatars/' . Auth::user()->avatar }}" alt="" class="img-circle" width="26" />
							<span>Howdy, {{ ucfirst(Auth::user()->username) }}</span>
					</li>
				</ul>
			</div>

		
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">

					<!-- <li>
						<span class="label label-warning" style="font-size:12px; background:#A8D432">Version 1.0.9</span>
					</li>
					<li>
						<a href="http://hellovideoapp.com/login" target="_blank">
							<span class="label label-danger" style="font-size:12px; background:#FC9A24">Updates <i class="entypo-download right"></i></span>
						</a>
					</li> -->

					<li>
						<a href="{{ URL::to('/') }}">
							<span class="label label-info" style="font-size:12px">View My Site <i class="entypo-export right"></i></span>
						</a>
					</li>

					<li class="sep"></li>
		
					<li>
						<a href="{{ URL::to('logout') }}">
							Log Out <i class="entypo-logout right"></i>
						</a>
					</li>
				</ul>
		
			</div>
		
		</div>
		
		<hr />

		<div id="main-admin-content">

			@yield('content')

		</div>
		
		<!-- Footer -->
		<footer class="main">
			
			&copy; 2017 <strong>Tellyvizion</strong> 
		
		</footer>
	</div>
	
	
</div>

	<!-- Sample Modal (Default skin) -->
	<div class="modal fade" id="sample-modal-dialog-1">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Widget Options - Default Modal</h4>
				</div>
				
				<div class="modal-body">
					<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Sample Modal (Skin inverted) -->
	<div class="modal invert fade" id="sample-modal-dialog-2">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Widget Options - Inverted Skin Modal</h4>
				</div>
				
				<div class="modal-body">
					<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Sample Modal (Skin gray) -->
	<div class="modal gray fade" id="sample-modal-dialog-3">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Widget Options - Gray Skin Modal</h4>
				</div>
				
				<div class="modal-body">
					<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>




	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="{{ URL::to('/application/assets/admin/js/jvectormap/jquery-jvectormap-1.2.2.css') }}">
	<link rel="stylesheet" href="{{ URL::to('/application/assets/admin/js/rickshaw/rickshaw.min.css') }}">

	<!-- Bottom scripts (common) -->
	<script src="{{ URL::to('/application/assets/admin/js/gsap/main-gsap.js') }}"></script>
	<script src="{{ URL::to('/application/assets/admin/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}"></script>
	<script src="{{ URL::to('/application/assets/admin/js/bootstrap.js') }}"></script>
	<script src="{{ URL::to('/application/assets/admin/js/joinable.js') }}"></script>
	<script src="{{ URL::to('/application/assets/admin/js/resizeable.js') }}"></script>
	<script src="{{ URL::to('/application/assets/admin/js/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>


	<!-- Imported scripts on this page -->
	<script src="{{ URL::to('/application/assets/admin/js/jvectormap/jquery-jvectormap-europe-merc-en.js') }}"></script>
	<script src="{{ URL::to('/application/assets/admin/js/jquery.sparkline.min.js') }}"></script>
	<script src="{{ URL::to('/application/assets/admin/js/rickshaw/vendor/d3.v3.js') }}"></script>
	<script src="{{ URL::to('/application/assets/admin/js/rickshaw/rickshaw.min.js') }}"></script>
	<script src="{{ URL::to('/application/assets/admin/js/raphael-min.js') }}"></script>
	<script src="{{ URL::to('/application/assets/admin/js/morris.min.js') }}"></script>
	<script src="{{ URL::to('/application/assets/admin/js/toastr.js') }}"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="{{ URL::to('/application/assets/admin/js/custom.js') }}"></script>


	<!-- Demo Settings -->
	<script src="{{ URL::to('/application/assets/admin/js/main.js') }}"></script>

	<!-- Notifications -->
	<script>
		var opts = {
			"closeButton": true,
			"debug": false,
			"positionClass": "toast-top-right",
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		};

		<?php if(Session::get('note') != '' && Session::get('note_type') != ''): ?>
	        
	        if('<?= Session::get("note_type") ?>' == 'success'){
	        	toastr.success('<?= Session::get("note") ?>', "Sweet Success!", opts);
	        } else if('<?= Session::get("note_type") ?>' == 'error'){
	        	toastr.error('<?= Session::get("note") ?>', "Whoops!", opts);
	        }
	        <?php Session::forget('note');
	              Session::forget('note_type');
	        ?>
	    <?php endif; ?>

	    function display_mobile_menu(){
	    	if($(window).width() < 768){
	    		$('.sidebar-collapsed').removeClass('sidebar-collapsed');
	    	}
	    }

	    $(document).ready(function(){
	    	display_mobile_menu();
	    });
		
	</script>
	<!-- End Notifications -->

	@yield('javascript')


</body>
</html>
