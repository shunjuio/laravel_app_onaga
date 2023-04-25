<?php

namespace Tests\Feature;

use App\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\App;
use Tests\TestCase;
use Illuminate\Support\Facades\Bus;
use App\Jobs\Myjob;
use Illuminate\Support\Facades\Event;
use App\Events\PersonEvent;
use Illuminate\Support\Facades\Queue;
use App\Listeners\PersonEventListener;
use Illuminate\Events\CallQueuedListener;
use Mockery;
use App\MyClasses\PowerMyService;

class ExampleTest extends TestCase
{
//    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testBasicTest()
    {
        $msg = '*** OK ***';
        $mock = Mockery::mock(PowerMyService::class);
        $mock->shouldReceive('setId')
            ->withArgs([1])
            ->once()
            ->andReturn(null);

        $mock->shouldReceive('say')
            ->once()
            ->andReturn($msg);

        $this->instance(PowerMyService::class, $mock);

        $response = $this->get('/hello');
        $content = $response->getContent();
        $response->assertSeeText($msg, $content);
    }
}
