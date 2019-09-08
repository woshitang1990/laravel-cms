<?php

/** .-------------------------------------------------------------------
 * |      Site: www.hdcms.com  www.houdunren.com
 * |      Date: 2018/7/2 上午12:54
 * |    Author: 向军大叔 <2300071698@qq.com>
 * '-------------------------------------------------------------------*/
/**
 * 后台菜单配置
 * 下面是属性说明：
 * title 菜单栏目
 * icon 图标参考 http://fontawesome.dashgame.com/
 * menus 子菜单
 * permission 权限标识，必须在permission.php配置文件中存在
 */
return [
    'Admin' => [
        "title"      => "系统管理",
        "icon"       => "fa fa-navicon",
        'permission' => '权限标识',
        "menus"      => [
            ["title" => "角色列表", "permission" => "Modules\Admin\Http\Controllers\RoleController@index", "url" => "/admin/role"],
            ["title" => "修改列表", "permission" => "Modules\Admin\Http\Controllers\RoleController@edit", "url" => "链接地址"],
            ["title" => "删除角色", "permission" => "Modules\Admin\Http\Controllers\RoleController@destroy", "url" => "http:://houdunren.com"],
            ["title" => "添加角色", "permission" => "Modules\Admin\Http\Controllers\RoleController@create", "url" => "/admin/role"],
            ["title" => "修改角色权限", "permission" => "Modules\Admin\Http\Controllers\RoleController@permission", "url" => "/admin/role"],
        ],
    ],
    'Article' => [
        "title"      => "文章管理",
        "icon"       => "fa fa-navicon",
        'permission' => '权限标识',
        "menus"      => [
            ['title' => '添加栏目', 'permission' => 'Modules\Admin\Http\Controllers\CategoryController@create',  "url" => "链接地址"],
            ['title' => '修改栏目', 'permission' => 'Modules\Admin\Http\Controllers\CategoryController@edit',  "url" => "链接地址"],
        ],
    ],
];
