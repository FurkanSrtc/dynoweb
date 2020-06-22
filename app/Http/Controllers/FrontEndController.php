<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Page;
use App\Component;
use App\PageComponent;

class FrontEndController extends Controller
{
    public function page(Page $page)
    {
        $navbar = array("5","6","7");
        $navbarItems = Page::NavbarItems($navbar)->get();
        $tables = Component::PageComponent($page->id)->get();
        $components = new Collection();
        foreach ($tables as $table)
        {
            $pageComponent = new PageComponent;
            $pageComponent->setTable($table->name);
            $components = $components->merge($pageComponent->Component($page->id)->get());
        }
        return view ('index', compact('page','components','navbarItems'));
    }

}
