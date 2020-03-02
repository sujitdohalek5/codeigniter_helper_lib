<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Email function
defined('protocol')       OR define('protocol', 'smtp');
defined('smtp_host')      OR define('smtp_host', 'ssl://smtp.googlemail.com');
defined('smtp_port')      OR define('smtp_port', '465');
defined('smtp_timeout')   OR define('smtp_timeout', '30');
defined('smtp_user')      OR define('smtp_user', 'innovac.gagan@gmail.com');
defined('form')           OR define('form', 'innovac.gagan@gmail.com');
defined('cc')             OR define('cc', 'gaganbansode@gmail.com');
defined('form_name')      OR define('form_name', 'Innovac ');
defined('smtp_pass')      OR define('smtp_pass', 'gagan@123');
defined('mailtype')       OR define('mailtype', 'html');
defined('email_flag')     OR define('email_flag', 1);
// Email end
