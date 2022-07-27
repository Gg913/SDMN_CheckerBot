<?php

/*
|--------------------------------------------------------------------------
| Bot Token
|--------------------------------------------------------------------------
|
| Change this to your Bot API Token
| It can be obtained from https://telegram.dog/BotFather
|
*/
$config['botToken'] = $_ENV['5411327597:AAGzho1riMKxumO8cY_4XSgbX5FrWIcZgKk'];

/*
|--------------------------------------------------------------------------
| Admin User ID
|--------------------------------------------------------------------------
|
| Change this to Admin's Numeric User ID
| ID can be obtained from https://telegram.dog/username_to_id_bot
|
*/
$config['adminID'] = $_ENV['1740075227,5306351983'];

/*
|--------------------------------------------------------------------------
| Logs Channel ID
|--------------------------------------------------------------------------
|
| Create a New Channel/Group for logging data
| ID can be obtained from https://telegram.dog/BotFather
|
*/
$config['logsID'] =  $_ENV['-1001783823529'];

/*
|--------------------------------------------------------------------------
| Timezone
|--------------------------------------------------------------------------
|
| Current timezone for Logging Activities with time
| It can be obtained from http://1min.in/content/international/time-zones
| By Default it's in IST
|
*/
$config['timeZone'] =  $_ENV['America/Toronto'];

/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
| Database to Store User Data
|
*/
$config['db']['hostname'] =  $_ENV['localhost'];
$config['db']['username'] =  $_ENV['id18764369_mdzchk'];
$config['db']['password'] =  $_ENV['grl}aN983cMcK/X~'];
$config['db']['database'] =  $_ENV['id18764369_chk'];

/*
|--------------------------------------------------------------------------
| Anti-Spam Timer
|--------------------------------------------------------------------------
|
| Anti-Spam Timer to prevent Spammers from Spamming the Checker
| Value is in Seconds. "20" = 20seconds
|
*/
$config['anti_spam_timer'] =  $_ENV['ANTISPAM_TIMER'];

/*
|--------------------------------------------------------------------------
| SK Keys
|--------------------------------------------------------------------------
|
| SK Keys for !sm checker gate
| Add a Live SK Key here. You can Also add Multiple SK Keys
| array('sk_live_QN9rgkuy0TddD49xFprKWmaU','sk_live_G2X5xB1Sd5dljP8rHsGURyjM','sk_live_RhR1lXYtXnp9kOMlXqADGzfu)
|
*/
$config['sk_keys'] =  explode(",", $_ENV['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']);
?>
