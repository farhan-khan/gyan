<?php include_once('header.php'); ?> 
<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Registered users</span><span style="float:right; font-size:14px;"><a href="managers.php">Admin Users</a></span></h2><br />
          
          <div class="clr"></div>
          <?php 
          	include_once('dbconfig.php');
			$sql = "SELECT * FROM users;";
			$result = mysql_query($sql);
		  ?>
          <table width="100%" border="0" cellpadding="4" cellspacing="2" bgcolor="#FFFFFF">
            <tr>
              <td width="17%" height="36" align="center" valign="middle" bgcolor="#F5F5F5"><strong>Full Name</strong></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><strong>Email</strong></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><strong>Company</strong></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><strong>Contact no.</strong></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><strong>City</strong></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><strong>State</strong></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><strong>Course</strong></td>              
            </tr>
            <?php while($row = mysql_fetch_assoc($result)){ ?>
            <tr>
              <td width="17%" height="51" align="center" valign="middle" bgcolor="#F5F5F5"><?php echo $row['name']; ?></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><?php echo $row['email']; ?></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><?php echo $row['company']; ?></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><?php echo $row['phone']; ?></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><?php echo $row['city']; ?></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><?php echo $row['state']; ?></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><?php echo $row['course']; ?></td>
            </tr>
            <?php } ?>
            <tr>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5">&nbsp;</td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5">&nbsp;</td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5">&nbsp;</td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5">&nbsp;</td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5">&nbsp;</td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5">&nbsp;</td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5">&nbsp;</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="clr"></div>
    </div>
</div>
<?php include_once('footer.php'); ?> 