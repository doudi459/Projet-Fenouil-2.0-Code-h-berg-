<?php
use App\Notefication;

?>
<!DOCTYPE html>
<html dir="ltr" lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="https://fenouildeco.000webhostapp.com/public/images/fenouil.png" rel="shortcut icon" type="image/x-icon" />
<link href="https://fenouildeco.000webhostapp.com/public/images/fenouil.png" rel="icon" type="image/x-icon" />
<!-- Plombiers Title -->
<title>Fenouil - Application</title>
<!-- css file -->
<link rel="stylesheet" href="https://fenouildeco.000webhostapp.com/public/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fenouildeco.000webhostapp.com/public/css/style.css">
	<link rel="stylesheet" href="https://fenouildeco.000webhostapp.com/public/css/bootstrap.min1.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="https://fenouildeco.000webhostapp.com/public/css/responsive.css">
	<!-- REVOLUTION LAYERS STYLES -->
<link rel="stylesheet" type="text/css" href="https://fenouildeco.000webhostapp.com/public/revolution-slider/css/settings.css">
<link rel="stylesheet" type="text/css" href="https://fenouildeco.000webhostapp.com/public/revolution-slider/css/layers.css">
<link rel="stylesheet" type="text/css" href="https://fenouildeco.000webhostapp.com/public/revolution-slider/css/navigation.css">


<style>
	.label-input100 {

		font-family: Poppins-SemiBold;
		font-size: 18px;
		color: #999999;
		line-height: 1.2;
		padding-left: 2px;

	}
	.input100 {
		border-color: #dc3545 ;
		border-left-style: none;
		border-left-width: 0px;
		border-right-style: none;
		border-right-width: 0px
		display: block;
		width: 100%;
		height: 50px;
		background: transparent;
		font-family: Poppins-Regular;
		font-size: 22px;
		color: #555555;
		line-height: 1.2;
		padding: 0 2px;

	}
</style>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
<div class="preloader"></div>
  	<div class="et-header-topped">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-5">
  					<ul class="list-inline et-ht-cntct-details">
  						<li><a href="#"><i class="lnr lnr-map-marker"></i> IBGBI Univérsité D'Evry Val D'Essonne </a></li>
  					</ul>
  				</div>
  				<div class="col-md-7">
  					<div class="et-social-linked pull-right">
  						<ul class="list-inline">
  							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
  							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
  							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
  							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
  							<li><a href="#"><i class="fa fa-skype"></i></a></li>
  						</ul>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

	<!-- Header Styles -->
	<div class="header-nav">
		<div class="main-header-nav scrollingto-fixed">
			<div class="container">
				<nav id="menuzord" class="menuzord">
					<a href="#" class="menuzord-brand"><img src="https://fenouildeco.000webhostapp.com/public/images/fenouil.png" alt=""></a>
					<ul class="menuzord-menu">
						<li><a href="{{route('Deco')}}">Décoration</a></li>
						<li><a href="{{route('Bricolage')}}">Bricolage</a></li>
						<li><a href="#Contact">Nous Contacter</a></li>
					</ul>


					 <ul class="navbar-right menuzord-menu">

						 @if (Route::has('login'))

								 @auth



									 <li class="menuzord-menu"><a href="#"><span class="glyphicon glyphicon-user"></span> Profil   </a>

										 <ul class="dropdown animated zoomIn">
											 <li><a href="#"><i class="ti-user"></i>Nom  {{ Auth::user()->name }} </a></li>
											 <li><a href="#"><i class="ti-wallet"></i>Prenom  {{ Auth::user()->prenom }}</a></li>
											 <li><a href="#"><i class="ti-email"></i> Email  {{ Auth::user()->Email }} </a></li>
											 <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>

													 Déconnexion
													 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														 @csrf
													 </form>



												 </a></li>

										 </ul>

									 </li>

									 <li class="menuzord-menu"><a href="#">  <span class="glyphicon glyphicon glyphicon-envelope"> <span id="nbmsg" class="badge badge-danger" style="position: absolute ; margin-top: -13px" ></span> </span>  Notifications</a>

										 <?php $notifs = Notefication::all()->where('id_indevidu','=', Auth::user()->id)->sortByDesc('id_notif'); ?>
										 <ul class="dropdown dropdown-menu dropdown-menu-right mailbox animated zoomIn">

											 <li>
												 <div class="drop-title">VOS MESSAGES</div>
											 </li>
											 @foreach($notifs as $notif)
											 <li style="overflow: visible;">
												 <div class="slimScrollDiv" style="position: relative; overflow-x: visible; overflow-y: hidden; width: auto;"><div class="message-center">


														 <a href="#">
															 <div class="text-thm"> <span id="{{$notif->id_notif}}" style="color: #857b26;" class=""> </span> <span class="profile-status online pull-right"></span>{{$notif->objet}}</div>

															 <div class="mail-contnet text-center">
																 <h5>{{$notif->contenu}}</h5>
															 </div>
														 </a>



													 </div>
												 </div>
											 </li>
											 @endforeach
											 <li>
												 <a class="nav-link text-center" href="javascript:void(0);"> <strong>Voir Tout les Notifications</strong> <i class="fa fa-angle-right"></i> </a>
											 </li>
										 </ul>



									 </li>
								      <li class="menuzord-menu"><a href="{{route('ValideCommande.index')}}"><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a></li>
									 @if (Auth::user()->Fonction != null)
										 <li class="menuzord-menu"><a href="{{route('dashbord')}}"><span class="glyphicon  glyphicon-cog"></span> Dashboard</a></li>

									@endif








								 @else
									 <li class="menuzord-menu"><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>

									 @if (Route::has('register'))
									 <li class="menuzord-menu" ><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>Register</a></li>
									 @endif
								 @endauth

						 @endif

    				</ul>


				</nav>
			</div>
		</div>
	</div>

	<!-- Home Design -->
