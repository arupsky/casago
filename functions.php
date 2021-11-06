<?php

function wpb_custom_new_menu()
{
  register_nav_menus(
    array(
      'header-menu-1' => __('Header Menu 1'),
      'header-menu-2' => __('Header Menu 2'),
      'header-menu-3' => __('Header Menu 3'),
      'header-menu-4' => __('Header Menu 4'),
      'header-menu-5' => __('Header Menu 5'),
      'footer-menu-1' => __('Footer Menu 1'),
      'footer-menu-2' => __('Footer Menu 2')
    )
  );
}
add_action('init', 'wpb_custom_new_menu');


function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
