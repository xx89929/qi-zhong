<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/18
 * Time: 15:28
 */


$urls = array(
    'http://www.qi-zhong.cn/',
    'http://www.qi-zhong.cn/aboutus/index',
);
$api = 'http://data.zz.baidu.com/urls?site=www.qi-zhong.cn&token=xCb88AwvCuQI4bXJ';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
