<?php

require_once __DIR__ . '/../../vendor/autoload.php';

//file_put_contents( __DIR__.'/dump.log', file_get_contents('php://input') );
$downloads = json_decode( file_get_contents(__DIR__ . '/example.dump.json'), true )["downloads"] ;
var_dump($downloads);
$tracker = new \Cotya\CDT\Tracker();

$version = "1.2.0.0-patch3";
foreach( $downloads as $download )
{
    try{
        $tracker->track( $download["name"], $download["version"]);
    }catch(Exception $e){
        echo $version . ' is not valid'.PHP_EOL;
    }
}

