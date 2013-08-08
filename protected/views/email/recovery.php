<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body style='background-color: white'>
    <table width="800" style="margin:0 auto;padding:0px;color:#333333;font-family:Arial;font-size:12px;" cellspacing="0" cellpadding="0">
      <tr>
        <td style="padding-top:17px;padding-left:17px;"><img src="http://31.13.130.50/images/logo.jpg" /></td>
      </tr>
      <tr height="3">
        <td style="height:3px;"><img src="http://31.13.130.50/images/line.jpg" /></td>
      </tr>
      <tr>
        <td style="padding-top:17px;padding-left:17px;padding-right:17px;padding-bottom:50px;"><?php echo Yii::app()->request->baseUrl; ?>
          <h1>Восстановление пароля в <?php echo Yii::app()->name ?>!</h1>
          <p>Для восстановления пароля, пожалуйста, перейдите по ссылке:</p>
          <p><a href="<?php echo $activate_url; ?>">Восстановить пароль...</a></p>
          <p>Если ссылка не работает - скопируйте предложенную ниже ссылку в адресную строку вашего браузера:</p>
          <p><?php echo $activate_url; ?> </p>
        </td>
      </tr>
      <tr>
        <td style="color:#333333;background-color:#f1f1f1;padding-top:17px;padding-left:17px;padding-right:17px;padding-bottom:17px;color:#636363;font-size:11px;">
          127994, Москва <br/>
          ул. Садовая-Самотечная, д. 10/23, стр. 1 <br/>
          телефон: (495) 980-25-47 <br/>
          e-mail: <a href="#" style="color:#2279bb;">info@minregion.ru</a>
        </td>
      </tr>
    </table>
  </body>
</html>

