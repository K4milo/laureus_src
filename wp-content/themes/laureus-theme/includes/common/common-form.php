
<?php

	//the logic base

	$user_id = get_current_user_id();

	// The form variables

	$name = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$fullname = $name.' '.$last_name;
	$address = $_POST['address'];
	$email = $_POST['email'];
	$company = $_POST['company_name'];
	$message = $_POST['message'];

	if($name) {
		// Create post object
		$contact_post = array(
			'post_title'    => $fullname,
			'post_content'  => $message,
			'post_status'   => 'publish',
			'post_type'   => 'contacts',
			'meta_input' => array(
				'name' => $name,
				'last_name' => $lastname,
				'company' => $company,
				'address' => $address,
				'email' => $email,
				'message' => $message,
			)
		);

		// Insert the post into the database
		wp_insert_post($contact_post);
	}

?>


<form id="contact_us_frm" method="post" action="<?php the_permalink(); ?>">
	
	<div class="form-input text">
		<input type="text" placeholder="Name" name="first_name" class="form-control" required>
	</div>

	<div class="form-input text">
		<input type="text" placeholder="Last Name" name="last_name" class="form-control" required>
	</div>

	<div class="form-input text">
		<input type="text" placeholder="Address" name="address" class="form-control" required>
	</div>

	<div class="form-input email">
		<input type="email" placeholder="Email" name="email" class="form-control" required>
	</div>

	<div class="form-input text">
		<input type="text" placeholder="Company" name="company_name" class="form-control" required>
	</div>

	<div class="form-input textarea">
		<label>Message:</label>
		<textarea name="message" class="form-control"></textarea>
	</div>

	<div class="form-input submit">
		<input type="submit" value="Send" class="btn">
	</div>	

</form>