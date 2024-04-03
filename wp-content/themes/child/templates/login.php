<?php
/*
Template Name: Custom Login Page
*/

get_header();

// Check if the user is already logged in
if (is_user_logged_in()) {
    wp_redirect(home_url()); // Redirect to homepage if logged in
    exit;
}

// Check for any login errors
$login_error = '';
if (isset($_GET['login']) && $_GET['login'] == 'failed') {
    $login_error = '<div class="login-error">Login failed. Please try again.</div>';
}

?>

<div class="custom-login-form">
    <?php echo $login_error; ?>
    <form name="loginform" id="loginform" action="<?php echo esc_url(site_url('wp-login.php', 'login_post')); ?>" method="post">
        <p>
            <label for="user_login">Username<br />
                <input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
        </p>
        <p>
            <label for="user_pass">Password<br />
                <input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
        </p>
        <p class="submit">
            <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Log In" />
            <input type="hidden" name="redirect_to" value="<?php echo esc_url(home_url()); ?>" />
        </p>
    </form>
</div>

<?php get_footer(); ?>
