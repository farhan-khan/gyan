<?php include_once('header.php'); ?> 

<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Add Manager</span></h2>
          <div class="clr"></div>
          <form action="handle-request.php" method="post" id="formID">
          	<input type="hidden" name="addmanager" value="1" />
            <ol>
              <li>
                <label for="manager_email">Email:</label>
                <input id="manager_email" name="manager_email" class="text validate[required,custom[email]]"  />
              </li>
			  <li>
                <label for="manager_password">Password:</label>
                <input id="manager_password" name="manager_password" type="password" class="text validate[required]" />
              </li> 
			  <li>
                <label for="super_admin"><input type="checkbox" name="super_admin" id="super_admin"  /> Super Admin</label>
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