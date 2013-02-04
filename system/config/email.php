<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * SwiftMailer driver, used with the email helper.
 *
 * @see http://www.swiftmailer.org/wikidocs/v3/connections/nativemail
 * @see http://www.swiftmailer.org/wikidocs/v3/connections/sendmail
 * @see http://www.swiftmailer.org/wikidocs/v3/connections/smtp
 *
 * Valid drivers are: native, sendmail, smtp
 */
//$config['driver'] = 'native';
$config['driver'] = 'smtp';

/**
 * To use secure connections with SMTP, set "port" to 465 instead of 25.
 * To enable TLS, set "encryption" to "tls".
 *
 * Driver options:
 * @param   null    native: no options
 * @param   string  sendmail: executable path, with -bs or equivalent attached
 * @param   array   smtp: hostname, (username), (password), (port), (auth), (encryption)
 */
//$config['options'] = NULL;

$config['options']['hostname'] = 'smtp.gmail.com';
$config['options']['port'] = 465;
$config['options']['encryption'] = 'tls';
$config['options']['username'] = 'skytruthalerts@gmail.com';
$config['options']['password'] = 'b1jYxhIqk3hw';





