<?php

namespace Cuitest;


class Something
{
	public $what;

	public function __construct($sth){
		$this->what = $sth;
	}

	public function getsth()
    {
		return 'I have test ' . $this->what;
    }

}