<?php 

namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Hit extends Eloquent
{

    protected $fillable = ['ip', 'tgl', 'timevisit', '_token'];
    protected $table = 'mst_hits';


    public function countHitsToday($date)
    {
    	$q = $this->where('tgl', '=', $date)->count();
    	return $q;
    }

}
