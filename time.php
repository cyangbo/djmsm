<?php
//设置默认时区是中国
date_default_timezone_set("Asia/Shanghai");
//返回现在时间过5秒后的unix时间戳
echo strtotime("+5 seconds");
echo "<br>";
//相当于将英文单词now直接等于现在的日期和时间，并把这个日期时间转化为unix时间戳。这个效果跟echo time();一样。
echo strtotime("now");
echo "<br>";

//相当于将现在的日期和时间加上了1秒，并把这个日期时间转化为unix时间戳。这个效果跟echo time()+1;一样。
echo strtotime("+1 seconds");
echo "<br>";
echo time()+1;
echo "<br>";

//相当于将现在的日期和时间加上了1天。
echo strtotime("+1 day");
echo "<br>";

//相当于将现在的日期和时间加上了1周。
echo strtotime("+1 week");
echo "<br>";

//相当于将现在的日期和时间加上了1周3天7小时5秒。
echo strtotime("+1 week 3 days 7 hours 5 seconds");

//设置默认时区是中国
date_default_timezone_set("Asia/Shanghai");
//返回2014-05-01 12:00:01的格林威治标准时间
echo gmdate('Y-m-d H:i:s', strtotime('2014-05-01 12:00:01')); 

echo '<br>';
echo gmdate('Y-m-d H:i:s', time()); 


?>