<?php

namespace GeniJaho\LaravelTestGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GeniJaho\LaravelTestGenerator\LaravelTestGenerator
 */
class LaravelTestGenerator extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \GeniJaho\LaravelTestGenerator\LaravelTestGenerator::class;
    }
}
