<?php defined('BASEPATH') OR exit('No direct script access allowed.');

// Instead of copying manually or through script in this directory,
// let us just load here the provided by Composer file.
if (is_file(VENDORPATH.'ivantcholakov/codeigniter-phpmailer/helpers/MY_email_helper.php')) {
    require_once VENDORPATH.'ivantcholakov/codeigniter-phpmailer/helpers/MY_email_helper.php';
}