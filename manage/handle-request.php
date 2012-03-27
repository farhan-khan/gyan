<?php
session_start();
include_once('dbconfig.php');
if(isset($_REQUEST['addcourse']))
{
	//print_r($_POST);
	$name = $_POST['name'];
	$city = $_POST['city'];
	$date1 = $_POST['date1'];
	$date1 = date("d-M-Y", strtotime($date1));
	$date2 = $_POST['date2'];
	$date2 = date("d-M-Y", strtotime($date2));	
	$date3 = $_POST['date3'];
	$date3 = date("d-M-Y", strtotime($date3));	
	$date4 = $_POST['date4'];
	$date4 = date("d-M-Y", strtotime($date4));	
	$status = $_POST['status'];
	$base_price = $_POST['base_price'];
	$service_tax = $_POST['service_tax'];
	$course_price = $_POST['course_price'];
	$discount = $_POST['discount'];
	$disc_days = $_POST['disc_days'];
	
	$sql = "INSERT INTO `courses` (`name`, `city`, `date1`, `date2`, `date3`, `date4`, `status`, `base_price`, `service_tax`, `course_price`, `discount`, `disc_days`) VALUES ('".$name."', '".$city."', '".$date1."', '".$date2."', '".$date3."', '".$date4."', '".$status."', '".$base_price."', '".$service_tax."', '".$course_price."', '".$discount."', '".$disc_days."');";	
	mysql_query($sql);
	$_SESSION['notice'] = "Course has been added successfully";
	header('Location: course.php');
}

