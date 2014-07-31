<?php

use Iverberk\Larasearch\Traits\SearchableTrait;

class Husband extends Eloquent {

    use SearchableTrait;

    /**
     * @return \Illuminate\Database\Eloquent\Relations
     */
    public function wife()
    {
        return $this->hasOne('Wife');
    }

    /**
     * @follow NEVER
     *
     * @return \Illuminate\Database\Eloquent\Relations
     */
    public function children()
    {
        return $this->hasMany('Child', 'father_id');
    }

} 