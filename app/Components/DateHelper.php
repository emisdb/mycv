<?php

namespace App\Components;

class DateHelper
{
    public function getMonth($name, $selected_month = 0)
    {
        $return = "<select id='{$name}' name='{$name}'>";
        $return .= "<option value=''>Select Month</option>";
        if (!$selected_month)
            $selected_month = date('m'); //current month
        for ($i_month = 1; $i_month <= 12; $i_month++) {
            $selected = $selected_month == $i_month ? ' selected' : '';
            $return .= '<option value="' . $i_month . '"' . $selected . '>(' . $i_month . ') ' . date('F', mktime(0, 0, 0, $i_month)) . '</option>' . "\n";
        }
        $return .= '</select>';
            return $return;
    }
    public function getYear($name, $selected_year = 0)
    {
        $return = "<select id='{$name}' name='{$name}'>";
        $return .= "<option value=''>Select Year</option>";
        $year_start  = 1990;
        $year_end = date('Y'); // current Year
        if(!$selected_year) $selected_year =$year_end;

    for ($i_year = $year_start; $i_year <= $year_end; $i_year++) {
        $selected = $selected_year == $i_year ? ' selected' : '';
        $return .= '<option value="'.$i_year.'"'.$selected.'>'.$i_year.'</option>'."\n";
    }
        $return .= '</select>';
        return $return;
    }

}
