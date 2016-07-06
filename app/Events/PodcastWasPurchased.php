<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;

class PodcastWasPurchased extends Event {

	use SerializesModels;
    public $event; // for EmailPurchaseConfirmation to handle

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct($user, $podcast)
	{
        $this->event = array($user, $podcast);
	}

}
