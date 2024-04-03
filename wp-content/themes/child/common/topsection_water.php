<?php 
//'image' => "bg3.png", //for water wave use 'bg3.png' and water ripple use 'bg2.png';

//'sub_title' => null or "word" // if subtitle none, then keep it null

    ['title' => $title, 'sub_title' => $sub_title, 'image' => $image ] = $args;
    $theme_path = get_stylesheet_directory_uri();
    $photoPath =$theme_path."/assets/images/".$image;
?>

<section id="contentBody">
    <div class="topBackground" style="background-image: url('<?= $photoPath;?>')">
        <div class="title_box">
            <?php if ($sub_title != null): ?>
                <h1 class="title"><?= $title; ?></h1>
                <p class="sub_title"><?= $sub_title; ?></p>
            <?php else: ?>
                <h1 class="title"><?= $title; ?></h1>
            <?php endif; ?>
        </div>
    </div>
</section>

