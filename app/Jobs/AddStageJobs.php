<?php

namespace App\Jobs;

use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class AddStageJobs implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    protected $city;
    protected $study;

    /**
     * Create a new job instance.
     *
     * @param $city
     * @param $study
     */
    public function __construct($city, $study)
    {

        $this->city = $city;
        $this->study = $study;
    }

    /**
     * Execute the job.
     *
     * @param Client $client
     */
    public function handle()
    {
        $client = resolve(Client::class);

        $query = http_build_query([
            't' =>'Applicatie+Ontwikkelaar',
            's' => '',
            'z' => 'opleiding',
            'l' => 'Nederland',
            'b' => 'False',
            'c' => '',
            'lw' => '',
            'n' => '',
            'pg' => '1',
            'v' => '',
            'srt' => 'relevantie',
            'InputTrefwoordenPlaceholderGeenTekst' => 'Voer een tekst in',
            'InputTrefwoordenPlaceholder' => 'Opleiding bedrijf crebo id',
            'p' => 'apeldoorn'
        ]);

        $response = $client->request('GET', getenv('JOB_API_URL') . '?' . $query);

       echo htmlspecialchars($response->getBody());
        die();
    }
}
