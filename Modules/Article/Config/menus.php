<?php return array (
  'Article' => 
  array (
    'title' => '文章管理',
    'icon' => 'fa fa-navicon',
    'permission' => '权限标识',
    'menus' => 
    array (
      0 => 
      array (
        'title' => '栏目管理',
        'permission' => 'Modules\\Article\\Http\\Controllers\\CategoryController@index',
        'url' => '/article/category',
      ),
    ),
  ),
  'article' => 
  array (
    'title' => '文章管理',
    'icon' => 'fa fa-navicon',
    'permission' => '权限标识',
    'menus' => 
    array (
      0 => 
      array (
        'title' => '文章管理',
        'permission' => '',
        'url' => '/article/content',
      ),
    ),
  ),
);