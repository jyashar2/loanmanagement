<?php

namespace App\Events;

use App\Models\LoanTransaction;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class RepaymentCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $loan_transaction;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(LoanTransaction $loan_transaction)
    {
        $this->loan_transaction=$loan_transaction;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
