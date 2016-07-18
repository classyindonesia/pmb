<?php

namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $table = 'mst_menu';

    protected $fillable = ['nama', 'is_internal', 'parent_id', 'link'];

    protected $appends = [
        'c__is_internal'
    ];
 

    public function getCIsInternalAttribute()
    {
        if(isset($this->attributes['is_internal'])){
            $attr = $this->attributes['is_internal'];
            if($attr == 0){
                return 'external';
            }else{
                return 'internal';
            }
        }
    }

    public function mst_menu_child()
    {
        return $this->hasMany(self::class, 'parent_id');
    }


    public function mst_menu_parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }    

}
