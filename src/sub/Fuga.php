<?php

namespace Daijinload\Phptest\sub;

class Fuga {

	function __construct() {
		print "In Fuga constructor\n";
	}

	public $var = 'Fuga hello world!!';

	public function say() {
		echo $this->var;
	}
}
