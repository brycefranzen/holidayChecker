# Holiday Checker
Easily determine if a specified date is a U.S. Holiday.

## How to Use
Simply call the checkHoliday() function passing in the desired date to check.

## Examples
### Static Date

$holiday = checkHoliday('2015-11-26');<br>
echo $holiday;

<b>Results:</b><br>
Thanksgiving

### Check Today's Date
$holiday = checkHoliday(date('Y-m-d'));<br>
echo $holiday;
