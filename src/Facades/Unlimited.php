<?php
namespace Dyn\Unlimited\Facades;
use Illuminate\Support\Facades\Facade;
class Unlimited extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'unlimited';
    }
}