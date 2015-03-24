<?php namespace App\Commands;

use App\Commands\Command;
use App\Models\Mst\Pin;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class generatePinCommand extends Command implements SelfHandling, ShouldBeQueued {

	use InteractsWithQueue, SerializesModels;

	public function __construct(){
	 
	}

 
	public function handle(){		
			$p = new Pin;
			$p->pin = Pin::keygen();
			$p->save();
	}

}
