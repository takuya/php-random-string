<?php



if (!function_exists('random_string')){
  function random_string($size=20){
    return Takuya\RandomString\RandomString::gen($size);
  }
}
