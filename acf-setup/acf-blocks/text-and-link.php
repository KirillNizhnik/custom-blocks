<?php
$margin_top = get_field("margin_top");
$bottom = get_field("margin_bottom");
$bg_image = get_field("bg_image");
$title = get_field("title");
$subtitle = get_field("sub_title");
$link = get_field("link");
?>


<div style="
        <?php if ($bg_image):?>

        background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url(<?= $bg_image ?>) lightgray 50% / cover no-repeat;
        <?php endif; ?>
        max-width: 100%;
        width: 100%;
        " class="my-custom-blocks-section text-and-link">
    <?php if ($title): ?>
    <div class="text-and-link-inner">
    <h2 class="text-and-link-title">
        <?= $title ?>
    </h2>
    <?php endif; ?>
    <?php if ($subtitle): ?>
    <p class="text-and-link-subtitle">
        <?= $subtitle ?>
    </p>
    <?php endif; ?>

    <?php if ($link): ?>
    <a href="<?= $link['url'] ?>" class="text-and-link-link"><?= $link['title'] ?></a>
    <?php endif; ?>
    </div>
</div>

<style>
    .my-custom-blocks-section{
    max-width: 100%;
    margin: 0!important;
        width: 100%;
    }

    .text-and-link-inner{
        padding: 130px 0;
    }

    .text-and-link-title{
        color: #FFF;
        text-align: center;
        font-family: "Crimson Text", sans-serif;
        font-size: 34.8px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%; /* 41.76px */
    }

    .text-and-link-subtitle{
        color: #FFF;
        text-align: center;
        font-family: "Crimson Text", sans-serif;
        font-size: 24px;
        font-style: italic;
        font-weight: 400;
        line-height: 150%; /* 36px */
    }

    .text-and-link-link{
        display: flex;
        padding: 24px 32px;
        justify-content: center;
        align-items: flex-start;
        border-radius: 4px;
        background: #037B53;
        width: fit-content;
        margin: 0 auto;
        cursor:pointer;
        color: #FFF;
        text-align: center;
        font-family: "Crimson Text", sans-serif;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 24px;
        text-decoration: none;
    }
</style>


