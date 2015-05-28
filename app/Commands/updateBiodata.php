<?php namespace App\Commands;

use App\Commands\Command;
use App\Models\Mst\Biodata;
use Illuminate\Contracts\Bus\SelfHandling;

class updateBiodata extends Command implements SelfHandling {


	public $input_biodata;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct($input_biodata)
	{
		$this->input_biodata = $input_biodata;
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{
		//hapus token dari array
		unset($this->input_biodata['_token']);

		//update menggunakan array dari property input_biodata
		$b = Biodata::whereId($this->input_biodata['id'])
			->update($this->input_biodata);
 
 		return $b;
	}

}
