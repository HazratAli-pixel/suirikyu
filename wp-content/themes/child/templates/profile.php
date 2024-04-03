<?php
/*
Template Name: My Page
*/
get_header('en');
$theme_path = get_stylesheet_directory_uri();

  $user_id = get_current_user_id(); 
  $user_info = get_userdata($user_id);
  $mailadresje = $user_info->user_email;
//   echo "<pre>";
//   print_r($user_info);
//   echo "</pre>";

?>

<main>
	<?php 
	$current_user = wp_get_current_user();
	$user_email = $current_user->user_email;

	global $wpdb;
	$tableName = $wpdb->prefix."users";
	$results = $wpdb->get_row("select * from $tableName where user_email='$user_email'");
	
	?>
	<?php 
	get_template_part('common/topsection_water', null, array(
        'image' => "bg3.png", // for water wave use 'bg3.png' and water ripple use 'bg2.png';
        'title' => "マイページ",
        'sub_title' => "マイページで登録された施設情報を確認・編集できます。" // if subtitle none, then keep it null
    ));
	?>
	
	<section class="contentSection" id="profileSection">
		<div class="reg_cmplt">
			<div class="reg_secone">
				<ul>
					<li>施設名</li>
					<li><?= $results->display_name?></li>
				</ul>
			</div>
			<div class="reg_scndsec">
				<div class="reg_scndsec_left">
					<ul>
						<li>郵便番号</li>
						<li>123-5678</li>
					</ul>
				</div>
				<div class="reg_scndsec_right">
					<ul>
						<li>都道府県</li>
						<li>東京都</li>
					</ul>
				</div>
			</div>
			<div class="reg_secone">
				<ul>
					<li>以降住所</li>
					<li>港区新橋１−１−1　新橋第一ビル８F</li>
				</ul>
			</div>
			<div class="reg_secone">
				<ul>
					<li>業種選択</li>
					<li>サービス業</li>
				</ul>
			</div>
			<div class="reg_secone">
				<ul>
					<li>電話番号</li>
					<li>03-1234-5678</li>
				</ul>
			</div>
			<div class="reg_secone">
				<ul>
					<li>メールアドレス</li>
					<li><?= $results->user_email?></li>
				</ul>
			</div>
			<div class="reg_secone">
				<ul>
					<li>パスワード</li>
					<li>
						<ul class="reg_secone_inner">
							<li>1234567890</li>
							<li><a href="">変更</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="reg_btnn">
				<a href="#">編集する</a>
			</div>
		</div>
	</section>
</main>
<?= get_footer('en'); ?>
