<?php
use PHPUnit\Framework\TestCase;
require_once('src/getPrime.php');

class getPrimeTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){ }
  public function tearDown(){ }

  public function testConnectionIsValid()
  {
    // test to ensure that the object from an fsockopen is valid
    $obj = new getPrime();
    $number = 10;
	$result = $obj->GetPrimeNumbers($number);
	
    $this->assertTrue(count($result)>0);
	
	$number = 0;
	$result = $obj->GetPrimeNumbers($number);
	$this->assertEquals($result, false);
  }
}
?>
