<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\BaseRepositoryInterface;

class BaseServiceProvider extends ServiceProvider
{
    
    public function register()
    {   
        $this->app->bind(
            BaseRepositoryInterface::class,
            BaseRepository::class
        );
    }
}
