<?php 

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Mst\Hit;

class HitsWebsiteCommand extends Job implements SelfHandling, ShouldQueue
{

    use InteractsWithQueue, SerializesModels;

    public $client_ip;
    public $token;
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($client_ip, $token)
    {
        $this->token = $token;
        $this->client_ip = $client_ip;
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
        $data_insert = [
            'ip'        => $this->client_ip,
            'tgl'        => date('Y-m-d'),
            'timevisit'    => time(),
            '_token'    => $this->token,
        ];

        Hit::create($data_insert);
    }
}
