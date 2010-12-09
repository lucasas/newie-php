<?php
	require_once 'PHPUnit/Framework.php';
	
	class Foo {	
	}
	
	class NewieTest extends PHPUnit_Framework_TestCase {
		public function shouldInstantiateWhenInvokingNew() {
	        $foo = new Foo();
	        $this->assertNotNull($foo);
	    }
	}

?>