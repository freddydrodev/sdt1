<?php
function bootstrapNotify($msg = 'Erreur Inconnue', $type = 'danger'){
  ?>
  <script type="text/javascript">
    $.notify({
    // options
    icon: 'flaticon-question',
    message: "<?php echo $msg ?>"
    },{
      // settings
      type: "<?php echo $type ?>",
      placement: {
    		from: "top",
    		align: "right"
    	},
      z_index: 1110,
      mouse_over: 'pause',
      animate: {
    		enter: 'animated bounceIn',
    		exit: 'animated bounceOut'
    	}
    });
  </script>
  <?php
}

function clear($input) {
    return htmlspecialchars(trim($input));
}
