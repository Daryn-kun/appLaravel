<?php

namespace App;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Translatable;
    protected $guarded = [];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function getPriceForCount(){
        if (!is_null($this->pivot)){
            return $this->pivot->count*$this->price;
        }
        return $this->price;
    }
    public function setNewAttribute($value){
        $this->attributes['new'] = $value === 'on' ? : 0;
    }
    public function setHitAttribute($value){
        $this->attributes['hit'] = $value === 'on' ? : 0;
    }
    public function setRecAttribute($value){
        $this->attributes['rec'] = $value === 'on' ? : 0;
    }
    public function isHit(){
        return $this->hit === 1;
    }
    public function isNew(){
        return $this->new === 1;
    }
    public function isRec(){
        return $this->rec === 1;
    }
}
