<?php

use \Illuminate\Support\Facades\Auth;

trait TraitOrganizaion
{

    public function __construct(array $attributes = array())
    {
        $this->attributes['organization_id'] = Auth::user()->organization_id;
        parent::__construct($attributes);
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('organizaion', function(Builder $builder) {
            $builder->whereIn('organizaion_id', [0, Auth::user()->organization_id]);
        });
    }

}
