<?php
/**
 * 
 * 
 * 
 * 
 */

namespace Cotya\CDT\Resource\Downloads;


use Cotya\CDT\Resource\DownloadsInterface;

class Pdo implements DownloadsInterface{

    /**
     * @var \PDO
     */
    protected $pdo;
    
    protected $insertStatement;
    
    
    public function __construct( \PDO $pdo )
    {
        $this->pdo = $pdo;
        $this->insertStatement = $pdo->prepare(
            'Insert INTO `downloads` ( `packagename`, `version`, `date`, `counter` )
             value (:name, :version, :date, 1)
             ON DUPLICATE KEY UPDATE `counter`=`counter`+1'
        );
    }
    
    
    public function add( $name, $version, \DateTime $date )
    {
        $this->insertStatement->execute(
            array(
                 ':name' => $name,
                 ':version' => $version,
                 ':date' => $date->format("Y-m-d"),
            )
        );
    }   

} 