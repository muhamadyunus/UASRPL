<?php

require_once '../diskon_stok.php';


class test_diskon extends  PHPUnit_Framework_TestCase
{
	public $dis;
	
	public function setUp(){
		$this->dis = new diskon_stok(10000);
	}
	//public function test_return_true()
	//{
	//	$result = true;
	//	$this->assertTrue($result);
	//}
	public function test_diskon(){
		$babeh = $this->dis->diskon();
		$this->assertTrue($babeh == 10000);
		
	}
}
?>