
<?php
require_once 'core/core_PHPUnitMink_CommonElementFunctions.php';
require_once 'page/page_search.php';
require_once 'page/page_navigation.php';
require_once 'mink/autoload.php';

require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';

use Behat\Mink\Mink,
    Behat\Mink\PHPUnit\TestCase;
use Behat\Mink\Behat\Context\MinkContext;

class navigationTest extends core_PHPUnitMink_CommonElementFunctions

{
    protected static $mink;
    
    public function testTopNavigationWithPageObjects()
    {
        //static::$mink->swichToDriver('selenium');
        
        $this->getSession('sahi')
              ->visit('http://en.wikipedia.org/wiki/Main_Page');
        
        $nav = new page_navigation($this);
        $nav->gotoTalk();
        
        assertEquals("http://en.wikipedia.org/wiki/Talk:Main_Page", $this->getSession('sahi')->getCurrentUrl());
    }
    
    
     
}

?>

