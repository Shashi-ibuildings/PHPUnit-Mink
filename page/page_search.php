<?php

/**
 * Common class for shared functions
 * @author Shashikant Jagtap
 */
require_once 'mink/autoload.php';

use Behat\Mink\Mink,
    Behat\Mink\PHPUnit\TestCase;
require_once 'core/core_PHPUnitMink_CommonElementFunctions.php';

  class page_search extends TestCase
{
    
    function search($input) 
        {
        $this->getSession('sahi')->getPage()->fillField("searchInput",$input); 
        $this->getMink()->getSession('sahi')->getDriver()->click("//*[@id='searchButton']");
        $this->getMink()->getSession('sahi')->wait("3000");
        }
}

?>
