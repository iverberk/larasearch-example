<?php

use Iverberk\Larasearch\Traits\MappableTrait;

class Wife extends Eloquent {

    use MappableTrait;

    /**
     * @return \Illuminate\Database\Eloquent\Relations
     */
    public function husband()
    {
        return $this->belongsTo('Husband');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations
     */
    public function children()
    {
        return $this->hasMany('Child', 'mother_id');
    }

}