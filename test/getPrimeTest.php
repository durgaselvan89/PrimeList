<?php
use PHPUnit\Framework\TestCase;
require_once('src/Model/PrimeModel.php');

class getPrimeTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){
  
  }
  public function tearDown(){ }

  public function testPrime()
  {
    // test to ensure that the object from an fsockopen is valid
    $number = 10;
	$obj = new primeModel($number);
    $result = $obj->generatePrime();
	
    $this->assertTrue(count($result)>0);
	
	/*$number = 0;
	$result = $obj->GetPrimeNumbers($number);
	$this->assertEquals($result, false);*/
  }
}
?>
