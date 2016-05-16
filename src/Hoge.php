<?php

namespace Daijinload\Phptest;

class Hoge {

	function __construct() {
		print "In Hoge constructor\n";
	}

	public $var = 'hello world!!';

	public function say() {
		echo $this->var;
	}
}
