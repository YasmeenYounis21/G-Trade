<?php
/* Plugin Name : G Shopper Registration Form */
?>
<?php

function g_shopper_regsitration_form(){
	?>
	<p>
		<label for="client">Type of Client<br>
		<select name="client">
		  <option value="trade-company">Trade Company</option>
		  <option value="business-person">Business Person</option>
        </select>
		</label>
	</p>
	<?php
}

add_action('register_form','g_shopper_regsitration_form');


function g_shopper_user_register( $user_id ) {
  if ( ! empty( $_POST['client'] ) ) {
    update_user_meta( $user_id, 'client', trim( $_POST['client'] ) );
  }
}

add_action( 'user_register', 'g_shopper_user_register' );


?>