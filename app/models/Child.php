<?php

use Iverberk\Larasearch\Traits\MappableTrait;

class Child extends Eloquent {

    use MappableTrait;

    /**
     * @return \Illuminate\Database\Eloquent\Relations
     */
    public function mother()
    {
        return $this->belongsTo('Wife');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations
     */
    public function father()
    {
        return $this->belongsTo('Husband');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations
     */
    public function toys()
    {
        return $this->belongsToMany('Toy');
    }

} 