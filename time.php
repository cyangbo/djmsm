<?php
//����Ĭ��ʱ�����й�
date_default_timezone_set("Asia/Shanghai");
//��������ʱ���5����unixʱ���
echo strtotime("+5 seconds");
echo "<br>";
//�൱�ڽ�Ӣ�ĵ���nowֱ�ӵ������ڵ����ں�ʱ�䣬�����������ʱ��ת��Ϊunixʱ��������Ч����echo time();һ����
echo strtotime("now");
echo "<br>";

//�൱�ڽ����ڵ����ں�ʱ�������1�룬�����������ʱ��ת��Ϊunixʱ��������Ч����echo time()+1;һ����
echo strtotime("+1 seconds");
echo "<br>";
echo time()+1;
echo "<br>";

//�൱�ڽ����ڵ����ں�ʱ�������1�졣
echo strtotime("+1 day");
echo "<br>";

//�൱�ڽ����ڵ����ں�ʱ�������1�ܡ�
echo strtotime("+1 week");
echo "<br>";

//�൱�ڽ����ڵ����ں�ʱ�������1��3��7Сʱ5�롣
echo strtotime("+1 week 3 days 7 hours 5 seconds");

//����Ĭ��ʱ�����й�
date_default_timezone_set("Asia/Shanghai");
//����2014-05-01 12:00:01�ĸ������α�׼ʱ��
echo gmdate('Y-m-d H:i:s', strtotime('2014-05-01 12:00:01')); 

echo '<br>';
echo gmdate('Y-m-d H:i:s', time()); 


?>