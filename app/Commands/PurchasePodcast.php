<?php namespace App\Commands;

use App\Commands\Command;

use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldBeQueued;

use App\User;
use App\Page;
use App\Events\PodcastWasPurchased;

class PurchasePodcast extends Command implements SelfHandling, ShouldBeQueued {

	use InteractsWithQueue, SerializesModels;

    protected $user, $podcast;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
    public function __construct(User $user, Page $page)
    {
        $this->user = $user;
        $this->podcast = $page;
    }

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
    public function handle()
    {
        // Handle the logic to purchase the podcast...

        event(new PodcastWasPurchased($this->user, $this->podcast));
    }

}
