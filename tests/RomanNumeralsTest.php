<?php


use PHPUnit\Framework\TestCase;
use App\RomanNumeral;

class RomanNumeralsTest extends TestCase
{

 /**
  * @test
  * @dataProvider checks
  */
 function it_converts_numbers_to_roman_integers($number,$expected)
 {
     $numeral = RomanNumeral::convert($number);

     $this->assertEquals($expected, $numeral);

 }

 function checks(){

     return [
         [1,"I"],
         [2,"II"],
         [3,"III"],
         [4,"IV"],
         [5,"V"],
         [6,"VI"],
         [7,"VII"],
         [8,"VIII"],
         [9,"IX"],
         [10,"X"],
         [11,"XI"],
         [12,"XII"],
         [13,"XIII"],
         [14,"XIV"],
         [15,"XV"],
         [16,"XVI"],
         [21,"XXI"],
         [25,"XXV"],
         [45,"XLV"],
         [50,"L"],
         [92,"XCII"],
         [100,"C"],
         [101,"CI"],
         [400,"CD"],
         [442,"CDXLII"],
         [501,"DI"],
         [573,"DLXXIII"],
         [900,"CM"],
         [1001,"MI"],
         [1331,"MCCCXXXI"],
         [1687,"MDCLXXXVII"],
         [3999,"MMMCMXCIX"]

     ];

 }









}
