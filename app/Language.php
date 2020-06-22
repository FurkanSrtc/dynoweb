<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\LanguageScope;

class Language extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new LanguageScope);
    }

    public function scopeDefaultLanguage($query)
    {
        return $query->first();
    }
}
