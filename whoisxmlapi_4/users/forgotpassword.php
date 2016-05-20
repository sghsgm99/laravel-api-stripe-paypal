<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | PHP version 4                                                        |
// +----------------------------------------------------------------------+
// | Copyright (c) 1997-2002 The PHP Group                                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the PHP license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at                              |
// | http://www.php.net/license/2_02.txt.                                 |
// | If you did not receive a copy of the PHP license and are unable to   |
// | obtain it through the world-wide-web, please send a note to          |
// | license@php.net so we can mail you a copy immediately.               |
// +----------------------------------------------------------------------+
// | Authors: Byrne Reese <byrne at majordojo dot com                     |
// +----------------------------------------------------------------------+
//
// $Id: forgotpassword.php,v 1.2 2003/06/06 05:32:11 byrnereese Exp $

require_once("users.inc");
$PAGE_TITLE = "Forgotten Password";
include $PHP_USERS_HEADER_FILE; 

heading("Forgot Your Password?"); 
?>

<p>If you've forgotten your username or password, just enter the email address that you registered with, and your password will be emailed to you immediately.</p>

<form method="post" action="emailpassword.php">
  <b>Your Email Address:</b><br />
  <input type="text" name="email" />&nbsp;<input type=submit value="Submit" />
</form>

<?php
include $PHP_USERS_FOOTER_FILE; 
?>