if(isset($_REQUEST['editcourse']))
{
	//print_r($_POST);
	$id = $_POST['id'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$date1 = $_POST['date1'];
	$date1 = date("d-M-Y", strtotime($date1));
	$date2 = $_POST['date2'];
	$date2 = date("d-M-Y", strtotime($date2));	
	$date3 = $_POST['date3'];
	$date3 = date("d-M-Y", strtotime($date3));	
	$date4 = $_POST['date4'];
	$date4 = date("d-M-Y", strtotime($date4));
	$status = $_POST['status'];
	$base_price = $_POST['base_price'];
	$service_tax = $_POST['service_tax'];
	$course_price = $_POST['course_price'];
	$discount = $_POST['discount'];
	$disc_days = $_POST['disc_days'];
	
	
$sql = "UPDATE `courses` SET `name` = '".$name."', `city` = '".$city."', `date1` = '".$date1."', `date2` = '".$date2."', `date3` = '".$date3."', `date4` = '".$date4."', `status` = '".$status."', `base_price` = '".$base_price."', `service_tax` = '".$service_tax."', `course_price` = '".$course_price."', `discount` = '".$discount."', `disc_days` = '".$disc_days."' WHERE `id` = ".$id."";	
    //echo $sql;
	mysql_query($sql);
	$_SESSION['notice'] = "Course has been updated successfully";
	header('Location: course.php');
}

if(isset($_REQUEST['deletecourse']))
{
	if(!isset($_REQUEST['id']))
		header('Location: index.php');
	$sql = "DELETE FROM `courses` WHERE `courses`.`id` = ".$_REQUEST['id']." LIMIT 1";
	mysql_query($sql);
	$_SESSION['notice'] = "Course has been deleted successfully";
	header('Location: course.php');
}

if(isset($_REQUEST['deletemanager']))
{
	if(!isset($_REQUEST['id']))
		header('Location: index.php');
	$sql = "DELETE FROM `manager` WHERE `email` = '".$_REQUEST['id']."' LIMIT 1";
	mysql_query($sql);
	$_SESSION['notice'] = "Manager has been deleted successfully";
	header('Location: managers.php');
}

if(isset($_REQUEST['userregister']))
{
	$name = $_POST['name'];
	$email = strip_tags($_POST['email']);
	$company = $_POST['company'];
	$phone = $_POST['phone'];
	$city = $_POST['city'];
	$course = $_POST['course'];
$sql = "INSERT INTO `users` (`name`, `email`, `company`, `phone`, `city`, `course`) VALUES ('".$name."', '".$email."', '".$company."', '".$phone."', '".$city."', '".$course."');";	
	mysql_query($sql);
	$courseelements = explode('^',$course);
	$subject = "Thank You for registering on pmgyan.com";
	$message = '
	<html>
<body>
	<table style="width:600px; background:#999 url(http://pmgyan.com/dev/images/mail-body.gif) repeat;">
    	<tr>
        	<td style="width:5%;"></td>
            <td><img src="http://pmgyan.com/dev/images/mail-logo.png" alt="PMGyan - Learn to lead"></td>
            <td style="width:5%;"></td>
        </tr>
    	<tr>
        	<td style="width:5%;"></td>
            <td>
            	<table width="100%" style="background-color:rgb(14, 32, 59); opacity:0.5;">
                	<tr>
                    	<td style="color:#FFFFFF; padding:5px;">
                            Dear '.$name.',<br>
                            Thank you for choosing PMGyan.com for your PMP&reg; Exam Preparation.
                            We have reserved a seat for you for;<br>
                            '.$courseelements[1].'<br>
                            At '.$courseelements[2].'<br>
                            On '.$courseelements[3].', '.$courseelements[4].' & '.$courseelements[5].', '.$courseelements[6].'<br>
                            Course Fees: '.$courseelements[7].' (All Inclusive)<br><br>
                            To confirm your registration, you are requested to make payment by Cheque Deposit/Online Transfer to<br>
                            Account Name: Trendz Services (Bangalore) Pvt. Ltd.<br>
                            Account Number: 000000000<br>
                            Bank: Millionaire Bank<br>
                            IFSC Code: MB1234567<br><br>
                            
                            Please note: If we do not receive your payment within 5 business days of your registration, we shall release your seat for registration to other aspirants.<br>
                            
                            Should you have any queries, please feel free to write to us at support@pmgyan.com<br><br>
                            
                            Best Wishes,<br>
                            PMGyan.com Team<br>
                            <a href="http://www.pmgyan.com" style="text-decoration:underline; color:#FFFFFF;">www.PMGyan.com</a>
                        </td>
                    </tr>
                </table>
            </td>
            <td style="width:5%;"></td>
        </tr>
    	<tr>
        	<td style="width:5%;"></td>
            <td align="center" style="font-family:Trebuchet MS; font-size:12px;">All right reserved &copy; <a href="http://www.pmgyan.com" style="text-decoration:none;">pmgyan.com</a></td>
            <td style="width:5%;"></td>
        </tr>                
    </table>
</body>
</html>';	
	
	//$to = 'bob@example.com';
	$headers = "From: support@pmgyan\r\n";
	$headers .= "Reply-To: support@pmgyan\r\n";
	$headers .= "CC: support@pmgyan.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	mail($email, $subject, $message, $headers);
	$_SESSION['notice'] = "Thank you for choosing PMGyan.com for your PMP&reg; Exam Preparation.";	
	header('Location: ../register.php');
}

if(isset($_REQUEST['addmanager']))
{
	$super_admin = 0;
	$email = $_POST['manager_email'];
	$pass = $_POST['manager_password'];
	if(isset($_POST['super_admin']))
	$super_admin = 1;
	
	$sql = "INSERT INTO `manager` (`email`, `pass`, `super_admin`) VALUES ('".$email."', '".$pass."', '".$super_admin."');";	
	mysql_query($sql);
	$_SESSION['notice'] = "Manager has been added successfully";
	header('Location: managers.php');
}

if(isset($_REQUEST['forgot']))
{
	$email = $_POST['email'];
	$sql = "SELECT * FROM manager WHERE email = '".$email."';";
	$result = mysql_query($sql);
	if(mysql_num_rows($result))
	{
		$row = mysql_fetch_assoc($result);
		$subject = "Your password at pmgyan.com";
		$message = "
		<html>
		<body>
		<table>
			<tr>
				<td>
					<table>
						<tr>
							<td>This is your password-> </td>
							<td><strong>".$row['pass']."</strong></td>
						</tr>					
					</table>
				</td>
			</tr>			
		</table>
		</body>
		</html>";	
		
		$headers = 'From: no-reply@pmgyan.com' . "\r\n" .
			'Reply-To: no-reply@pmgyan.com' . "\r\n" .
			'MIME-Version: 1.0' . "\r\n" .
			'Content-type: text/html; charset=UTF-8' . "\r\n"; 
		
		mail($email, $subject, $message, $headers);	
		$_SESSION['notice'] = "Password sent to your email address.";
		header('Location: login.php');
	}else {
		$_SESSION['err'] = "Email not found in our database";
		header('Location: forgot-password.php');	
	}
}

if(isset($_REQUEST['contactus']))
{
	$name = $_POST['name'];
	$email = strip_tags($_POST['email']);
	$phone = $_POST['phone'];
	$feedback = $_POST['feedback'];
	$subject = "Thank you for writing to PMGyan";
	$message = '
	<html>
<body>
	<table style="width:600px; background:#ECECEC url(http://pmgyan.com/dev/images/mail-body.gif) repeat;">
    	<tr>
        	<td style="width:5%;"></td>
            <td><img src="http://pmgyan.com/dev/images/mail-logo.png" alt="PMGyan - Learn to lead"></td>
            <td style="width:5%;"></td>
        </tr>
    	<tr>
        	<td style="width:5%;"></td>
            <td>
            	<table width="100%" style="background-color:rgb(14, 32, 59); opacity:0.5;">
                	<tr>
                    	<td style="color:#FFFFFF; padding:5px;">
                            Dear '.$name.',<br>
                            Thank you for writing to PMGyan.com<br>
                            Your Query: '.$feedback.'<br><br>
                            
                            Has been received by us, one of our experts will answer your query in 24 Hours.<br><br>
                            
                            Best Wishes,<br>
                            PMGyan.com Team<br>
                            <a href="http://www.pmgyan.com" style="text-decoration:underline; color:#FFFFFF;">www.PMGyan.com</a>
                        </td>
                    </tr>
                </table>
            </td>
            <td style="width:5%;"></td>
        </tr>
    	<tr>
        	<td style="width:5%;"></td>
            <td align="center" style="font-family:Trebuchet MS; font-size:12px;">All right reserved &copy; <a href="http://www.pmgyan.com" style="text-decoration:none;">pmgyan.com</a></td>
            <td style="width:5%;"></td>
        </tr>                
    </table>
</body>
</html>';	
	
	//$to = 'bob@example.com';
	$headers = "From: support@pmgyan\r\n";
	$headers .= "Reply-To: support@pmgyan\r\n";
	$headers .= "CC: support@pmgyan.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	mail($email, $subject, $message, $headers);	
	$_SESSION['notice'] = "Thank you for writing to PMGyan";
	header('Location: ../contact.php');
}

?>