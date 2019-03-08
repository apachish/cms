<?php
/**
 * Created by PhpStorm.
 * User: shahriar
 * Date: 3/8/19
 * Time: 6:44 PM
 */

namespace Shahriar\Cms;


use Illuminate\Support\Facades\Facade;

class CmsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cms';
    }
}