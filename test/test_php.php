<?php

include '../adminweb/content.php';
 
class test_php extends  PHPUnit_Framework_TestCase
{
	
	function test_return_true()
	{
		$result = true;
		$this->assertTrue($result);
	}
}
?>