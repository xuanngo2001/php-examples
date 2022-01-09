<?php

$month = 1;
$year = 2022;
$dayOfWeek = 'Mon';
$title = "Title";

$nowTime = mktime(0,0,0,$month,1,$year);

// Create the first week node.
$thisWeekTime = strtotime($dayOfWeek, $nowTime); // e.g. $dayOfWeek='Mon';
$nodeTitle = $title.' ['.date("D Y-m-d", $thisWeekTime).']';
$yyyy_mm_dd = date("Y-m-d", $thisWeekTime);

echo "$nodeTitle, $yyyy_mm_dd" ."\n";

// Create the remaining weekly nodes.
$nextWeekTime = $thisWeekTime;
for($i=0; $i<4; $i++){	// 4 because some months have 5 weeks.
    $nextWeekTime = strtotime("+1 week", $nextWeekTime);
    
    $monthOfNextWeekTime = date('n', $nextWeekTime);
    if ($monthOfNextWeekTime==$month)
    {
        $nodeTitle = $title.' ['.date("D Y-m-d", $nextWeekTime).']';
        $yyyy_mm_dd = date("Y-m-d", $nextWeekTime);
        echo "$nodeTitle, $yyyy_mm_dd" ."\n";
    }
}
        
?>