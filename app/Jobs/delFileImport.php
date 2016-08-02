<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class delFileImport extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    public $lokasi_file;

    public function __construct($lokasi_file)
    {
        $this->lokasi_file = $lokasi_file;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $path = storage_path('logs/'.$this->lokasi_file);
        if(file_exists($path)){
            unlink($path);
        }
        \Log::info('file import : '.$path.' telah terhapus!');
    }
}
