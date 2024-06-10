<?php
$title = get_field("title");
?>

<div class="gallery-v3-wrapper">
    <?php if ($title): ?>
        <h1 class="resort-title"><?= $title ?></h1>
    <?php endif; ?>
    <div class="gallery-v3-grid">
        <?php
        $repeater = get_field('gallery_items');
        foreach ($repeater as $item){
        ?>
        <div class="gallery-v3-item">
            <img class="gallery-v3-item-img" src="<?= $item['image'] ?>" alt="">
            <div class="resort-overlay">
                <div class="resort-text"><?= $item['title'] ?></div>
                <?php $repeater = get_field('repeater_link_1');
                foreach ($item['links'] as $link) {
                    ?>
                    <a href="<?= $link['link']['url'] ?>" class="resort-subtext"><?= $link['link']['title'] ?></a>
                <?php } ?>
            </div>
            <?php
            if($item['water_images']) :
            ?>
            <div class="water-img">
                <img src="<?=  $item['water_images'] ?>" alt="" class="water_img">
            </div>
            <?php endif; ?>
        </div>
            <?php } ?>

    </div>
</div>

<style>
    .gallery-v3-wrapper{
        width: 1440px !important;
        max-width: 1440px !important;
        padding: 0 20px
    }
    .gallery-v3-grid{
        display:grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .gallery-v3-item-img{
        width: 100%;
        height: auto;
    }

    .gallery-v3-item{
        position:relative;
        border-radius: 10px;
        overflow: hidden;
    }
    .resort-overlay {
        z-index: 10;
        position: absolute;
        bottom: 0;
        color: #fff;
        width: 100%;
        text-align: left;
        padding: 20px;
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, rgba(0, 0, 0, 0.60) 100%);
    }

    .resort-text {
        font-size: 1.2em;
        font-weight: bold;
    }

    .resort-subtext {
        display: block;
        font-size: 0.9em;
        color: white;
    }

    .resort-subtext:hover {
        text-decoration: none;
        display: block;
        font-size: 0.9em;
        color: white;
    }

    .water-img{
        position: absolute;
        z-index: 9;
        right: 20px;
        bottom: 20px;
        width: 100px;
    }

    @media (max-width: 1439px) {
        .gallery-v3-wrapper {
            width: 100% !important;
            max-width: 1440px !important;
            margin: 20px auto;
            padding: 0 20px;
        }
    }

    @media (max-width: 700px) {
        .gallery-v3-grid{
            display:grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 10px;
        }
    }

</style>
