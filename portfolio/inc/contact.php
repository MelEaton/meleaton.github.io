<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	// //Check to make sure that the phone field is not empty
	// if(trim($_POST['phone']) == '') {
	// 	$hasError = true;
	// } else {
	// 	$phone = trim($_POST['phone']);
	// }

	// //Check to make sure that the name field is not empty
	// if(trim($_POST['weburl']) == '') {
	// 	$hasError = true;
	// } else {
	// 	$weburl = trim($_POST['weburl']);
	// }

	//Check to make sure that the subject field is not empty
	if(trim($_POST['subject']) == '') {
		$hasError = true;
	} else {
		$subject = trim($_POST['subject']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!filter_var( trim($_POST['email'], FILTER_VALIDATE_EMAIL ))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'me@melschade.com'; // Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>
    <div class="row">
      <div class="col-sm-12 message">
        <h2>Send me a message:</h2><a href="mailto:me@melschade.com?Subject=Hello" target="_top"><span>to me@melschade.com</span></a>
        <hr>
      </div>
    </div>
 
    <div class="row">
      <div class="col-md-4">
        <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
          <fieldset>

            <?php if(isset($hasError)) { //If errors are found ?>
              <p class="alert alert-danger">Oops! Please check if you've filled all the fields with valid information and try again. Thank you!</p>
            <?php } ?>

            <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
              <div class="alert alert-success">
                <p><strong>Message Successfully Sent!</strong></p>
                <p>Thank you for getting in touch, <strong><?php echo $name;?></strong>! Your message was successfully sent. I&rsquo;ll be in touch with you soon.</p>
              </div>
            <?php } ?>
            <div class="form-group">
              <label for="name">Your Name<span class="help-required">*</span></label>
              <input type="text" name="contactname" id="contactname" value="" class="form-control required" role="input" aria-required="true" />
            </div>

            <!-- <div class="form-group">
              <label for="phone">Your Phone Number<span class="help-required">*</span></label>
              <input type="text" name="phone" id="phone" value="" class="form-control required" role="input" aria-required="true" />
            </div> -->


            <div class="form-group">
              <label for="email">Your Email<span class="help-required">*</span></label>
              <input type="text" name="email" id="email" value="" class="form-control required email" role="input" aria-required="true" />
            </div>

            <!-- <div class="form-group">
              <label for="weburl">Your Website<span class="help-required">*</span></label>
              <input type="text" name="weburl" id="weburl" value="" class="form-control required url" role="input" aria-required="true" />
            </div> -->

      </div>
      <div class="col-md-8">

            <div class="form-group">
              <label for="subject">Subject<span class="help-required">*</span></label>
              <input type="text" name="subject" id="subject" value="" class="form-control required" role="input" aria-required="true" />
            </div>

            <div class="form-group">
              <label for="message">Message<span class="help-required">*</span></label>
              <textarea rows="8" name="message" id="message" class="form-control required" role="textbox" aria-required="true"></textarea>
            </div>

            <div class="actions">
              <input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-primary" title="Click here to submit your message!" />
              <input type="reset" value="Clear Form" class="btn btn-danger" title="Remove all the data from the form." />
            </div>
          </fieldset>
        </form>
      </div><!-- col -->
    </div><!-- row -->


