<?php

namespace App\Scopes;

use Statamic\Query\Scopes\Scope;

class SubCategoryScope extends Scope
{
    /**
     * Apply the scope.
     *
     * @param \Statamic\Query\Builder $query
     * @param array $values
     * @return void
     */
    public function apply($query, $values)
    {
//        \Log::info('q', [$query->get()]);
        \Log::info('v', [$values]);
        // $query->where('featured', true);
    }
}
