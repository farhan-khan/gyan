<?php include_once('header.php'); ?> 
<script>
	$(function() {
		$( "#date1" ).datepicker();
		$( "#date2" ).datepicker();
		$( "#date3" ).datepicker();
		$( "#date4" ).datepicker();
	});
    function tValue() 
    { 
        var bp = parseFloat(document.getElementById('base_price').value);
		var st = (document.getElementById('service_tax').value);
		if(st == "")
		{
			st = parseFloat(10.3);
		}
		else
		{
			st = parseFloat(st);
		}
		var tt = parseFloat(bp+((bp*st)/100));
		var result= Math.round(tt*100,2)/100;
        document.getElementById('course_price').value = result; 
    
    }
</script>	
<script type="text/javascript">
/*You can also place this code in a separate file and link to it like epoch_classes.js*/
	var dp_cal1,dp_cal2,dp_cal3,dp_cal4;      
window.onload = function () {
	dp_cal1  = new Epoch('epoch_popup','popup',document.getElementById('date1'));
	dp_cal2  = new Epoch('epoch_popup','popup',document.getElementById('date2'));
	dp_cal3  = new Epoch('epoch_popup','popup',document.getElementById('date3'));
	dp_cal4  = new Epoch('epoch_popup','popup',document.getElementById('date4'));
};
</script>
<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Add Course</span></h2>
          <div class="clr"></div>
          <form action="handle-request.php" method="post" id="formID">
          	<input type="hidden" name="addcourse" value="1" />
            <ol>
              <li>
                <label for="name">Course Name (required):</label>
                <input id="name" name="name" class="text validate[required]"  />
              </li>
			  <li>
                <label for="city">City:</label>
                <input id="city" name="city" class="text validate[required]" />
              </li>
              <li>
              	<label for="dates">Date 1,2,3,4:</label>
                <input type="date1" id="date1" name="date1" placeholder="mm-dd-yyyy" class="hasDatepicker validate[required]" /> 
                <input type="date2" id="date2" name="date2" placeholder="mm-dd-yyyy" class="hasDatepicker validate[required]" /> 
                <input type="date3" id="date3" name="date3" placeholder="mm-dd-yyyy" class="hasDatepicker validate[required]" /> 
                <input type="date4" id="date4" name="date4" placeholder="mm-dd-yyyy" class="hasDatepicker validate[required]" /> 
              </li>              
              <li>
                <label for="status">Status:</label>
                <select name="status" class="text" style="width:485px; height:25px; padding:2px;">
                  <option value="Open">Open</option>
                  <option value="Close">Close</option>
                </select>
              </li>
              <li>
                <label for="base_price">Base Price + Service Tax(%) = Total Course Price:</label>
                <input id="base_price" name="base_price" class="validate[required,custom[number]]" onchange="tValue()" /> + <input id="service_tax" name="service_tax" class="validate[required,custom[number]]" onchange="tValue()" value="10.3" /> = <input id="course_price" name="course_price" class="validate[required,custom[number]]" readonly="readonly" />
              </li>

			  <li>
                <label for="discount">Discount (days before date 1):</label>
                <input id="discount" name="discount" class="validate[required,custom[number]]" /> ( <input id="disc_days" name="disc_days" class="validate[required,custom[integer]]" /> )
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