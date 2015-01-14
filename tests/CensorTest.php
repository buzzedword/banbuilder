<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Snipe\BanBuilder\CensorWords;

echo CensorWords::censorString('fuck');
