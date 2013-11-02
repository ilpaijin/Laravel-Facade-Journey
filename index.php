<?php 

use Facades\Facade;
use Facades\Cache as Cache;
use Cache\CacheServiceProvider;
use Cache\RedisStore;

include_once './vendor/autoload.php';

$app = new App();
$provider = new CacheServiceProvider($app);

Facade::setFacadeApp($app);

Cache::put('some data', 'storage/test.txt');
Cache::get('storage/test.txt');

$provider->setDriver(new RedisStore());

Cache::put('some data', 'redis');
Cache::get('redis');