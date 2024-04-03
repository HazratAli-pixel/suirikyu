<?php 
$theme_path = get_stylesheet_directory_uri();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $theme_path; ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=M+PLUS+1&family=M+PLUS+1p:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <section >
        <header>
            <nav>
                <div class="siteContent">
                    <div class="logo-tilte">
                        <img class="siteLogo" src="<?= $theme_path;?>/assets/images/logo.svg" alt="">
                        <h1 class="siteTitle">水利協</h1>
                    </div>
                </div>
                <div class="menuContent">
                    <ul>
                        <li><a href="<?php echo get_site_url(); ?>/mypage/">トップページ</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/quiz/">マイページ</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/result/">テスト実施</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/registration/">テスト結果履歴</a> </li>
                        <li><a href="<?php echo get_site_url(); ?>/logout/">ログアウト</a></li>
                    </ul>
                    
                </div>
            </nav>
        </header>
        <div class="logout">
            <div class="logoutContent">
                <!-- <h1>aa</h1> -->
            </div>
        </div>
    </section>

