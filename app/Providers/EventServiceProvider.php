<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Tovars;
use App\Subscribe;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
		Tovars::created(function ($t){
			$all = Subscribe::where('status', '-')->get();
			foreach($all as $one){
				$arr = unserialize($one->body);
				foreach($arr as $two){
					if($two==$t->catalogs_id){
						mail($one->email, 'Тема', 'Сообщение');
					}
				}
			}
		});
        //
    }
	
	
}
