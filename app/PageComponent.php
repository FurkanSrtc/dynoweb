<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageComponent extends Model
{

    public function scopeComponent($query, $page_id)
    {
        return $query->where('page_id','=',$page_id);
    }
}
