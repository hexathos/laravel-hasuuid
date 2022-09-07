<?php 
namespace Hexathos\Traits;

use Illuminate\Support\Str;

/**
 * Trait HasUuid
 * @package Hexathos\HasUuid
 */
trait HasUuid
{
    protected static function bootHasUuid()
    {
        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }

}
