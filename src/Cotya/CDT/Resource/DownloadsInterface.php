<?php
/**
 * 
 * 
 * 
 * 
 */

namespace Cotya\CDT\Resource;


interface DownloadsInterface {
    
    public function add( $name, $version, \DateTime $date );

} 