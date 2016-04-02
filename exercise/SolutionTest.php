<?php
namespace App;

require_once "Solution.php";

use App\Solution\getAngle;

class TestSolution extends \PHPUnit_Framework_TestCase
{
    /**
    * @dataProvider additionProvider
    */
    public function testAngle($expected, $argument)
    {
        $this->assertEquals($expected, getAngle($argument));
    }

    public function additionProvider()
    {
        return [
            [0, '00:00'],
            [7.5, '15:15'],
            [66, '12:12'],
            [57.5, '11:05']
        ];
    }
}
