<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\ComponentScope;

class Component extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ComponentScope);
    }

    public function scopePageComponent($query, $page_id)
    {
        return $query->where('page_id','=',$page_id);
    }
}
