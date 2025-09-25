<?php
// English Language Translations

// Registration Verification Email Subject
$lang['reg_ver_subject'] = "Account Activation Code - {{site_name}}";

// Registration Verification Email Body
$lang['reg_ver_body'] = "
Hello {{fullname}},

You have requested an account on <strong>{{site_name}}</strong>.
Your activation code is:
<h2>{{activation_code}}</h2>
Click on the link below to activate your account
<a href='{{site_url}}activate.php?name={{fullname}}&email={{user_email}}&code={{activation_code}}'>Activate Account</a>

Regards,
{{mail_from_name}}
";