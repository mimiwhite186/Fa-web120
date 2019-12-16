<?php include "includes/header.php"?>
<h1 class="h1al">Contact Us</h1>
	<section>
		<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "joseph@slightlyrobot.com";  //place your/your client's email address here
        $toName = "Joseph Toles"; //place your client's name here
        $website = "Slightlyrobot";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
                echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
	</section>

<?php include "includes/footer.php"?>