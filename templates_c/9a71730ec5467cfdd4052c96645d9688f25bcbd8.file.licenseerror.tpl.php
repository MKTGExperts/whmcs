<?php /* Smarty version Smarty-3.1.21, created on 2016-04-06 05:33:53
         compiled from "/var/www/html/whmcs-live/admincp/templates/licenseerror.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106220125257049fc1b0a5c8-74722894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a71730ec5467cfdd4052c96645d9688f25bcbd8' => 
    array (
      0 => '/var/www/html/whmcs-live/admincp/templates/licenseerror.tpl',
      1 => 1459918867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106220125257049fc1b0a5c8-74722894',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'licenseError' => 0,
    'pageTitle' => 0,
    'BASE_PATH_CSS' => 0,
    'BASE_PATH_JS' => 0,
    'BASE_PATH_IMG' => 0,
    'infoMsg' => 0,
    'successMsg' => 0,
    'errorMsg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57049fc1b5ff90_17531965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57049fc1b5ff90_17531965')) {function content_57049fc1b5ff90_17531965($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php if ($_smarty_tpl->tpl_vars['licenseError']->value=="suspended") {?>
            <?php if (isset($_smarty_tpl->tpl_vars['pageTitle'])) {$_smarty_tpl->tpl_vars['pageTitle'] = clone $_smarty_tpl->tpl_vars['pageTitle'];
$_smarty_tpl->tpl_vars['pageTitle']->value = 'License Suspended'; $_smarty_tpl->tpl_vars['pageTitle']->nocache = null; $_smarty_tpl->tpl_vars['pageTitle']->scope = 0;
} else $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable('License Suspended', null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['licenseError']->value=="pending") {?>
            <?php if (isset($_smarty_tpl->tpl_vars['pageTitle'])) {$_smarty_tpl->tpl_vars['pageTitle'] = clone $_smarty_tpl->tpl_vars['pageTitle'];
$_smarty_tpl->tpl_vars['pageTitle']->value = 'License Key Pending'; $_smarty_tpl->tpl_vars['pageTitle']->nocache = null; $_smarty_tpl->tpl_vars['pageTitle']->scope = 0;
} else $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable('License Key Pending', null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['licenseError']->value=="invalid") {?>
            <?php if (isset($_smarty_tpl->tpl_vars['pageTitle'])) {$_smarty_tpl->tpl_vars['pageTitle'] = clone $_smarty_tpl->tpl_vars['pageTitle'];
$_smarty_tpl->tpl_vars['pageTitle']->value = 'Invalid License'; $_smarty_tpl->tpl_vars['pageTitle']->nocache = null; $_smarty_tpl->tpl_vars['pageTitle']->scope = 0;
} else $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable('Invalid License', null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['licenseError']->value=="expired") {?>
            <?php if (isset($_smarty_tpl->tpl_vars['pageTitle'])) {$_smarty_tpl->tpl_vars['pageTitle'] = clone $_smarty_tpl->tpl_vars['pageTitle'];
$_smarty_tpl->tpl_vars['pageTitle']->value = 'Expired License'; $_smarty_tpl->tpl_vars['pageTitle']->nocache = null; $_smarty_tpl->tpl_vars['pageTitle']->scope = 0;
} else $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable('Expired License', null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['licenseError']->value=="version") {?>
            <?php if (isset($_smarty_tpl->tpl_vars['pageTitle'])) {$_smarty_tpl->tpl_vars['pageTitle'] = clone $_smarty_tpl->tpl_vars['pageTitle'];
$_smarty_tpl->tpl_vars['pageTitle']->value = 'Renewal Required'; $_smarty_tpl->tpl_vars['pageTitle']->nocache = null; $_smarty_tpl->tpl_vars['pageTitle']->scope = 0;
} else $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable('Renewal Required', null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['licenseError']->value=="noconnection") {?>
            <?php if (isset($_smarty_tpl->tpl_vars['pageTitle'])) {$_smarty_tpl->tpl_vars['pageTitle'] = clone $_smarty_tpl->tpl_vars['pageTitle'];
$_smarty_tpl->tpl_vars['pageTitle']->value = 'Connection Error'; $_smarty_tpl->tpl_vars['pageTitle']->nocache = null; $_smarty_tpl->tpl_vars['pageTitle']->scope = 0;
} else $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable('Connection Error', null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['licenseError']->value=="change") {?>
            <?php if (isset($_smarty_tpl->tpl_vars['pageTitle'])) {$_smarty_tpl->tpl_vars['pageTitle'] = clone $_smarty_tpl->tpl_vars['pageTitle'];
$_smarty_tpl->tpl_vars['pageTitle']->value = 'Update License Key'; $_smarty_tpl->tpl_vars['pageTitle']->nocache = null; $_smarty_tpl->tpl_vars['pageTitle']->scope = 0;
} else $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_variable('Update License Key', null, 0);?>
        <?php }?>
        <title>WHMCS - <?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

        <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/bootstrap.min.css" rel="stylesheet">
        <link href="templates/login.css" rel="stylesheet">

        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/bootstrap.min.js"><?php echo '</script'; ?>
>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
      </head>
      <body>
        <div class="login-container">
            <h1 class="logo">
                <a href="login.php">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/whmcs.png" alt="WHMCS" />
                </a>
            </h1>
            <div class="login-body"<?php if ($_smarty_tpl->tpl_vars['licenseError']->value=="noconnection"||$_smarty_tpl->tpl_vars['licenseError']->value=="change") {?> style="border-bottom-left-radius: 4px; border-bottom-right-radius: 4px;"<?php }?>>
                <h2><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h2>
                <?php if ($_smarty_tpl->tpl_vars['infoMsg']->value) {?>
                    <div class="alert alert-info text-center" role="alert">
                        <?php echo $_smarty_tpl->tpl_vars['infoMsg']->value;?>

                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['successMsg']->value) {?>
                    <div class="alert alert-success text-center" role="alert">
                        <?php echo $_smarty_tpl->tpl_vars['successMsg']->value;?>

                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['errorMsg']->value) {?>
                    <div class="alert alert-danger text-center" role="alert">
                        <?php echo $_smarty_tpl->tpl_vars['errorMsg']->value;?>

                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['licenseError']->value=="suspended") {?>
                    <p>Your license key has been suspended.  Possible reasons for this include:</p>
                    <ul>
                        <li>Your license is overdue on payment</li>
                        <li>Your license has been suspended for being used on a banned
                            domain</li>
                        <li>Your license was found to be being used against the End User
                            License Agreement</li>
                    </ul>
                <?php } elseif ($_smarty_tpl->tpl_vars['licenseError']->value=="pending") {?>
                    <p>The WHMCS License Key you just tried to access is still pending. This error occurs when we have not yet received the payment for your license.</p>
                <?php } elseif ($_smarty_tpl->tpl_vars['licenseError']->value=="invalid") {?>
                    <p>Your license key is invalid. Possible reasons for this include:</p>
                    <ul>
                        <li>The license key has been entered incorrectly</li>
                        <li>The domain being used to access your install has changed</li>
                        <li>The IP address your install is located on has changed</li>
                        <li>The directory you are using has changed</li>
                    </ul>
                    <p>
                        If required, you can reissue your license on-demand from our client
                        area @ <a href="https://www.whmcs.com/members/clientarea.php"
                                  target="_blank">www.whmcs.com/members/clientarea.php</a> which will
                        update the allowed location details.
                    </p>
                <?php } elseif ($_smarty_tpl->tpl_vars['licenseError']->value=="expired") {?>
                    <p>Your license key has expired!  To resolve this you can:</p>
                    <ul>
                        <li>Check your email for a copy of the invoice or payment reminders</li>
                        <li>Order a new license from <a href="http://www.whmcs.com/order/"
                                                        target="_blank">www.whmcs.com/order</a></li>
                    </ul>
                    <p>
                        If you feel this message to be an error, please contact us @ <a
                                href="http://www.whmcs.com/get-support" target="_blank">www.whmcs.com/get-support</a>
                    </p>
                <?php } elseif ($_smarty_tpl->tpl_vars['licenseError']->value=="version") {?>
                    <p>
                        You are using an Owned License for which the support & updates
                        validity period expired before this release. Therefore in order to
                        use this version of WHMCS, you first need to renew your support &
                        updates access. You can do this from our client area @ <a
                                href="https://www.whmcs.com/members/clientarea.php" target="_blank">www.whmcs.com/members/clientarea.php</a>
                    </p>
                    <p>
                        If you feel this message to be an error, please contact us @ <a
                                href="http://www.whmcs.com/get-support" target="_blank">www.whmcs.com/get-support</a>
                    </p>
                <?php } elseif ($_smarty_tpl->tpl_vars['licenseError']->value=="noconnection") {?>
                    <p>WHMCS has not been able to verify your license for the last few days.</p>
                    <p>Before you can access your WHMCS Admin Area again, the license
                        needs to be validated successfully. Please check & ensure that you
                        don't have a firewall or DNS rule blocking outgoing connections to
                        our website.</p>
                    <p>
                        For further assistance, please visit <a
                                href="http://docs.whmcs.com/Licensing#Common_Errors"
                                target="_blank">http://docs.whmcs.com/Licensing</a>
                    </p>
                <?php } elseif ($_smarty_tpl->tpl_vars['licenseError']->value=="change") {?>
                    <p>You can change your license key by entering your admin login details
                        and new key below. Requires full admin access permissions.</p>
                    <form method="post"
                          action="?licenseerror=change&updatekey=true">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="newlicensekey" placeholder="New License Key">
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="submit" value="Change License Key" class="btn btn-primary btn-block">
                            </div>
                        </div>
                    </form>
                <?php }?>
            </div>
            <div class="footer">
                <?php if ($_smarty_tpl->tpl_vars['licenseError']->value!="noconnection"&&$_smarty_tpl->tpl_vars['licenseError']->value!="change") {?>
                    <a href="licenseerror.php?licenseerror=change">Click here to enter a new license key.</a>
                <?php }?>
            </div>
        </div>
        <div class="poweredby text-center">
            <a href="http://www.whmcs.com/" target="_blank">Powered by WHMCS</a>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript" src="templates/login.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }} ?>
