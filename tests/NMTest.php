<?php
use PHPUnit\Framework\TestCase;

final class NMTest extends TestCase
{
    public function NumberIsGreater($int)
    {
        $this -> assertGreaterThanOrEqual(1, $int);
    }
    // public function NumberIsNotSmaller($int)
    // {
    //     $this -> ass
    // }

}