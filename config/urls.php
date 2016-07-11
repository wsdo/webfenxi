<?php
/**
 * @Author: wshudong
 * @Date:   2016-05-22 12:59:12
 * @Last Modified by:   wshudong
 * @Last Modified time: 2016-07-01 18:53:04
 */
return[
		[
	        'class' => 'yii\rest\UrlRule',
	        'controller' => [
	        	'user',
	        	'default',
	            // 'support-version',
	            'v1/site',
	            'v1/stark',
	            'v1/index',
        	]
    	],
    	    //获取用户的基本信息
    // [
    //     'class' => 'yii\rest\UrlRule',
    //     'controller' => [
    //         'v1/user'
    //     ],
    //     'tokens' => [
    //         '{user_id}' => '<user_id:\d+>'
    //     ],
    //     'extraPatterns' => [
    //         'GET userinfo/{user_id}' => 'userinfo'
    //     ]
    // ],

	
	];