<?php
/**
 * Register field groups
 * The register_field_group function accepts 1 array which holds the relevant data to register a field group
 * You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 * This code must run every time the functions.php file is read
 */
if(function_exists("register_field_group"))
{
register_field_group(array (
  'id' => '4fc200d494f8f',
  'title' => 'Pricing',
  'fields' => 
  array (
    0 => 
    array (
      'label' => 'Pricing subtitle',
      'name' => 'pricing',
      'type' => 'text',
      'instructions' => 'The subtitle that appears above the pricing section',
      'required' => '0',
      'default_value' => 'Our charges are all-inclusive, with no hidden extras',
      'formatting' => 'none',
      'key' => 'field_4fc1fed74d3ae',
      'order_no' => '0',
    ),
    1 => 
    array (
      'key' => 'field_4fb25835ae761',
      'label' => 'Offer',
      'name' => 'offer',
      'type' => 'repeater',
      'instructions' => 'A price point',
      'required' => '0',
      'sub_fields' => 
      array (
        0 => 
        array (
          'key' => 'field_4fb25835ae77c',
          'label' => 'Overview',
          'name' => 'overview',
          'type' => 'text',
          'default_value' => 'Brief description of the offer',
          'formatting' => 'html',
          'order_no' => '0',
        ),
        1 => 
        array (
          'key' => 'field_4fb25835ae7a3',
          'label' => 'Image',
          'name' => 'image',
          'type' => 'image',
          'save_format' => 'url',
          'preview_size' => 'thumbnail',
          'order_no' => '1',
        ),
        2 => 
        array (
          'key' => 'field_4fb25835ae78a',
          'label' => 'Price*',
          'name' => 'price',
          'type' => 'text',
          'default_value' => 'Prices from X then Y pa',
          'formatting' => 'html',
          'order_no' => '2',
        ),
        3 => 
        array (
          'key' => 'field_4fb25835ae795',
          'label' => 'Details',
          'name' => 'details',
          'type' => 'wysiwyg',
          'toolbar' => 'basic',
          'media_upload' => 'no',
          'order_no' => '3',
        ),
      ),
      'row_limit' => '',
      'layout' => 'row',
      'button_label' => '+ Add Price Point',
      'order_no' => '1',
    ),
  ),
  'location' => 
  array (
    'rules' => 
    array (
      0 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_org',
        'order_no' => '0',
      ),
      1 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_council',
        'order_no' => '1',
      ),
    ),
    'allorany' => 'any',
  ),
  'options' => 
  array (
    'position' => 'normal',
    'layout' => 'default',
    'show_on_page' => 
    array (
      0 => 'custom_fields',
      2 => 'slug',
    ),
  ),
  'menu_order' => 3,
));
}
?>