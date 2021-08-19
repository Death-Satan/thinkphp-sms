<?php
/**
 * @author    : Death-Satan
 * @date      : 2021/8/19
 * @createTime: 15:09
 * @company   : Death撒旦
 * @link      https://www.cnblogs.com/death-satan
 */
return [
    'default'=>env('sms.default','aliyun'),
    'expire'=>env('sms.expire',300),//短信验证默认过期时间
    'drives'=>[
        'aliyun'=>[
            'type'=>'Aliyun',
            'accessKeyId'=>null,// 您的AccessKey ID,
            'accessKeySecret'=>null,//// 您的AccessKey Secret,
            'endpoint'=>null,//访问的域名
            'runtime'=>[
                'maxIdleConns'=>3,
                'connectTimeout'=>10000,
                'readTimeout'=>10000
            ]
        ]
    ]
];