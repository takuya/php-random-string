<?php

namespace Takuya\RandomString;

class RandomString {
  const NUMBER = 1;
  const UPPER = 8;
  const LOWER = 16;
  const ALPHA = 24;
  const ALPHA_NUM = 25;
  const SYMBOLS = 4;
  const ALPHA_NUM_SYMBOL = 29;
  
  public static function gen ( $size = 20, $flg = self::ALPHA_NUM ) {
    if ( $size < 1 ) {
      throw new \RuntimeException( 'invalid size' );
    }
    $chars = array_map( 'chr',
      array_merge(
        [], [],
        ( self::NUMBER == ( $flg & self::NUMBER ) ) ? range( 48, 57 ) : [],
        ( self::LOWER == ( $flg & self::LOWER ) ) ? range( 97, 122 ) : [],
        ( self::UPPER == ( $flg & self::UPPER ) ) ? range( 65, 90 ) : [],
        ( self::SYMBOLS == ( $flg & self::SYMBOLS ) ) ? array_merge(
          range( 33, 47 ),
          range( 91, 96 ),
          range( 123, 126 )
        ) : []
      
      ) );
    return implode( '', array_map( function( $i ) use ( $chars ) {
      return $chars[rand( 0, sizeof( $chars ) - 1 )];
    }, range( 0, $size - 1 ) ) );
  }
  
}