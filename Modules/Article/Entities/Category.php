<?php

namespace Modules\Article\Entities;

use Illuminate\Database\Eloquent\Model;
use Houdunwang\Arr\Arr;

class Category extends Model
{
    protected $fillable = ['name', 'pid'];

    public function getAll($category = null)
    {
        $data = $this->get()->toArray();
        $arr = new Arr();
        if (!is_null($category)) {
            foreach ($data as $k => $v) {
                $data[$k]['_selected'] = $category['pid'] == $v['id'];
                $data[$k]['_disabled'] = $category['id'] == $v['id'] || $arr->isChild($data, $v['id'], $category['id'], 'id', 'pid');
            }
        }


        $data = $arr->tree($data, 'name', 'id', 'pid');
        return $data;
    }

    /**
     * 判断是否有子栏目
     */
    public function hasChildCategory()
    {
        $data = $this->get()->toArray();
        $arr = new Arr();
        return $arr->hasChild($data, $this->id, 'pid');
    }
}
