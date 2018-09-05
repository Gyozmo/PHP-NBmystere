<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require "index.php";

final class NMTest extends TestCase
{
    public function testisgreater()
    {
        $this -> assertGreaterThanOrEqual(1, NM::random());
    }
    

}