<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;

class RandomStringGenTest extends TestCase  {

  public function test_helper_function(){
    $ret = function_exists('random_string');
    $this->assertTrue($ret);
  }
  
}