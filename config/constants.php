<?php
    defined('BASEPATH')         OR exit('No direct script access allowed');

    // Email function
    defined('PROTOCOL')         OR define('PROTOCOL', 'smtp');
    defined('SMTP_HOST')        OR define('SMTP_HOST', 'ssl://smtp.googlemail.com');
    defined('SMTP_PORT')        OR define('SMTP_PORT', '465');
    defined('SMTP_TIMEOUT')     OR define('SMTP_TIMEOUT', '30');
    defined('SMTP_USER')        OR define('SMTP_USER', '');
    defined('FORM')             OR define('FORM', '');
    defined('CC')               OR define('CC', '');
    defined('FORM_NAME')        OR define('FORM_NAME', ' ');
    defined('SMTP_PASS')        OR define('SMTP_PASS', '');
    defined('CHARSET')          OR define('CHARSET', 'utf-8');
    defined('MAILTYPE')         OR define('MAILTYPE', 'html');
    defined('EMAIL_FLAG')       OR define('EMAIL_FLAG', 1);
    // Email end
