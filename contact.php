<?php include_once('header.php'); ?>
<div class="content_resize">
<div class="article">
  <h2>Contact Us </h2>
  <p>For any queries/feedback, please fill the form below and we  will get back to you in 24-hours.</p>
  <div class="clr"></div>
  <form action="manage/handle-request.php" method="post" id="formID">
  <input type="hidden" name="contactus" value="1" />
    <ol>
      <li>
        <label for="name">Name (required):</label>
        <input id="name" name="name" class="text validate[required]" />
      </li>
      <li>
        <label for="email">Email Address (required):</label>
        <input id="email" name="email" class="text validate[required,custom[email]]" />
      </li>
      <li>
        <label for="phone">Contact Number:</label>
        <input id="phone" name="phone" class="text" />
      </li>
      <li>
        <label for="feedback">Query/Feedback (required):</label>
        <textarea id="feedback" name="feedback" class="text validate[required]" rows="8"  ></textarea>
      </li>
      <li>
        <input type="image" name="imageField" id="imageField" src="images/submit.gif" class="send" />
        <div class="clr"></div>
      </li>
	  <li>
        <label for="message"><strong>Or </strong>you can write  to us at <a href="mailto:support@pmgyan.com">support@pmgyan.com</a><br />
        <strong>Or </strong>you may call  us at: +91-9xxxx xxxxx / +91-80-xxxx xxxx (Between 9AM to 6PM only)<br />
        </label>
      </li>      
    </ol>
  </form>
</div>
</div>
<?php include_once('footer.php'); ?> 