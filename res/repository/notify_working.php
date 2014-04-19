<?php

require_once __DIR__ . '/../../vendor/autoload.php';

//file_put_contents( __DIR__.'/dump.log', file_get_contents('php://input') );
$downloads = json_decode( file_get_contents('php://input'), true )["downloads"] ;
$tracker = new \Cotya\CDT\Tracker();

if( is_array($downloads) ){
    foreach( $downloads as $download )
    {
        try{
            $tracker->track( $download["name"], $download["version"]);
        }catch(Exception $e){
            echo $download["version"] . ' is not valid'.PHP_EOL;
        }
    }
}

