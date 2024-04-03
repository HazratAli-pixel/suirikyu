<?php
/*
Template Name: UserresultPage
*/
get_header('en');
$theme_path = get_stylesheet_directory_uri();

  $user_id = get_current_user_id(); 
  $user_info = get_userdata($user_id);
  $mailadresje = $user_info->user_email;
?>

<main>
	<?php 
	$current_user = wp_get_current_user();
	$user_email = $current_user->user_email;

	global $wpdb;
	$tableName = $wpdb->prefix."aysquiz_reports";
	$results = $wpdb->get_results("select * from $tableName where user_email='$user_email'");
	
	$photoPath =$theme_path."/assets/images/bg2.png";
	?>
	
	<?php get_template_part('common/topsection'); ?>
	
	<section id="tableBody">
		
		<div class="tableSectionName">
			<h1>テスト結果履歴</h1>
		</div>
		<div class="table" >
			<div class="thead">
				<div class="tr">
					<div class="th">受験日</div>
					<div class="th">点数</div>
					<div class="th">合否</div>
				</div>
			</div>
			<div class="tbody">
				<?php
				if($results){
				foreach($results as $result){
					$formatedDate = date("Y", strtotime($result->start_date))."年".date("m", strtotime($result->start_date))."月".date("d", strtotime($result->start_date))."日";
				?>
				<div class="tr">
					<div class="td"><?php echo $formatedDate; ?></div>
					<div class="td"><?php echo number_format($result->score); ?>点</div>
					
					<?php 
						if($result->score>50){?>
						<div class="tdDesign pass">合格</div>
						<?php } else {
					?>
					<div class="tdDesign fail">不合格</div>
					<?php } ?>
				</div>
				<?php }} 
				else { ?>
				<p >
					データがありません。クイズを始める....
				</p>
					<?php 
				}
				
				?>
				<div class="tableFooterButton">
						<a class="button btn-primary" href="<?php echo get_site_url(); ?>/quiz">テスト実施</a>
						<a class="button btn-secondary" href="<?php echo get_site_url(); ?>">トップページに戻る</a>
				</div>
			</div>
		</div>
		
	</section>
</main>
<?= get_footer('en'); ?>
