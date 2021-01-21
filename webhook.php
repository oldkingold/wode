<?php

$cmd = "cd /var/www/edu && pwd";

echo shell_exec('php -v') ."<br>";  //用来测试exec命令是否有权限执行
echo shell_exec('whoami') ."<br>";  //用来查看当前执行者得用户名称

var_dump(shell_exec($cmd)); //返回成功还是null123
//tag 123