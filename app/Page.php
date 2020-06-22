<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\PageScope;

class Page extends Model
{
    protected $table = 'page';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new PageScope);
    }

    public function getRouteKeyName()
    {
        return 'slug_all';
    }

    public function scopeNavbarItems($query, $navbarItems, $language_id = 2)
    {
        return $query->select('parent_id', 'name', 'slug_all')->whereIn('id', $navbarItems)->where('language_id','=' ,2);
    }
}
