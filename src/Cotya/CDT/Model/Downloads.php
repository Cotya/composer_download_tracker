<?php
/**
 * 
 * 
 * 
 * 
 */

namespace Cotya\CDT\Model;


use Composer\Package\Version\VersionParser;
use Cotya\CDT\Resource\DownloadsInterface;

class Downloads {

    /**
     * @var \Cotya\CDT\Resource\DownloadsInterface
     */
    protected $resource;
    
    
    public function __construct( DownloadsInterface $resource )
    {
        $this->resource = $resource;
    }
    
    
    public function add( $name, $version, \DateTime $date)
    {
        $versionParser = new VersionParser();
        $version = $versionParser->normalize($version);
        $this->resource->add( $name, $version, $date);
    }

} 