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
  'id' => '4fb5195ee300d',
  'title' => 'Features',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_4fb3a617a41d0',
      'label' => 'Feature',
      'name' => 'feature',
      'type' => 'repeater',
      'instructions' => 'A feature',
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
          'key' => 'field_4fb3a617a41f5',
          'label' => 'Detail',
          'name' => 'detail',
          'type' => 'wysiwyg',
          'toolbar' => 'basic',
          'media_upload' => 'no',
          'order_no' => '1',
        ),
      ),
      'row_limit' => '',
      'layout' => 'row',
      'button_label' => '+ Add Feature',
      'order_no' => '0',
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
    ),
  ),
  'menu_order' => 0,
));
}
?>