@yield('contenu')

	<!-- First Divider -->
	<section class="et-section-divider" style="background-image:none;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2 class="text-uppercase">Contactez Nous Par Email Au</h2>
					<h2 class="text-uppercase et-cell">Avangers@gmail.com</h2>
				</div>
			</div>
		</div>
	</section>


	<!-- Footer Section -->
	<footer id="contact" class="footer et-footer" style="background-image:none;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="et-foter-title">
						<p class="et-foter-sub-title text-uppercase">Nos Reseaux</p>
					</div>
					<div class="et-twitter-feed-widget">
						<img src="" alt="">
						<p class="text-uppercase text-thm">Vous Pouvez Contacter avengers via nos réseaux ICI</p>
						<div class="foter-logo">
						<ul class="list-inline">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 text-center">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="et-foter-title">
						<p class="et-foter-sub-title text-uppercase">Description</p>
					</div>
					<div class="et-flickr-widget text-thm">
						<div class="row">
							<p>l'application fenouil a été réalisée par les etudiants de asr (Architecture des Systemes en Réseaux) De L'Université d'evry encadrée par l'enseignant fabien palacios et Mr . jean </p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center text-thm">
					<p class="copyright">Copyright ©2019 <span class="text-thm">Avengers.</span>  All Rights Reserved</p>
				</div>
			</div>
		</div>
	</footer>




<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/js/jquery.js"></script>
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/js/scrollto.js"></script>
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/js/menuzord.js"></script>
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/js/jquery-SmoothScroll-min.js"></script>
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/js/fancybox.js"></script>
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/js/wow.min.js"></script>
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/js/owl.carousel.min.js"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/js/script.js"></script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
		(Load Extensions only on Local File Systems !
		 The following part can be removed on Server for On Demand Loading) -->



<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/revolution-slider/js/extensions/revolution.extension.carousel.min.js" >
</script>
<script type="text/javascript" src='https://fenouildeco.000webhostapp.com/public/revolution-slider/js/extensions/revolution.extension.kenburn.min.js' >
</script>
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js" >
</script>
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/revolution-slider/js/extensions/revolution.extension.migration.min.js" >
</script>
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/revolution-slider/js/extensions/revolution.extension.navigation.min.js" >
</script>
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/revolution-slider/js/extensions/revolution.extension.parallax.min.js" >
</script>
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/revolution-slider/js/extensions/revolution.extension.slideanims.min.js">
</script>
<script type="text/javascript" src="https://fenouildeco.000webhostapp.com/public/revolution-slider/js/extensions/revolution.extension.video.min.js" >
</script>


