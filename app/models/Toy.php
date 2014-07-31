<?php

use Iverberk\Larasearch\Traits\MappableTrait;

class Toy extends Eloquent {

    use MappableTrait;

    /**
     * @return \Illuminate\Database\Eloquent\Relations
     */
    public function children()
    {
        return $this->belongsToMany('Child');
    }

} 