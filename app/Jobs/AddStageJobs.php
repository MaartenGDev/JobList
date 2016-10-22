<?php

namespace App\Jobs;

use App\User;
use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddStageJobs implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    protected $city;
    protected $study;
    /**
     * @var User
     */
    private $user;

    /**
     * Create a new job instance.
     *
     * @param User $user
     * @param $city
     * @param $study
     */
    public function __construct(User $user, $city, $study)
    {
        $this->user = $user;
        $this->city = $city;
        $this->study = $study;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $client = resolve(Client::class);

        $response = $client->request('GET', getenv('JOB_API_URL') . "{$this->study}/{$this->city}");

        $companies = json_decode($response->getBody());

        foreach($companies as $company){
            $this->user->jobs()->create([
                'name' => trim($company->name),
                'url' => '',
                'description' => '',
                'city' => ucfirst(trim($company->city)),
                'address' => ucfirst(trim($company->address)),
                'postal' => ucfirst(trim($company->postal)),
                'tags' => '',
                'pros' => '',
                'cons' => ''
            ]);

        }
    }
}
