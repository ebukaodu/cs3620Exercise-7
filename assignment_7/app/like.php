<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    //
    public function item() {
        return $this->belongsTo('App\Item', 'item_id');
    }
}
