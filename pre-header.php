
<div id="bar">
  <form class="login" action = 'LoginFunction.php' method = 'POST' name='logInTo'>
  <!-- div id="barInput"> -->
  <p>
    <span><img src="images/orange_logo_small.png" alt="Logo">WheelSharing</span>
    <div id="barInput">
    <label><span>Email</span>
    <input class="text" name="email" type="text" id="user_login" placeholder="email" size="13" maxlength="40" value="" />
    </label>
    <label><span>Password</span>
    <input class="text" name="password" type="password" id="password" placeholder="password" size="13" maxlength="100" />
    </label>
    <input name="re" type="hidden" value="" />
    <input type="submit" class="button-secondary" name="Submit" id="submit" value="LogIn" />
    </div>
  </p>
  <?php
    if (isset($_GET['err']))
    {   
      echo '<br><span style="color: red;">Incorrect credentials</span><br/>';
    }
  ?>
</form>

</div>

<!-- Function to Check Cookie -->
<script type="text/javascript">
  function checkCookie()
  {
    var email=getCookie("email");
    var password=getCookie("password");
    /* Cookie is set */
    if(email!="" && password!="")
    {
      document.forms["logInTo"].email.value = email;
      document.forms["logInTo"].password.value = password;
      document.forms["logInTo"].submit();
      }
    }
    checkCookie();
</script>
