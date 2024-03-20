<?php

function cb_register_taxes() {

    $args = [
        "label" => __( "Rooms", "cb-devtest2024" ),
        "labels" => [
            "name" => __( "Rooms", "cb-devtest2024" ),
            "singular_name" => __( "Room", "cb-devtest2024" ),
        ],
        "public" => true,
        "publicly_queryable" => false,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => false,
        "show_admin_column" => true,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "show_in_quick_edit" => true,
        "show_in_graphql" => false,
    ];
    register_taxonomy( "rooms", [ "case-studies" ], $args );

    $args = [
        "label" => __( "Counties", "cb-devtest2024" ),
        "labels" => [
            "name" => __( "Counties", "cb-devtest2024" ),
            "singular_name" => __( "County", "cb-devtest2024" ),
        ],
        "public" => true,
        "publicly_queryable" => false,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => false,
        "show_admin_column" => true,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "show_in_quick_edit" => true,
        "show_in_graphql" => false,
    ];
    register_taxonomy( "counties", [ "case-studies" ], $args );

    $args = [
        "label" => __( "Towns", "cb-devtest2024" ),
        "labels" => [
            "name" => __( "Towns", "cb-devtest2024" ),
            "singular_name" => __( "Town", "cb-devtest2024" ),
        ],
        "public" => true,
        "publicly_queryable" => false,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => false,
        "show_admin_column" => true,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "show_in_quick_edit" => true,
        "show_in_graphql" => false,
    ];
    register_taxonomy( "towns", [ "case-studies" ], $args );

}
add_action( 'init', 'cb_register_taxes' );

