<?php

namespace Modules\Admin\Services;

use Illuminate\Support\Facades\DB;
use Modules\Admin\Entities\Module;
use phpDocumentor\Reflection\Types\Boolean;

class ModuleService
{
    public function updateCache(): bool
    {
        DB::table('modules')->truncate();
        $modules = \HDModule::getModulesLists();
        foreach ($modules as $module) {
            $data = [
                'title' => $module['title'],
                'name' => $module['name'],
                'is_default' => 0,
                'front_access' => $this->frontAccess($module)
            ];
            Module::create($data);
        }

        return true;
    }


    protected function frontAccess($module)
    {
        $class = 'Modules\\' . $module['name'] . '\Http\Controllers\HomeController';
        return class_exists($class) && method_exists($class, 'index');
    }
}
