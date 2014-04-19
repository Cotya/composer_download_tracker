<?php
/**
 * 
 * 
 * 
 * 
 */

namespace Cotya\CDT;


use Composer\Package\Version\VersionParser;
use Cotya\CDT\Model\Downloads;
use Cotya\CDT\Resource\Downloads\Pdo;

class Tracker {

    protected $downloads;
    
    public function __construct()
    {
        //$pdo = new \PDO("sqlite:downloads.db");
        $pdo = new \PDO("mysql:host=127.0.0.1;dbname=composer_tracker", "root");
        $this->downloads = new Downloads( new Pdo($pdo) );
    }

    /**
     * @param $name
     * @param $version
     * @throws \UnexpectedValueException
     */
    public function track( $name, $version )
    {
        $this->downloads->add($name, $version, new \DateTime() );
    }
    
} 