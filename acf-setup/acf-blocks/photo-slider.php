<?php
$images = get_field('slider');
?>
<section class="custom-slider">

<div class="swiper swiper-slider">
    <div class="swiper-wrapper swiper-cst-wrapper">
        <?php foreach ($images as $image):?>
        <div class="swiper-slide photo-slide">
            <?php if ($image['link']): ?>
                <a href="<?= $image['link']['url'] ?>" class="link">
            <?php endif; ?>
                    <img src="<?php echo $image['images']?>" alt="slide" class="photo-slide-img">
            <?php if ($image['link']): ?>
                </a>
            <?php endif; ?>
        </div>
        <?php endforeach;?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div>
</section >

<style>

    .custom-slider .swiper-slide {
        overflow: hidden; /* Ensure the image doesn't overflow outside the slide */
    }

    .custom-slider .photo-slide-img {
        transition: transform 0.3s ease-in-out; /* Smooth transition for the hover effect */
    }

    .custom-slider .swiper-slide:hover .photo-slide-img {
        transform: scale(1.1); /* Scale the image to 110% on hover */
        cursor: pointer;
    }


    .swiper-slide {
        display: flex;
    }

    .custom-slider{
        margin: 30px 0 30px 0;
        width: 100% !important;
        max-width: 100% !important;

    }

    .swiper-slider{
        width: 100%;
        max-width: 100%;
    }

    .photo-slide-img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .photo-slide{
        position: relative;
    }

    .photo-slide-link{
        display: none;
    }



    .swiper{
        width: 100%;
    }

    .photo-slide-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .photo-slide:hover .photo-slide-overlay {
        opacity: 1;
    }
    .photo-slide-link {
        color: white;
        text-decoration: none;
        font-size: 20px;
        display: none;
    }
    .photo-slide:hover .photo-slide-link {
        display: block;
    }

    .swiper-slide.photo-slide {
        height: 350px;
    }

    @media (max-width: 1200px) {
        .swiper-slide.photo-slide {
            height: 250px;
        }
    }



    @media (max-width: 700px) {
        .swiper-slide.photo-slide {
            height: 250px;
    }




</style>