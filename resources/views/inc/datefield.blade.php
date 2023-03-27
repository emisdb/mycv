<?php
if (!$selected_month) $selected_month = date('m'); //current month
$year_start = 1990;
$year_end = date('Y')-1990; // current Year
if (!$selected_year) $selected_year = $year_end;
else $selected_year -= 1990;

?>
<div class="form-group">
    <label for="{{$name}}-month">{{$label}}</label>
    <div style="display:flex;">
        <div>
    <select id='{{$name}}-month' name='{{$name}}-month' class="form-control">
        <?php
        for ($i_month = 1; $i_month <= 12; $i_month++) {
            $selected = $selected_month == $i_month ? ' selected' : '';
            echo '<option value="' . $i_month . '"' . $selected . '>(' . $i_month . ') ' . date('F', mktime(0, 0, 0, $i_month)) . '</option>' . "\n";
        }
        ?>
    </select>
        </div>
        <div style="margin-left:10px;">
        <select id='{{$name}}-year' name='{{$name}}-year' class="form-control">
        <?php
        for ($i_year = 0; $i_year <= $year_end; $i_year++) {
            $selected = $selected_year == $i_year ? ' selected' : '';
            echo '<option value="' . $i_year . '"' . $selected . '>' . ($year_start + $i_year) . '</option>' . "\n";
        }
        ?>
    </select>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#{{$name}}-month').on('change', function () {
        {{$name}}calculateNumber();
    });

    $('#{{$name}}-year').on('change', function () {
        {{$name}}calculateNumber();
    });

    function {{$name}}calculateNumber(){
        var month = parseInt($('#{{$name}}-month').val());
        var year = parseInt($('#{{$name}}-year').val());
       $('#{{$name}}').val((year*12+month));

        }
</script>
