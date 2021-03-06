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
  'id' => '4fbbbb7e62751',
  'title' => 'Features',
  'fields' => 
  array (
    0 => 
    array (
      'label' => 'Feature text',
      'name' => 'feature_text',
      'type' => 'text',
      'instructions' => 'The text that appears next to the heading \'features\' on the product page',
      'required' => '0',
      'default_value' => '',
      'formatting' => 'none',
      'key' => 'field_4fbbbb7798331',
      'order_no' => '0',
    ),
    1 => 
    array (
      'key' => 'field_4fb3a617a41d0',
      'label' => 'Features',
      'name' => 'features',
      'type' => 'repeater',
      'instructions' => 'A feature of the product',
      'required' => '0',
      'sub_fields' => 
      array (
        0 => 
        array (
          'key' => 'field_4fb3a617a41e7',
          'label' => 'Heading',
          'name' => 'heading',
          'type' => 'text',
          'default_value' => '',
          'formatting' => 'none',
          'order_no' => '0',
        ),
        1 => 
        array (
          'key' => 'field_4fb679dd7e76a',
          'label' => 'image',
          'name' => 'image',
          'type' => 'image',
          'save_format' => 'url',
          'preview_size' => 'thumbnail',
          'order_no' => '1',
        ),
        2 => 
        array (
          'key' => 'field_4fb3a617a41f5',
          'label' => 'Detail',
          'name' => 'detail',
          'type' => 'wysiwyg',
          'toolbar' => 'basic',
          'media_upload' => 'no',
          'order_no' => '2',
        )
      ),
      'row_limit' => '',
      'layout' => 'row',
      'button_label' => '+ Add Feature',
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
      )
    ),
    'allorany' => 'any',
  ),
  'options' => 
  array (
    'position' => 'normal',
    'layout' => 'default',
    'show_on_page' => 
    array (
		0 => 'slug',
		1 => 'custom_fields',
    ),
  ),
  'menu_order' => 1,
));
}
?>