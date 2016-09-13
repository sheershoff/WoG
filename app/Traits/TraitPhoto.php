<?php

use \Illuminate\Support\Facades\Auth;

trait TraitPhoto
{

    public function photo()
    {
        return strlower($this->className . '\\' . $this->id . '\photo');
    }

}
