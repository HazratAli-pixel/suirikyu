<?php 
$path = preg_replace('/wp-content(?!.*wp-content).*/','',__DIR__);
include($path.'wp-load.php');
extract($_POST);
if (isset($_POST)) {
	  global $wpdb;
  
	  // $name = sanitize_text_field($_POST['name']);
	  // $address = sanitize_text_field($_POST['address']);
	  // $postalcode = sanitize_text_field($_POST['postalcode']);
	  // $selectBox = sanitize_text_field($_POST['selectBox']);
	  // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  
	  $table_name = $wpdb->prefix . 'registered_users';
  
	  $data = array(
		'name' => $_POST['name'],
		'address' => $_POST['address'],
		'postalcode' => $_POST['postalcode'],
	  );
  
	//   $format = array('%s', '%s', '%s', '%s', '%s');
    $result = $wpdb->insert($table_name, $data);
	  if ($result) {
		echo "<div class='alert alert-success'>Successfully inserted!</div>";
	  } else {
		echo "<div class='alert alert-danger'>Something gone wrong</div>";
	  }
	}

?>