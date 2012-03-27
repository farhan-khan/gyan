<?php include_once('header.php'); ?>

<div class="content_resize">
  <div class="article">
    <h2>Forgot Password</h2>
    <div class="clr"></div>
    <form action="handle-request.php" method="post" id="formID" >
      <input type="hidden" name="forgot" value="1" />
      <ol>
        <li>
          <label for="email">Email Address (required):</label>
          <input id="email" name="email" type="text" class="text validate[required,custom[email]]" />
        </li>
        <li>
          <input type="image" name="imageField" id="imageField" src="../images/submit.gif" class="send" />
          <div class="clr"></div>
        </li>
      </ol>
    </form>
  </div>
</div>
<?php include_once('footer.php'); ?>
