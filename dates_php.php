<?php

# Create DateTime object from string.
$start_date_str      = '2021-03-24';
$next_day_date_str   = '2021-03-25';
$start_dt = DateTime::createFromFormat('Y-m-d', $start_date_str);
$next_day_dt = DateTime::createFromFormat('Y-m-d', $next_day_date_str);

# Get different between 2 dates.
$days_diff = $next_day_dt->diff($start_dt)->days;

echo $days_diff;

print_r($start_dt);
print_r($next_day_dt);

# Convert DateTime to string.
$s = $start_dt->format('Y-m-d H:i:s');
echo $s . "\n";

# Set time to midnight for more accurate calculation between dates.
$start_dt->setTime(0,0);
$next_day_dt->setTime(0,0);

    # Get different between 2 dates.
    $days_diff = $next_day_dt->diff($start_dt)->days;

    echo $days_diff. "\n";

    print_r($start_dt);
    print_r($next_day_dt);


?>