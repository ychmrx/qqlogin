<?php

namespace Qqlogin\Qqlogin\Facades;

use Illuminate\Support\Facades\Facade;

class Qqlogin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'qqlogin';
    }

}