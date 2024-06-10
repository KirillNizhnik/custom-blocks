<?php


$title = get_field('title');
$image_1 = get_field('image_1');
$image_2 = get_field('image_2');
$image_3 = get_field('image_3');
$image_4 = get_field('image_4');
$image_5 = get_field('image_5');
$image_6 = get_field('image_6');
$image_7 = get_field('image_7');
$image_8 = get_field('image_8');
$water_img = get_field("water_image");


?>

<div class="resort-wrapper">
    <?php if ($title): ?>
    <h1 class="resort-title"><?= $title ?></h1>
    <?php endif; ?>
    <div class="resort-grid">
        <div class="resort-item grid-item-large grid-item-1 ">
            <img class="resort-item-img" src="<?= $image_1?>" alt="Bahamas">
            <div class="resort-overlay">
                <div class="resort-text"><?= get_field('title_1') ?></div>
                <?php $repeater = get_field('repeater_link_1');
                foreach ($repeater as $item){
                    ?>
                    <a href="<?= $item['link']['url'] ?>" class="resort-subtext"><?= $item['link']['title'] ?></a>
                <?php } ?>
            </div>
            <?php
            if($water_img) :
                ?>
                <div class="water-img-1">
                    <img src="<?= $water_img ?>" alt="" class="water_img-1">
                </div>
            <?php endif; ?>
        </div>
        <div class="resort-item grid-item-medium grid-item-2">
            <img class="resort-item-img" src="<?= $image_2?>" alt="Antigua">
            <div class="resort-overlay">
                <div class="resort-text"><?= get_field('title_2') ?></div>
                <?php $repeater = get_field('repeater_link_2');
                foreach ($repeater as $item){
                ?>
                <a href="<?= $item['link']['url'] ?>" class="resort-subtext"><?= $item['link']['title'] ?></a>
                <?php } ?>
            </div>
            <?php
            if($water_img) :
                ?>
                <div class="water-img-1">
                    <img src="<?= $water_img ?>" alt="" class="water_img-1">
                </div>
            <?php endif; ?>
        </div>
        <div class="resort-item grid-item-small grid-item-3">
            <img class="resort-item-img" src="<?= $image_3?>" alt="Barbados">
            <div class="resort-overlay">
                <div class="resort-text"><?= get_field('title_3') ?></div>
                <?php $repeater = get_field('repeater_link_3');
                foreach ($repeater as $item){
                    ?>
                    <a href="<?= $item['link']['url'] ?>" class="resort-subtext"><?= $item['link']['title'] ?></a>
                <?php } ?>
            </div>
            <?php
            if($water_img) :
                ?>
                <div class="water-img-1">
                    <img src="<?= $water_img ?>" alt="" class="water_img-1">
                </div>
            <?php endif; ?>
        </div>
        <div class="resort-item grid-item-medium grid-item-4">
            <img class="resort-item-img" src="<?= $image_4?>" alt="Curaçao">
            <div class="resort-overlay">
                <div class="resort-text"><?= get_field('title_4') ?></div>
                <?php $repeater = get_field('repeater_link_4');
                foreach ($repeater as $item){
                    ?>
                    <a href="<?= $item['link']['url'] ?>" class="resort-subtext"><?= $item['link']['title'] ?></a>
                <?php } ?>
            </div>
            <?php
            if($water_img) :
                ?>
                <div class="water-img-1">
                    <img src="<?= $water_img ?>" alt="" class="water_img-1">
                </div>
            <?php endif; ?>
        </div>
        <div class="resort-item grid-item-large grid-item-5">
            <img  class="resort-item-img" src="<?= $image_8?>" alt="Grenada">
            <div class="resort-overlay">
                <div class="resort-text"><?= get_field('title_8') ?></div>
                <?php $repeater = get_field('repeater_link_8');
                foreach ($repeater as $item){
                    ?>
                    <a href="<?= $item['link']['url'] ?>" class="resort-subtext"><?= $item['link']['title'] ?></a>
                <?php } ?>
            </div>
            <?php
            if($water_img) :
                ?>
                <div class="water-img-1">
                    <img src="<?= $water_img ?>" alt="" class="water_img-1">
                </div>
            <?php endif; ?>
        </div>
        <div class="resort-item grid-item-large grid-item-6">
            <img class="resort-item-img" src="<?= $image_5?>" alt="Grenada">
            <div class="resort-overlay">
                <div class="resort-text"><?= get_field('title_5') ?></div>
                <?php $repeater = get_field('repeater_link_5');
                foreach ($repeater as $item){
                    ?>
                    <a href="<?= $item['link']['url'] ?>" class="resort-subtext"><?= $item['link']['title'] ?></a>
                <?php } ?>
            </div>
            <?php
            if($water_img) :
                ?>
                <div class="water-img-1">
                    <img src="<?= $water_img ?>" alt="" class="water_img-1">
                </div>
            <?php endif; ?>
        </div>
        <div class="resort-item grid-item-large grid-item-7">
            <img class="resort-item-img" src="<?= $image_6?>" alt="Grenada">
            <div class="resort-overlay">
                <div class="resort-text"><?= get_field('title_6') ?></div>
                <?php $repeater = get_field('repeater_link_6');
                foreach ($repeater as $item){
                    ?>
                    <a href="<?= $item['link']['url'] ?>" class="resort-subtext"><?= $item['link']['title'] ?></a>
                <?php } ?>
            </div>
            <?php
            if($water_img) :
                ?>
                <div class="water-img-1">
                    <img src="<?= $water_img ?>" alt="" class="water_img-1">
                </div>
            <?php endif; ?>
        </div>
        <div class="resort-item grid-item-large grid-item-8">
            <img class="resort-item-img" src="<?= $image_7?>" alt="Grenada">
            <div class="resort-overlay">
                <div class="resort-text"><?= get_field('title_7') ?></div>
                <?php $repeater = get_field('repeater_link_7');
                foreach ($repeater as $item){
                    ?>
                    <a href="<?= $item['link']['url'] ?>" class="resort-subtext"><?= $item['link']['title'] ?></a>
                <?php } ?>
            </div>
            <?php
            if($water_img) :
                ?>
                <div class="water-img-1">
                    <img src="<?= $water_img ?>" alt="" class="water_img-1">
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<style>
    .resort-wrapper {
        width: 1440px !important;
        max-width: 1440px !important;
        margin: 0 auto;
        padding: 0 20px;
    }

    .resort-title {
        text-align: center;
        color: #333;
        margin: 20px 0;
    }

    .resort-grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(5, 1fr);
        grid-auto-rows: 100px;
        gap: 20px;
    }


    .grid-item-1{
        grid-column-start: 1;
        grid-column-end: 3;
        grid-row-start: 1;
        grid-row-end: 3;
    }

    .grid-item-2{
        grid-column-start: 3;
        grid-column-end: 7;
        grid-row-start: 1;
        grid-row-end: 2;
    }

    .grid-item-3{
        grid-column-start: 3;
        grid-column-end: 5;
        grid-row-start: 2;
        grid-row-end: 3;
    }

    .grid-item-4{
        grid-column-start: 5;
        grid-column-end: 7;
        grid-row-start: 2;
        grid-row-end: 4;
    }

    .grid-item-5{
        grid-column-start: 1;
        grid-column-end: 5;
        grid-row-start: 3;
        grid-row-end: 4;
    }
    .grid-item-6{
        grid-column-start: 1;
        grid-column-end: 3;
        grid-row-start:4;
        grid-row-end: 6;
    }

    .grid-item-7{
        grid-column-start: 3;
        grid-column-end: 7;
        grid-row-start:4;
        grid-row-end: 5;
    }

    .grid-item-8{
        grid-column-start: 3;
        grid-column-end: 7;
        grid-row-start:5;
        grid-row-end: 6;
    }

    .resort-item {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
    }

    .resort-item-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
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

    .water-img-1{
        z-index: 9;
        position: absolute;
        width: 200px;
        bottom: 20px;
        right: 20px;
    }

    .water-img-1{
        width: 100px;

    }


    @media (max-width: 1439px) {
        .resort-wrapper {
            width: 100% !important;
            max-width: 1440px !important;
            margin: 0 auto;
            padding: 0 20px;
        }
    }

    @media (max-width: 900px) {
        .grid-item-1{
            grid-column-start: 1;
            grid-column-end: 4;
            grid-row-start: 1;
            grid-row-end: 3;
        }

        .grid-item-2{
            grid-column-start: 4;
            grid-column-end: 7;
            grid-row-start: 1;
            grid-row-end: 2;
        }

        .grid-item-3{
            grid-column-start: 4;
            grid-column-end: 7;
            grid-row-start: 2;
            grid-row-end: 3;
        }

        .grid-item-4{
            grid-column-start: 4;
            grid-column-end: 7;
            grid-row-start: 4;
            grid-row-end: 6;
        }

        .grid-item-5{
            grid-column-start: 1;
            grid-column-end: 7;
            grid-row-start: 3;
            grid-row-end: 4;
        }
        .grid-item-6{
            grid-column-start: 1;
            grid-column-end: 4;
            grid-row-start:4;
            grid-row-end: 6;
        }

        .grid-item-7{
            grid-column-start: 1;
            grid-column-end: 7;
            grid-row-start:6;
            grid-row-end: 8;
        }

        .grid-item-8{
            grid-column-start: 1;
            grid-column-end: 7;
            grid-row-start:8;
            grid-row-end: 10;
        }

        @media (max-width: 675px) {
            .resort-grid {
                display: flex;
                gap: 20px;
                flex-direction: column;
            }

            .resort-item-img{
                min-height: 300px;
                max-height: 350px;
            }

            .water_img-1{

                width: 100px;
            }

        }
</style>
