<?php
declare(trict_types=1);
require_once'loginpage.php';
use PHPunit\Framework\Testcase;
class lointest extends testcase
{
	protected $object;
	protected funstion setup():void
	{
		$this->object=new loinpage;
	}
	protected function tearDown():void
	{}
	public function testTestlogin1()
	{
		$username='ajith';
		$password='ajith';
		$this->assertEquals(1,$this->object->testlogin($username,$password));
	}
	public function testTestlogin2()
	{
		$username='ajith';
		$password='ajith';
		$this->assertEquals(1,$this->object->testlogin($username,$password));
	}
}
?>