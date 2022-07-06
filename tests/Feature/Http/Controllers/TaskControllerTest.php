<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Pupil;
use App\Models\Task;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @return void
     * @test
     * @author Sebastian Faber <sebastian@startup-werk.de>
     */
    public function itShouldCreateATask()
    {
        $user = User::factory()->for(Teacher::factory(), 'usable')->create();
        $this->be($user);
        $res = $this->post('api/tasks', ['title' => '__test_title__', 'description' => '__test_description__']);
        dump($res);
    }

    /**
     * @return void
     * @test
     * @author Sebastian Faber <sebastian@startup-werk.de>
     */
    public function itShouldShowAllTasks()
    {
        Task::factory(10)->for(User::factory()->for(Teacher::factory(), 'usable'), 'author')->create();
        $res = $this->get('api/tasks');
        dump($res);
        $this->be(Task::first()->author);
        $res = $this->get('api/tasks');
        dump($res);
    }

}
