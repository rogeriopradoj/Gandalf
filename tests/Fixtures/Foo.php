<?php

use Gandalf\Entity\Caller;

class Foo 
{
	use Caller;

    public $realField = 'bolseiro!';

    public function realMethod()
    {
        return 'really!!';
    }
}
