<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Corcel Database Connection Name
    |--------------------------------------------------------------------------
    |
    | By default, Corcel uses your default database connection, set on
    | `config/database.php` (`default` key). Usually you'd like to use a
    | custom database just for WordPress. First you must configure that
    | database connection in `config/database.php`, and then set here its
    | name, like 'corcel', for example. Then you can work with two or more
    | database, but this one is only for your WordPress tables.
    |
    */

    'connection' => 'wordpress',

    /*
    |--------------------------------------------------------------------------
    | Registered Custom Post Types
    |--------------------------------------------------------------------------
    |
    | WordPress allows you to create your own custom post types. Corcel
    | makes querying posts using a custom post type easier, but here you can
    | set a list of your custom post types, and Corcel will automatically
    | register all of them, making returning those custom classes, instead
    | of just Post objects.
    |
    */

    'post_types' => [
        'post' => App\Models\WP\Post::class,
        // 'page' => App\Models\WP\page::class,
        // 'attachment' => App\Models\WP\attachment::class,
        // 'revision' => App\Models\WP\revision::class,
        // 'nav_menu_item' => App\Models\WP\nav_menu_item::class,
        // 'custom_css' => App\Models\WP\custom_css::class,
        // 'customize_changeset' => App\Models\WP\customize_changeset::class,
        // '_pods_page' => App\Models\WP\_pods_page::class,
        // '_pods_template' => App\Models\WP\_pods_template::class,
        // 'wpdiscuz_form' => App\Models\WP\wpdiscuz_form::class,
        // 'scheduled-action' => App\Models\WP\scheduledAction::class,
        // 'product' => App\Models\WP\product::class,
        // 'product_variation' => App\Models\WP\product_variation::class,
        // 'shop_order' => App\Models\WP\shop_order::class,
        // 'shop_order_refund' => App\Models\WP\shop_order_refund::class,
        // 'shop_coupon' => App\Models\WP\shop_coupon::class,
        // 'shop_webhook' => App\Models\WP\shop_webhook::class,
        // 'avada_portfolio' => App\Models\WP\avada_portfolio::class,
        // 'avada_faq' => App\Models\WP\avada_faq::class,
        // 'mailmunch_page' => App\Models\WP\mailmunch_page::class,
        // 'mm_message' => App\Models\WP\mm_message::class,
        // 'bookable_person' => App\Models\WP\bookable_person::class,
        'bookable_resource' => App\Models\WP\BookableResource::class,
        'wc_booking' => App\Models\WP\Booking::class,
        // 'gravityview' => App\Models\WP\gravityview::class,
        // '_pods_pod' => App\Models\WP\_pods_pod::class,
        // '_pods_field' => App\Models\WP\_pods_field::class,
        // 'foster_kid' => App\Models\WP\foster_kid::class,
        'instructors' => App\Models\WP\instructor::class,
        // 'follow_up_email' => App\Models\WP\follow_up_email::class,
        // 'global_product_addon' => App\Models\WP\global_product_addon::class
    ],

    // array (
    //     'post' => 'post',
    //     'page' => 'page',
    //     'attachment' => 'attachment',
    //     'revision' => 'revision',
    //     'nav_menu_item' => 'nav_menu_item',
    //     'custom_css' => 'custom_css',
    //     'customize_changeset' => 'customize_changeset',
    //     '_pods_page' => '_pods_page',
    //     '_pods_template' => '_pods_template',
    //     'wpdiscuz_form' => 'wpdiscuz_form',
    //     'scheduled-action' => 'scheduled-action',
    //     'product' => 'product',
    //     'product_variation' => 'product_variation',
    //     'shop_order' => 'shop_order',
    //     'shop_order_refund' => 'shop_order_refund',
    //     'shop_coupon' => 'shop_coupon',
    //     'shop_webhook' => 'shop_webhook',
    //     'avada_portfolio' => 'avada_portfolio',
    //     'avada_faq' => 'avada_faq',
    //     'mailmunch_page' => 'mailmunch_page',
    //     'mm_message' => 'mm_message',
    //     'bookable_person' => 'bookable_person',
    //     'bookable_resource' => 'bookable_resource',
    //     'wc_booking' => 'wc_booking',
    //     'gravityview' => 'gravityview',
    //     '_pods_pod' => '_pods_pod',
    //     '_pods_field' => '_pods_field',
    //     'foster_kid' => 'foster_kid',
    //     'instructors' => 'instructors',
    //     'follow_up_email' => 'follow_up_email',
    //     'global_product_addon' => 'global_product_addon',
    // )

    /*
    |--------------------------------------------------------------------------
    | Registered Shortcodes
    |--------------------------------------------------------------------------
    |
    | With Corcel you can register as many shortcodes you want, but that's
    | usually made in runtime. Here it's the place to set all your custom
    | shortcodes to make Corcel registering all of them automatically. Just
    | create your own shortcode class implementing `Corcel\Shortcode` interface.
    |
    */

    'shortcodes' => [
//        'foo' => App\Shortcodes\FooShortcode::class,
    ],

];
