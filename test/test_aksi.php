<?php

require_once '../adminweb/modul/mod_carabeli/aksi_carabeli.php';
 
class test_aksi extends  PHPUnit_Framework_TestCase
{
	
	function test_return_true()
	{
		$result = true;
		$this->assertTrue($result);
	}
}
?>