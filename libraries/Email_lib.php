<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Email_lib {

        public function some_method($arr = [])
        {   
            if(EMAIL_FLAG == 1){
                $CI =& get_instance();
                $CI->load->library('email');
                $config['PROTOCOL']         = PROTOCOL;
                $config['SMTP_HOST']        = SMTP_HOST;
                $config['SMTP_PORT']        = SMTP_PORT;
                $config['SMTP_TIMEOUT']     = SMTP_TIMEOUT;
                $config['SMTP_USER']        = SMTP_USER;
                $config['SMTP_PASS']        = SMTP_PASS;
                $config['charset']          = CHARSET;
                $config['newline']          = "\r\n";
                $config['wordwrap']         = TRUE;
                $config['MAILTYPE']         = MAILTYPE;
                $CI->email->initialize($config);
                $CI->email->from(FORM, FORM_NAME);
                $CI->email->to($arr['to']);
                $CI->email->cc(CC);
                $CI->email->subject($arr['subject']);
                $CI->email->message($arr['message']);
                
                if($CI->email->send()){
                    return 1;
                }else{
                    return 0;
                }

            }else{
                return 0;
            }
        }
    }
