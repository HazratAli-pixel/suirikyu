<?php $theme_path = get_stylesheet_directory_uri();?>
<footer>
    <div class="footer-content">
        <div class="leftSideItem">
            <div class="logo-tilte">
                <img class="siteLogo" src="<?= $theme_path;?>/assets/images/logo.svg" alt="">
                <h1 class="siteTitle">水利協</h1>
            </div>
            <div class="copyRight">
                <p>© 2024 Copyright Suirikyou Test Association All rights reserved.</p>
            </div>
        </div>
        <div class="middleSideItem">
            <ul>
                <li>【お問い合わせ】</li>
                <li>ADDRESS：〒111-0051 東京都台東区蔵前4-6-7 MBCビル5F</li>
                <li>TEL：03-3863-2702</li>
                <li>FAX：03-3863-2877</li>
                <li>MAIL：info@suirikyo.or.jp</li>                
            </ul>
        </div>
        <div class="rightSideItem">
            <nav>
                <ul>
                    <li><a href="<?php echo get_site_url(); ?>/mypage/">トップページ</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/quiz/">マイページ</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/result/">テスト実施</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/registration/">テスト結果履歴</a> </li>
                    <li><a href="<?php echo get_site_url(); ?>/logout/">ログアウト</a></li>
                </ul>
            </nav>
        </div>
    </div>
</footer>
<script src="<?php echo $theme_path;?>/js/index.js"></script>
</body>
</html>
