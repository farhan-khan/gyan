<?php include_once('header.php'); ?>
<div class="content_resize">
<div class="article">
  <h2>Manager Login</h2>
  <div class="clr"></div>
  <form action="logincheck.php" method="post" id="formID">
    <ol>
      <li>
        <label for="email">Email Address (required):</label>
        <input id="email" name="email" type="text" class="text validate[required,custom[email]]" />
      </li>
      <li>
        <label for="password">Password (required):</label>
        <input id="password" name="password" type="password" class="text validate[required]" />
      </li>
      <li>
        <input type="image" name="imageField" id="imageField" src="../images/submit.gif" class="send" /> 
        <div class="clr"></div><br />
        <a href="forgot-password.php">Forgot Password ?</a>
      </li>
    </ol>
  </form>
</div>
</div>
<?php include_once('footer.php'); ?> 