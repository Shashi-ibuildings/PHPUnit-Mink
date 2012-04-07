<?php

/**
 * Common class for shared functions
 * @author Shashikant Jagtap
 */

date_default_timezone_set('Europe/London');

require_once 'mink/autoload.php';

require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';

use Behat\Mink\Mink,
    Behat\Mink\PHPUnit\TestCase;
use Behat\Mink\Behat\Context\MinkContext;
use Behat\Mink\Session;
use Behat\Mink\Driver\GoutteDriver;
use Behat\Mink\Driver\SahiDriver;
use Behat\Mink\Driver\SeleniumDriver;
use Behat\Mink\Driver\Selenium2Driver;

  class core_PHPUnitMink_CommonElementFunctions extends TestCase
{
    /**
     *
     * @param type $session
     * 
     * 
     */
    public function minkSession($session)
    {
    switch ($session) {
    case 'goutte':
       $this->getSession('goutte');
        break;
    case 'selenium':
       $this->getSession('selenium');
        break;
    case 'webdriver':
       $this->getSession('webdriver');
        break;
    case 'sahi':
       $this->getSession('sahi');
        break;
    }
  }    
    /**
     *
     * @param type $element 
     * Implement Common elements functions here
     * 
     */
    
    public function clickAndWait($element)
    {
        
     $this->getMink()->getSession()->getDriver()->click($element);
     $this->getMink()->getSession()->wait("10000");  
    }
    
    /**
     * Visit Base Url Method 
     */
    
    public function visitBaseUrl()
    {
        
         $this->getSession()->visit('http://en.wikipedia.org/wiki/Main_Page');
    }
    
    
}

?>
