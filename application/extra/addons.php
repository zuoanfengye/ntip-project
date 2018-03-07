<?php

return array (
  'autoload' => false,
  'hooks' => 
  array (
    'enable' => 
    array (
      0 => 'crontab',
      1 => 'database',
      2 => 'wechat',
    ),
    'disable' => 
    array (
      0 => 'crontab',
      1 => 'database',
      2 => 'wechat',
    ),
    'login_init' => 
    array (
      0 => 'loginbg',
    ),
    'upload_after' => 
    array (
      0 => 'thumb',
    ),
  ),
  'route' => 
  array (
  ),
);