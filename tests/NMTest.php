<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require "index.php";

final class NMTest extends TestCase
{

    //random test
    public function testIsGreaterOrEqual()
    {
        $this -> assertGreaterThanOrEqual(0, NM::random(0,9));
    }
    public function testIsLessThan(){
        $this-> assertLessThan(10, NM::random(0,9));
    }

    //life test
    public function testHasLifeAttribute(){
        $this->assertClassHasAttribute('life', NM::class);
    }
    public function testIsGreaterThan0(){
        $tester = new NM;
        $this-> assertGreaterThanOrEqual(0, $tester->life);
    }


}