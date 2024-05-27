<?php
add_filter('block_categories', 'add_gutenberg_block_categories', 10, 2);
function add_gutenberg_block_categories($categories): array
{
    return array_merge([
        [
            'slug' => 'customs-blocks',
            'title' => 'MY CUSTOM BLOCKS',
            'icon' => 'universal-access',
        ]
    ],
        $categories
    );
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Setting site',
        'menu_title' => 'Setting site',
        'menu_slug' => 'site-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ]);
}


add_action('acf/init', function () {
    acf_register_block_type([
        'name' => 'text-img',
        'title' => 'Text and link banner',
        'description' => '',
        'render_template' => plugin_dir_path(__FILE__) . '/acf-blocks/text-and-link.php',
        'category' => 'customs-blocks',
        'icon' => 'format-gallery',
        'mode' => 'edit'
    ]);
    acf_register_block_type([
        'name' => 'gallery-block',
        'title' => 'Gallery block',
        'description' => '',
        'render_template' => plugin_dir_path(__FILE__) . '/acf-blocks/gallery.php',
        'category' => 'customs-blocks',
        'icon' => 'format-gallery',
        'mode' => 'edit',
        'enqueue_assets' => 'enqueue_gallery_block_assets',
    ]);
    acf_register_block_type([
        'name' => 'slider-gallery-block',
        'title' => 'Slider Gallery block',
        'description' => '',
        'render_template' => plugin_dir_path(__FILE__) . '/acf-blocks/photo-slider.php',
        'category' => 'customs-blocks',
        'icon' => 'format-gallery',
        'mode' => 'edit',
        'enqueue_assets' => 'enqueue_gallery_block_assets1',

    ]);
    function enqueue_gallery_block_assets(): void
    {
        wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
        wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, true);
        wp_enqueue_script('gallery-block-js', plugin_dir_url(__FILE__) . '/js/gallery-block.js', ['swiper-js'], null, true);
    }

    function enqueue_gallery_block_assets1(): void
    {wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
        wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, true);
        wp_enqueue_script('gallery-block-js', plugin_dir_url(__FILE__) . '/js/slider-block.js', ['swiper-js'], null, true);

    }

});

