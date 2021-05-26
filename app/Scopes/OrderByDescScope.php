<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class OrderByDescScope implements Scope
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
      $builder->orderByDesc('updated_at')
         ->orderByDesc('created_at')
         ->orderByDesc('id');
   }
}