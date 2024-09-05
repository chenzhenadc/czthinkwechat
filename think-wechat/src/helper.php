<?php
/**
 * @author Roy
 * @copyright 2024 Roy
 */

//加入Hook
\think\facade\Hook::add('app_init', \Czthinkwechat\ThinkWechat\Behavior\AppInit::class);