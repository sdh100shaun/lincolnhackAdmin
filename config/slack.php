<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 01/04/2017
 * Time: 18:26
 */

return [
    
    /*
    |--------------------------------------------------------------------------
    | Slack settings
    |--------------------------------------------------------------------------
    |
    |
    |
    */
    
    
    'url' => env('SLACK_URL'),
    'token' => env('SLACK_TOKEN'),
    'webhook.admin' =>env('SLACK_WEBHOOK_ADMIN'),
    'webhook.user' =>env('SLACK_WEBHOOK_USER')
];
