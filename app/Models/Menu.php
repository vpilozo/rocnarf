<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public static function getMenu($id = '')
    {
        if ($id == '') {
            return self::whereNull('id_pertenece')->get();
        } else {
            return self::find($id);
        }
    }
    public function subMenus()
    {
        return $this->hasMany(Menu::class, 'id_pertenece');
    }
    public function allSubMenus()
    {
        return $this->subMenus()->with('allSubMenus');
    }
}
