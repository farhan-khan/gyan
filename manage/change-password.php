<?php include_once('header.php'); ?> 

<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Change Password</span></h2>
          <div class="clr"></div>
          <form action="handle-request.php" method="post" id="formID">
          	<input type="hidden" name="updatemanager" value="1" />
            <ol>
			  <li>
                <label for="old_password">Old Password:</label>
                <input id="old_password" name="old_password" type="password" class="text validate[required]" />
              </li> 
			  <li>
                <label for="new_password">New Password:</label>
                <input id="new_password" name="new_password" type="password" class="text validate[required]" />
              </li> 
			  <li>
                <label for="confirm_password">Retype Password:</label>
                <input id="confirm_password" name="confirm_password" type="password" class="text validate[required]" />
              </li>                                             
              <li>
                <input type="image" name="imageField" id="imageField" src="../images/submit.gif" class="send" />
                <div class="clr"></div>
              </li>
            </ol>
          </form>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
<?php include_once('footer.php'); ?> 