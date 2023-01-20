<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
use Takuya\RandomString\RandomString;

class RandomStringTest extends  TestCase{
  
  public function test_generate_lower_random_string(){
    foreach ( range(1,20) as $size ) {
      $ret = RandomString::gen($size,RandomString::LOWER);
      $this->assertTrue(strlen($ret) == $size);
      $this->assertTrue(ctype_lower($ret));
    }
  }
  public function test_generate_upper_random_string(){
    foreach ( range(1,100) as $size ) {
      $ret = RandomString::gen($size,RandomString::UPPER);
      $this->assertTrue(strlen($ret) == $size);
      $this->assertTrue(ctype_upper($ret));
    }
  }
  public function test_generate_alpha_random_string(){
    foreach ( range(1,100) as $size ) {
      $ret = RandomString::gen($size,RandomString::ALPHA);
      $this->assertTrue(strlen($ret) == $size);
      $this->assertTrue(ctype_alpha($ret));
    }
  }
  public function test_generate_alpha_num_random_string(){
    foreach ( range(1,100) as $size ) {
      $ret = RandomString::gen($size,RandomString::ALPHA_NUM);
      $this->assertTrue(strlen($ret) == $size);
      $this->assertTrue(ctype_alnum($ret));
    }
  }
  public function test_generate_number_random_string(){
    foreach ( range(1,100) as $size ) {
      $ret = RandomString::gen($size,RandomString::NUMBER);
      $this->assertTrue(strlen($ret) == $size);
      $this->assertTrue(ctype_digit($ret));
    }
  }
  public function test_geneerate_number_symbol_random_string(){
    foreach ( range(1,100) as $size ) {
      $ret = RandomString::gen($size,RandomString::NUMBER|RandomString::SYMBOLS);
      $this->assertTrue(strlen($ret) == $size);
      $this->assertTrue(ctype_graph($ret));
    }
  }
  
}