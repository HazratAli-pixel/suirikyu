<?php
// Enqueue parent and child theme styles
function my_child_theme_enqueue_styles() {
    // Load parent theme stylesheet first
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
    // Load child theme stylesheet
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
}
add_action('wp_enqueue_scripts', 'my_child_theme_enqueue_styles');

// Add action for form submission
// add_action('admin_post_process_registration', 'process_registration');
// add_action('admin_post_nopriv_process_registration', 'process_registration');

// function process_registration() {
	// if (isset($_POST['submitReg'])) {
	//   global $wpdb;
  
	//   // $name = sanitize_text_field($_POST['name']);
	//   // $address = sanitize_text_field($_POST['address']);
	//   // $postalcode = sanitize_text_field($_POST['postalcode']);
	//   // $selectBox = sanitize_text_field($_POST['selectBox']);
	//   // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  
	//   $table_name = $wpdb->prefix . 'registered_users';
  
	//   $data = array(
	// 	'name' => $_POST['name'],
	// 	'address' => $_POST['address'],
	// 	'postalcode' => $_POST['postalcode'],
	// 	'selectbox' => $_POST['selectBox'],
	// 	'password' => $_POST['password']
	//   );
  
	// //   $format = array('%s', '%s', '%s', '%s', '%s');
  
	//   if ($wpdb->insert($table_name, $data, $format = NULL)) {
	// 	echo 'Registration successful!';
	//   } else {
	// 	echo 'Error in registration.';
	//   }
	// }
  
	// Redirect after form submission (optional)
	// wp_redirect(home_url());
	// exit();
  // }





?>


