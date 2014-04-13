<?php
/**
 * 
 * 
 * 
 * 
 */

namespace Cotya\CDT;


use Composer\Package\Version\VersionParser;

class Tracker {

    
    public function __construct()
    {
        
    }

    /**
     * @param $name
     * @param $version
     * @throws \UnexpectedValueException
     */
    public function track( $name, $version )
    {
        $versionParser = new VersionParser();
        var_dump($name, $version);
        var_dump( $versionParser->normalize($version) );
    }
    
} 