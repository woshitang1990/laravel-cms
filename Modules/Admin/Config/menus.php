<?php return array (
  'Admin' => 
  array (
    'title' => '系统管理',
    'icon' => 'fa fa-navicon',
    'permission' => '权限标识',
    'menus' => 
    array (
      0 => 
      array (
        'title' => '角色管理',
        'permission' => 'Modules\\Admin\\Http\\Controllers\\RoleController@index',
        'url' => '/admin/role',
      ),
      1 => 
      array (
        'title' => '模块管理',
        'permission' => 'Modules\\Admin\\Http\\Controllers\\RoleController@edit',
        'url' => '链接地址',
      ),
      2 => 
      array (
        'title' => '网站配置',
        'permission' => 'Modules\\Admin\\Http\\Controllers\\RoleController@destroy',
        'url' => 'http:://houdunren.com',
      ),
      3 => 
      array (
        'title' => '邮件通知设置',
        'permission' => 'Modules\\Admin\\Http\\Controllers\\RoleController@destroy',
        'url' => 'http:://houdunren.com',
      ),
    ),
  ),
  'Article' => 
  array (
    'title' => '微信管理',
    'icon' => 'fa fa-navicon',
    'permission' => '权限标识',
    'menus' => 
    array (
      0 => 
      array (
        'title' => '微信配置',
        'permission' => 'Modules\\Admin\\Http\\Controllers\\CategoryController@create',
        'url' => '链接地址',
      ),
    ),
  ),
  'admin' => 
  array (
    'title' => '模块管理',
    'icon' => 'fa fa-navicon',
    'permission' => '权限标识',
    'menus' => 
    array (
      0 => 
      array (
        'title' => '模块管理',
        'permission' => '',
        'url' => '/admin/module',
      ),
    ),
  ),
);