<?php

// VRChat API URL
$api_url = "https://api.vrchat.cloud/api/1/users/VRChat";

// 您的VRChat API密钥
$api_key = "填你的VRCAPI密钥";

// 初始化 cURL
$curl = curl_init();

// 设置cURL选项
curl_setopt($curl, CURLOPT_URL, $api_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "Authorization: Basic " . base64_encode($api_key . ":")
));

//  执行cURL请求
$response = curl_exec($curl);

// 结束 cURL
curl_close($curl);

// 对JSON响应进行解码
$user_data = json_decode($response, true);

// 显示用户的状态和注册时间
echo "User status: " . $user_data["status"] . "\n";
echo "Registration time: " . $user_data["registrationTime"] . "\n";

