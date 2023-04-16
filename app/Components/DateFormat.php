<?php

namespace App\Components;

class DateFormat
{
    protected $month;
    protected $year;

    public function __construct($month = 0, $year = 0)
    {
        if ($year == 0) $year = 1990;
        $this->year = $year;
        if ($month > 12) $this->convertMonth($month);
        elseif ($month == 0) {
            $this->year--;
            $this->month = 12;
        } else $this->month = $month;
    }

    public function setMonth(int $month)
    {
        if ($month == 0) {
            $this->year--;
            $this->month = 12;
        }
        if ($month > 12) $this->convertMonth($month);

    }

    public function addMonth($month)
    {
        $datestamp = ($this->year - 1990) * 12 + $this->month + $month;
        $this->year = floor($datestamp / 12);
        $this->month = $datestamp % 12;

    }

    public function setYear(int $year)
    {
        $this->year = $year;
    }

    protected function convertMonth($month)
    {
        $this->year += floor($month / 12);
        if ($month = $month % 12) $this->month = $month;
        else {
            $this->month = 12;
            $this->year--;
        }
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getMonthShort(): string
    {
        return self::MonthShort($this->month);
    }

    protected static function MonthShort($month)
    {
        return date('M', mktime(0, 0, 0, $month));

    }

    public function getDateStamp()
    {
        return (int)($this->year - 1990) * 12 + $this->month;
    }

    protected static function calculateDate($month)
    {
        $year = floor($month / 12);
        if ($month == 12) {
            $year--;
        } else {
            $month = $month % 12;
        };
        return ['month' => $month, 'year' => $year];

    }

    public static function getLength($month)
    {
        $monyear = self::calculateDate($month);
        return "" . ($monyear['year']>0 ?  $monyear['year']  . " . " : "" ) . ($monyear['month']>0 ? $monyear['month'] . " " : "");
    }

    public static function getDate($month)
    {
        $monyear = self::calculateDate($month);
        return self::MonthShort($monyear['month']) . " " . ($monyear['year'] + 1990);

    }
}
