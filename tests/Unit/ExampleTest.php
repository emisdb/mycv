<?php

namespace Tests\Unit;

use App\Components\DateFormat;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    /**
     * A basic test date format converter value 20.
     *
     * @return void
     */
    public function test_date_format_converter_20()
    {
        $stamp =20;
        $df = new DateFormat($stamp);
        $ret = [
            'type' => 'datestamp',
            'value' => $stamp,
            'date' => $df->getMonthShort() . " " . $df->getYear(),
            'month' => $df->getMonth(),
            'year' => $df->getYear()
        ];
        $this->assertStringContainsString('Aug 1991',$ret['date']);
    }

    /**
     * A basic test date format converter value 0.
     *
     * @return void
     */
    public function test_date_format_converter_0()
    {
        $stamp =0;
        $df = new DateFormat($stamp);
        $ret = [
            'type' => 'datestamp',
            'value' => $stamp,
            'date' => $df->getMonthShort() . " " . $df->getYear(),
            'month' => $df->getMonth(),
            'year' => $df->getYear()
        ];
        $this->assertStringContainsString('Dec 1989',$ret['date']);
    }

}