<!-- Bootstrap tether Core JavaScript -->

<!-- slimscrollbar scrollbar JavaScript -->
<script src="https://fenouildeco.000webhostapp.com/public/js/jquery.slimscroll.js" ></script>
<!--Menu sidebar -->
<script src="https://fenouildeco.000webhostapp.com/public/js/sidebarmenu.js" ></script>
<!--stickey kit -->
<script src="https://fenouildeco.000webhostapp.com/public/js/sticky-kit-master/dist/sticky-kit.min.js"></script>

<!-- Amchart -->
@yield('js')
<script src="https://fenouildeco.000webhostapp.com/public/js/owl-carousel/owl.carousel.min.js"></script>
<script src="https://fenouildeco.000webhostapp.com/public/js/owl-carousel/owl.carousel-init.js"></script>
<script src="https://fenouildeco.000webhostapp.com/public/js/scripts.js"></script>
<!-- scripit init-->

<script src="https://fenouildeco.000webhostapp.com/public/js/custom.min.js"></script>

<!-- END REVOLUTION SLIDER -->

<!-- END REVOLUTION SLIDER -->
<script type="text/javascript">
	var tpj=jQuery;			
	var revapi4;
	tpj(document).ready(function() {
		if(tpj("#rev_slider_4_1").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_4_1");
		}else{
			revapi4 = tpj("#rev_slider_4_1").show().revolution({
				sliderType:"auto",
				sliderLayout:"fullwidth",
				dottedOverlay:"none",
				delay:9000,
				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					onHoverStop:"off",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					}
					,
					arrows: {
						style:"zeus",
						enable:true,
						hide_onmobile:true,
						hide_under:600,
						hide_onleave:true,
						hide_delay:200,
						hide_delay_mobile:1200,
						tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:30,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:30,
							v_offset:0
						}
					}
					,
					bullets: {
						enable:true,
						hide_onmobile:true,
						hide_under:600,
						style:"metis",
						hide_onleave:true,
						hide_delay:200,
						hide_delay_mobile:1200,
						direction:"horizontal",
						h_align:"center",
						v_align:"bottom",
						h_offset:0,
						v_offset:30,
						space:5,

					}
				},
				viewPort: {
					enable:true,
					outof:"pause",
					visible_area:"80%"
				},
				responsiveLevels:[1240,1024,778,480],
				gridwidth:[1240,1024,778,480],
				gridheight:[800,800,500,400],
				lazyType:"none",
				parallax: {
					type:"mouse",
					origo:"slidercenter",
					speed:2000,
					levels:[2,3,4,5,6,7,12,16,10,50],
				},
				shadow:0,
				spinner:"off",
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
				shuffle:"off",
				autoHeight:"off",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}
	});	/*ready*/
</script>
<script>
	@if (Route::has('login'))

			@auth
	window.onload = function () {
		var nummsg = 0;
				@foreach($notifs as $notif)
				var notifid = {{$notif->id_notif}} ;
				var spa = document.getElementById(notifid);
				var etat = "{{$notif->Type}}";
				var type = {{$notif->état}}
				if (type == 0)
		{
			nummsg = nummsg + 1 ;
			console.log(nummsg);
		}

				if (etat =="attente")
				{
					spa.className = "img-circle glyphicon glyphicon-hourglass";
				}
				if (etat =="Validé")
				{
			spa.className = "img-circle glyphicon glyphicon-ok";
				}
				if (etat =="refusé")
				{
			spa.className = "img-circle glyphicon glyphicon-remove";
				}

				@endforeach
				document.getElementById("nbmsg").innerText = nummsg ;


	};
			@endauth

					@endif


</script>
</body>
</html>