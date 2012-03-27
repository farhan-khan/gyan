<?php include_once('header.php'); ?> 
<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Register</span>
          </h2>
          <p>The registration page should have the following fields</p>
          <div class="clr"></div>
          <form action="#" method="post" id="sendemail">
            <ol>
              <li>
                <label for="name">Name (required):</label>
                <input id="name" name="name" class="text" />
              </li>
              <li>
                <label for="email">Email Address (required):</label>
                <input id="email" name="email" class="text" />
              </li>
              <li>
                <label for="website">Company:</label>
                <input id="website" name="website" class="text" />
              </li>
              <li>
                <label for="message">Contact Number:</label>
                <input id="website2" name="website2" class="text" />
              </li>
			  <li>
                <label for="message">City:</label>
                <input id="city" name="city" class="text" />
              </li>
			  <li>
                <label for="message">State:<br />
                <select name="select" class="text" style="width:485px; height:25px; padding:2px;">
                  <option>Select</option>
                </select>
                </label>
			  </li>
			  <li>
                <label for="message">Course:<br />
                <select name="course" class="text" style="width:485px; height:25px; padding:2px;">
                  <option>Select</option>
                </select>
                </label>
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