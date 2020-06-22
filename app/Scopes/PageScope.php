<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use \Staudenmeir\LaravelCte\Eloquent\QueriesExpressions;
use App\Language;

class PageScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {


        $defaultLanguage = Language::defaultLanguage()->first();

        $builder->withRecursiveExpression('page',DB::table('pages')
        ->select('pages.*','languages.code AS lang_code',DB::raw("CONCAT_WS('/',NULLIF(languages.`code`,'".$defaultLanguage->code."'),NULLIF(slug,'')) AS slug_all"))
        ->join('languages','languages.id','=','pages.language_id')
        ->whereNull('parent_id')
        ->where('languages.status','=',1)
        ->unionAll(
            DB::table('page')
                ->select('p.*','page.lang_code',DB::raw("CONCAT(page.slug_all, '/', p.slug)"))
                ->join('pages AS p', 'page.id', '=', 'p.parent_id')
        ))
        ->where('status','=',1);


    }
}
