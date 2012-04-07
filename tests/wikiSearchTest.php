
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

class wikiSearchTest extends core_PHPUnitMink_CommonElementFunctions

{
    protected static $mink;
     
  
    
    public function testwikiSearchsingle()
    {
        //static::$mink->swichToDriver('selenium');
        
        $this->getSession('sahi')
              ->visit('http://en.wikipedia.org/wiki/Main_Page');
        
        $search = new page_search($this);
        $search->search("mumbai");
        assertEquals("Mumbai", $this->getMink()->getSession('sahi')->getDriver()->getText(".//*[@id='firstHeading']/span"));
    }
    
    function searchData() {
        return array(
            array('london','London'),
            array('newyork','New York')
        );
    }
     /**
     *
     * @param <type> $searchfor
     * @param <type> $expectedResult
     * @dataProvider searchData
     */
    
     public function testwikiSearchMultiple($input,$output)
    {
     $this->getSession('sahi')
              ->visit('http://en.wikipedia.org/wiki/Main_Page');    
     $this->getSession('sahi')->getPage()->fillField("searchInput",$input); 
     $this->getMink()->getSession('sahi')->getDriver()->click("//*[@id='searchButton']");
     $this->getMink()->getSession('sahi')->wait("3000");
     assertEquals($output, $this->getMink()->getSession('sahi')->getDriver()->getText(".//*[@id='firstHeading']/span"));
    }
     
}

?>

