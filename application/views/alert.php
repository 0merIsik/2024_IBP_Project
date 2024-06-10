<?php 

// Controllerden gelen session yakaladık
$alert = $this->session->userdata("alert");

// Böyle bir session varsa
if ($alert) 
{

	if($alert["type"] === "warning")
		{ ?>

			<script type="text/javascript">

				$("#open-alert").iziModal({
					title: '<?php echo $alert["title"]; ?>',
					subtitle: '<?php echo $alert["subtitle"]; ?>',
					headerColor: '#eed202',
					background: null,
			    theme: 'light',  // light
			    icon: 'fa fa-exclamation-triangle',
			    iconText: null,
			    iconColor: '#FFFFFF',
			    rtl: false,
			    width: 600,
			    top: null,
			    bottom: null,
			    borderBottom: true,
			    padding: 0,
			    radius: 3,
			    zindex: 999,
			    bodyOverflow: false,
			    openFullscreen: false,
			    closeOnEscape: true,
			    closeButton: true,
			    timeoutProgressbarColor: 'rgba(255,255,255,0.5)',
			    transitionIn: 'comingIn',
			    transitionOut: 'comingOut',
			    transitionInOverlay: 'fadeIn',
			    transitionOutOverlay: 'fadeOut',
			});
				$("#open-alert").iziModal("open");

			</script>

		<?php } else if($alert["type"] === "success") { ?> 

			<script type="text/javascript">

				$("#open-alert").iziModal({
					title: '<?php echo $alert["title"]; ?>',
					subtitle: '<?php echo $alert["subtitle"]; ?>',
					headerColor: '#22bb33',
					background: null,
				    theme: 'light',  // light
				    icon: 'fa fa-check-circle',
				    iconText: null,
				    iconColor: '#FFFFFF',
				    rtl: false,
				    width: 600,
				    top: null,
				    bottom: null,
				    borderBottom: true,
				    padding: 0,
				    radius: 3,
				    zindex: 999,
				    bodyOverflow: false,
				    openFullscreen: false,
				    closeOnEscape: true,
				    closeButton: true,
				    timeoutProgressbarColor: 'rgba(255,255,255,0.5)',
				    transitionIn: 'comingIn',
				    transitionOut: 'comingOut',
				    transitionInOverlay: 'fadeIn',
				    transitionOutOverlay: 'fadeOut',
				});
				$("#open-alert").iziModal("open");

			</script>

		<?php } else if($alert["type"] === "error") { ?> 

			<script type="text/javascript">

				$("#open-alert").iziModal({
					title: '<?php echo $alert["title"]; ?>',
					subtitle: '<?php echo $alert["subtitle"]; ?>',
					headerColor: '#bb2124',
					background: null,
				    theme: 'light',  // light
				    icon: 'fa fa-times-circle',
				    iconText: null,
				    iconColor: '#FFFFFF',
				    rtl: false,
				    width: 600,
				    top: null,
				    bottom: null,
				    borderBottom: true,
				    padding: 0,
				    radius: 3,
				    zindex: 999,
				    bodyOverflow: false,
				    openFullscreen: false,
				    closeOnEscape: true,
				    closeButton: true,
				    timeoutProgressbarColor: 'rgba(255,255,255,0.5)',
				    transitionIn: 'comingIn',
				    transitionOut: 'comingOut',
				    transitionInOverlay: 'fadeIn',
				    transitionOutOverlay: 'fadeOut',
				});
				$("#open-alert").iziModal("open");

			</script>

		<?php }

	}

?>