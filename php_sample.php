<?php
/**
 * wechat php test
 */

define("TOKEN", "weixin123");

$wechatObj = new wechatCallbackapiTest();
$wechatObj->valid();

class wechatCallbackapiTest{

    public function valid(){
            echo "哈哈哈哈哈";
    }  
}

?>