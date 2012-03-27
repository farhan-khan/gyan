<?php include('header.php'); ?> 
<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Managers </span><span style="float:right; font-size:14px;"><a href="add-manager.php">Add Manager</a></span></h2><br />
          
          <div class="clr"></div>
          <?php 
          	include_once('dbconfig.php');
			$sql = "SELECT * FROM manager;";
			$result = mysql_query($sql);
		  ?>
          <table width="100%" border="0" cellpadding="4" cellspacing="2" bgcolor="#FFFFFF">
            <tr>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><strong>Email</strong></td>
              <td width="7%" align="center" valign="middle" bgcolor="#F5F5F5"><strong>Super Admin</strong></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><strong>Action</strong></td>
            </tr>
            <?php while($row = mysql_fetch_assoc($result)){ ?>
            <tr>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><?php echo $row['email']; ?></td>
              <td width="7%" align="center" valign="middle" bgcolor="#F5F5F5"><?php if($row['super_admin']) echo 'yes'; else echo 'no'; ?></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><strong><a href="handle-request.php?deletemanager=1&id=<?php echo $row['email']; ?>" onclick="return confirm('Are you sure, you want to delete this manager?')">Delete Manager</a></strong></td>              
            </tr>
            <?php } ?>
            <tr>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5">&nbsp;</td>
              <td width="7%" align="center" valign="middle" bgcolor="#F5F5F5">&nbsp;</td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5">&nbsp;</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="clr"></div>
    </div>
</div>
<?php include_once('footer.php'); ?> 