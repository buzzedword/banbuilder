<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload


use Snipe\BanBuilder\CensorWords;

$badwords = CensorWords::setDictionary(array('en-us', 'fr'));

print_r($badwords);

$string = CensorWords::censorString('abruti',$badwords, '*');
echo '
orginal: '.$string['orig'].'
clean: '.$string['clean'].'
';