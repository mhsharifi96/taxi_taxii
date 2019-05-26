<?php

namespace App\Events;

use App\ActivationCode;
use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserActivation
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $activationCode;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user){

        print(ActivationCode::createCode($user)->code);
        $this->user=$user;
        $this->activationCode=ActivationCode::createCode($user)->code;
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
