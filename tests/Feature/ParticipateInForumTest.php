<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ParticipateInForum extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_authenticated_user_many_participate_in_forum_thread()
    {
        $this->be($user = factory('App\User')->create());        

        $thread = factory('App\Thread')->create();

        $reply = factory('App\Reply')->create();

        $this->post('/threads/'.$thread->id.'/replies', $reply->toArray());

        // $this->get($thread->path())
        //     ->assertSee($reply->body);
    }
}
