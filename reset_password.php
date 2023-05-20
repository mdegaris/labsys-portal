<?php
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/login.css" />
</head>

<body>
  <main>
    <div class="main-container">
      <div class="form-container">
        <div class="title-container">
          <img class="title-logo" src="images/logo-brand.svg" />
          <div class="form-title">Cyprotex SSO</div>
        </div>
        <form class="login-form" method="post">
          <div class="field-container">
            <input class="input-field" type="text" name="username" placeholder="Username" />
            <input class="input-field" type="password" name="password" placeholder="Password" />
          </div>
          <div class="button-container">
            <button class="submit-button">LOGIN</button>
          </div>
          <input type="hidden" name="auth_login" />
        </form>
        <?php
        if ($LOGIN_ATTEMPT === true and $LOGIN_SUCCESS === false) {
        ?>
          <div class="feedback-container">Invalid username/password</div>
        <?php
        }
        ?>
      </div>
    </div>
  </main>
</body>

</html>