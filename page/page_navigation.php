<?php

/**
 * Common class for shared functions
 * @author Shashikant Jagtap
 */
require_once 'mink/autoload.php';

use Behat\Mink\Mink,
    Behat\Mink\PHPUnit\TestCase;
require_once 'core/core_PHPUnitMink_CommonElementFunctions.php';

  class page_navigation extends TestCase
{
        
     function gotoTalk() 
    {
     $this->getSession('sahi')->visit('http://en.wikipedia.org/wiki/Main_Page');
     $this->getMink()->getSession('sahi')->getDriver()->click(".//*[@id='ca-talk']/span/a");
     $this->getMink()->getSession('sahi')->wait("10000");  
  
    }

    function gotoViewSource() 
    {
     $this->getSession('sahi')->visit('http://en.wikipedia.org/wiki/Main_Page');
    $this->getMink()->getSession('sahi')->getDriver()->click(".//*[@id='ca-history']/span/a");
     $this->getMink()->getSession('sahi')->wait("10000");  
    }    
}

?>
