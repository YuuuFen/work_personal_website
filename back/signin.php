<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign-in</title>
  <link rel="stylesheet" href="../css/style_signin.css" />
</head>

<body>
  <!-- header -->
  <div id="home">
    <div id="login">
      <div>
        <h2>Sign In</h2>
      </div>
      <div id="form-holder">
        <form method="post" action="../api/chk.php">
          <input type="text" name="acc" id="acc" class="input" placeholder="Account" />
          <input type="password" name="pw" id="pw" class="input" placeholder="Password" />
          <button type="submit" id="btn">Next</button>
        </form>
      </div>
    </div>
  </div>
  <!-- header end -->

  <!-- footer -->
  <!-- footer end -->
</body>

</html>