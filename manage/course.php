<?php include_once('header.php'); ?> 
<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Courses</span><span style="float:right; font-size:14px;"><a href="add-course.php">Add Course</a></span></h2><br />
          
          <div class="clr"></div>
          <?php 
          	include_once('dbconfig.php');
			$sql = "SELECT * FROM courses;";
			$result = mysql_query($sql);
		  ?>
          <table width="100%" border="0" cellpadding="4" cellspacing="2" bgcolor="#FFFFFF">
            <tr>
              <td width="17%" height="36" align="center" valign="middle" bgcolor="#F5F5F5"><strong>City</strong></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><strong>Course</strong></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><strong>Dates</strong></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><strong>Price</strong></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><strong>Status</strong></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><strong>Action</strong></td>
            </tr>
            <?php while($row = mysql_fetch_assoc($result)){ ?>
            <tr>
              <td width="17%" height="51" align="center" valign="middle" bgcolor="#F5F5F5"><?php echo $row['city']; ?></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><?php echo $row['name']; ?></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><?php echo $row['date1'].','.$row['date2'].' &amp; '.$row['date3'].','.$row['date4']; ?></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5">Rs. <?php echo $row['course_price']; ?></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><?php echo $row['status']; ?></td>
              <td width="17%" align="center" valign="middle" bgcolor="#F5F5F5"><a href="edit-course.php?id=<?php echo $row['id']; ?>">Edit</a> | <a href="handle-request.php?deletecourse=1&id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure, you want to delete this course?')">Delete</a></td>
            </tr>
            <?php } ?>
            <tr>
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