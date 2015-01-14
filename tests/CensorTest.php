<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload


use Snipe\BanBuilder\CensorWords;

class CensorTest extends PHPUnit_Framework_TestCase {
 
  public function testSetDictionary()
  {
    $censor = new CensorWords;
    $this->assertNotEmpty($censor->setDictionary());
  }
  
  public function testFuckeryClean()
  {
    $censor = new CensorWords;
    $badwords = $censor->setDictionary();
    $string = $censor->censorString('fuck',$badwords, '*');
    $this->assertEquals('****', $string['clean']);
    
  }
  
  public function testFuckeryOrig()
  {
    $censor = new CensorWords;
    $badwords = $censor->setDictionary();
    $string = $censor->censorString('fuck',$badwords, '*');
    $this->assertEquals('fuck', $string['orig']);
    
  }
  
  public function testFuckeryCustomReplace()
  {
    $censor = new CensorWords;
    $badwords = $censor->setDictionary();
    $string = $censor->censorString('fuck',$badwords, 'X');
    $this->assertEquals('XXXX', $string['clean']);
    
  }

  	/**
	  * @expectedException PHPUnit_Framework_Error
	  */
  public function testInvalidDictionaryException()
  {
	$censor = new CensorWords;
    $this->assertNotEmpty($censor->setDictionary('poop'));	  
  }
  
  
 
}