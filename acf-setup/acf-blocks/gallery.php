<?php
$gallery_block = get_field("gallery_block");
?>

<div style="" class=" custom-gallery swiper-container">
    <div class="custom-gallery-inner swiper-wrapper">
        <?php if ($gallery_block): ?>
            <?php foreach ($gallery_block as $item):
                $title = $item['title_img'];
                $subtitle = $item['subtitle_img'];
                $link = $item['link_img'];
                ?>
            <div class="swiper-slide">
                <div class="custom-gallery-slide">
                    <div href=<?= $link['url']?> class="custom-gallery-slide-column-1">
                        <img src="<?= $item['img_1'] ?>" href="" alt="" class="custom-gallery-img">

                    </div>
                    <div class="custom-gallery-slide-column-2">
                        <div class="custom-gallery-slide-column-2-inner">
                            <div class="custom-gallery-slide-column-2-inner-top-img-container">
                                <img src="<?= $item['img_2'] ?>" alt=""
                                     class="custom-gallery-slide-column-2-inner-top-img">
                                <?php if ($title || $subtitle): ?>
                                <a href="<?= $link['url'] ?>" class="custom-gallery-slide-hover-content">
                                    <div class="custom-gallery-slide-hover-content-title">
                                        <?= $title ?>
                                    </div>
                                    <p>
                                        <?= $subtitle ?>
                                    </p>
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                            <div class="custom-gallery-slide-column-2-inner-bottom-container">
                                <img src="<?= $item['img_3'] ?>" alt="" class="custom-gallery-slide-column-2-inner-bottom-img">
                                <img src="<?= $item['img_4'] ?>" alt="" class="custom-gallery-slide-column-2-inner-bottom-img">
                            </div>

                    </div>
                    <div class="custom-gallery-slide-column-3">
                        <img src="<?= $item['img_5'] ?>" href="" alt="" class="custom-gallery-img">
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="custom-gallery-btn-container">
        <button class="custom-gallery-btn custom-gallery-prev-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="19" viewBox="0 0 10 19" fill="none">
                <path d="M9 17.0154L1 9.01538L9 1.01538" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <button class="custom-gallery-btn custom-gallery-next-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="19" viewBox="0 0 10 19" fill="none">
                <path d="M1 1.01538L9 9.01538L1 17.0154" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>
</div>




<style>
    .custom-gallery {
        width: 100% !important;
        max-width: 1440px !important;
        margin: 20px auto;
        padding: 0 40px;
    }

    .custom-gallery-slide {
        width: 100%;
        max-width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        height: 700px;
        max-height: 700px;
        gap: 16px

    }

    .custom-gallery-img {

        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .custom-gallery-slide-column-2-inner{
        height: 55%;
        position: relative;
    }


    .custom-gallery-slide-column-2-inner-top-img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .custom-gallery-slide-column-2-inner-top-img-container{
        width: 100%;
        height: 100%;
    }
    .custom-gallery-slide-column-2-inner-bottom-container{
        display: grid;
        grid-template-columns: 1fr 1fr;
        height: 45%;
    }

    .custom-gallery-slide-column-2-inner-bottom-container{
        gap: 16px
    }

    .custom-gallery-slide-column-2 {
        display: flex;
        flex-direction: column;
        height: 100%;
        gap: 16px;
    }

    .custom-gallery-slide-column-2-inner-bottom-img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }


    .custom-gallery-slide-hover-content{
        width: 100%;
        position: absolute;
        left: 0;
        bottom: 0;
        padding: 20px;
        display: block;
        background: rgba(0, 0, 0, 0.50);
        box-sizing: border-box;
    }

    .custom-gallery-slide-hover-content div{
        color: #FFF;
        font-family: "Nunito Sans", sans-serif;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: 25.16px; /* 104.833% */
    }

    .custom-gallery-slide-hover-content p {
        color: #FFF;
        font-family: "Nunito Sans", sans-serif;
        font-size: 16px;
        font-style: normal;
        font-weight: 300;
        line-height: 25.16px;
    }
    .custom-gallery-slide-hover-content h3{
        margin: 0!important;
    }


    .custom-gallery-btn-container{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        margin: 20px auto;
    }

    .custom-gallery-btn{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        padding: 10px;
        border-radius: 90px;
        background: #037B53;
    }


    @media (max-width: 850px) {
        .custom-gallery-slide{
            display: flex;
            flex-direction: column;
            height: unset;
            max-height: unset;
        }

    }







</style>