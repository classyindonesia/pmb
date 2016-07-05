<?php namespace App\Jobs;

use App\Jobs\Job;
use App\Models\Mst\Pin;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class generatePinCommand extends Job implements SelfHandling, ShouldQueue {

	use InteractsWithQueue, SerializesModels;

	public function __construct(){
	 
	}

 
	public function handle(){		
			$p = new Pin;
			$p->pin = Pin::keygen();
			$p->save();
	}

}
