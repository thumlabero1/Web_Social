<!DOCTYPE html>
<html lang="en">
<?php require_once 'header.php'; ?>
<body>
	<?php require_once 'wavy-wrapper.php'; ?>
<div class="theme-layout">
	
	<div class="postoverlay"></div>

<?php require_once 'responsive-header.php'; ?>

<?php require_once 'topbar-stick.php'; ?>
	
<?php require_once 'fixed-sidebar-right.php'; ?>

<?php require_once 'fixed-sidebar-left.php'; ?>

<!-- section -->

<?php require_once 'section-bar.php'; ?>

<!-- section -->

	<a title="Your Cart Items" href="Controllershopcart.php" class="shopping-cart" data-toggle="tooltip">Cart <i class="fa fa-shopping-bag"></i><span>02</span></a>

<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="copyright">© Pitnik 2020. All rights reserved.</span>
					<i><img src="../images/credit-cards.png" alt=""></i>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once'side-panel.php'; ?>
<?php require_once'popup-wrapper.php'; ?>

</div><!-- The Scrolling Modal image with comment -->
	
	<script src="<?php echo base_url(''); ?>/public/js/main.min.js"></script>
	<script src="<?php echo base_url(''); ?>/public/js/jquery-stories.js"></script>
	<script src="<?php echo base_url(''); ?>/public/js/toast-notificatons.js"></script>
	<script src="../../../cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script><!-- For Controllertimeline slide show -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script><!-- for location picker map -->
	<script src="<?php echo base_url(''); ?>/public/js/locationpicker.jquery.js"></script><!-- for loaction picker map -->
	<script src="<?php echo base_url(''); ?>/public/js/map-init.js"></script><!-- map initilasition -->
	<script src="<?php echo base_url(''); ?>/public/js/page-tourintro.js"></script>
	<script src="<?php echo base_url(''); ?>/public/js/page-tour-init.js"></script>
	<script src="<?php echo base_url(''); ?>/public/js/script.js"></script>
	<script>
		jQuery(document).ready(function($) {
			
			$('#us3').locationpicker({
			  location: {
			    latitude: -8.681013,
			    longitude: 115.23506410000005
			  },
			  radius: 0,
			  inputBinding: {
			    latitudeInput: $('#us3-lat'),
			    longitudeInput: $('#us3-lon'),
			    radiusInput: $('#us3-radius'),
			    locationNameInput: $('#us3-address')
			  },
			  enableAutocomplete: true,
			  onchanged: function (currentLocation, radius, isMarkerDropped) {
			    // Uncomment line below to show alert on each Location Changed event
			    //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
			  }
			});
			
		if ($.isFunction($.fn.toast)) {
			$.toast({
				heading: 'Welcome To Pitnik',
				text: '',
				showHideTransition: 'slide',
				icon: 'success',
				loaderBg: '#fa6342',
				position: 'bottom-right',
				hideAfter: 3000,
			});

			$.toast({
				heading: 'Information',
				text: 'Now you can full demo of pitnik and hope you like',
				showHideTransition: 'slide',
				icon: 'info',
				hideAfter: 5000,
				loaderBg: '#fa6342',
				position: 'bottom-right',
			});
			$.toast({
				heading: 'Support & Help',
				text: 'Report any <a href="#">issues</a> by email',
				showHideTransition: 'fade',
				icon: 'error',
				hideAfter: 7000,
				loaderBg: '#fa6342',
				position: 'bottom-right',
			});
		}	

		});	
</script>

</body>	


</html>