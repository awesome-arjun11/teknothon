<?php
include("form_sub.php");
$page_title = "Teknothon19 - Contact";
$body_class = "contact-page";
include("../header.php")
?>

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="entry-header">
                        <h2 class="entry-title">Contact Us</h2>

                        <ul class="breadcrumbs flex align-items-center">
                            <li><a href="#">Home</a></li>
                            <li>contact</li>
                        </ul><!-- .breadcrumbs -->
                    </div><!-- entry-header -->
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page-header -->

    <div class="container">
        <div class="main-content">
            <div class="contact-page-map">
                <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=jamia millia islamia&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div><!-- map -->

            <div class="contact-details">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="contact-medium flex align-items-center">
                                <figure class="contact-icon">
                                    <img src="/images/phone.jpg" alt="phone icon">
                                </figure><!-- phone-icon -->

                                <div class="contact-content">
                                    <div class="entry-title">
                                        Phone
                                    </div><!-- entry-title -->
                                    <div class="entry-content">
                                        Imran Abbas  : +91 7011306934
                                        Zakir Hassan  : +91 8840849165
                                    </div><!-- entry-content -->
                                </div><!-- phone-number -->
                            </div><!-- contact-phone -->
                        </div><!-- col-4 -->

                        <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                            <div class="contact-medium flex align-items-center">
                                <figure class="contact-icon">
                                    <img src="/images/mail.jpg" alt="phone icon">
                                </figure><!-- phone-icon -->

                                <div class="contact-content">
                                    <div class="entry-title">
                                        E-mail
                                    </div><!-- entry-title -->
                                    <div class="entry-content">
                                        teknothon.dcs@gmail.com
                                    </div><!-- entry-content -->
                                </div><!-- phone-number -->
                            </div><!-- contact-phone -->
                        </div><!-- col-4 -->

                        <div class="col-12 col-md-6 col-lg-4 mt-5 mt-lg-0">
                            <div class="contact-medium flex align-items-center">
                                <figure class="contact-icon">
                                    <img src="/images/place.jpg" alt="phone icon">
                                </figure><!-- phone-icon -->

                                <div class="contact-content">
                                    <div class="entry-title">
                                        Address
                                    </div><!-- entry-title -->
                                    <div class="entry-content">
                                        Jamia Millia Islamia,<br>
                                        Department of Computer Science,<br>
                                        Jamia Nagar,<br>
                                        New Delhi 110025
                                    </div><!-- entry-content -->
                                </div><!-- phone-number -->
                            </div><!-- contact-phone -->
                        </div><!-- col-4 -->
                    </div><!-- row -->
                </div>
            </div><!-- contact-details -->

            <div class="get-in-touch">
                <div class="entry-header">
                    <div class="entry-title">
                        <h2>Get in touch</h2>
                    </div><!-- entry-title -->
                </div><!-- entry-header -->

                <div class="entry-content">
                    <p>Send us your queries by email.
                        We endeavour to answer them all within 24 hours..</p>
                </div><!-- entry-content -->

                <form id="contactform" action="<?php $_SERVER['PHP_SELF']?>" method="post">
                    <div class="contact-form">
                        <h3 class="formsuccess"><?php echo $success_msg; ?></h3>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <span class="formerror"> <?php echo $name_error; ?></span>
                            <input type="text" name="sname" placeholder="Your name*" value="<?php echo htmlspecialchars($name);?>" required>
                        </div><!-- col-4 -->

                        <div class="col-12 col-md-6">
                            <span class="formerror"> <?php echo $email_error; ?></span>
                            <input type="email" name="semail" placeholder="Your email*" value="<?php echo htmlspecialchars($email);?>" required>
                        </div><!-- col-6 -->

                        <div class="col-12">
                            <input type="text" name="ssubject" placeholder="Subject">
                        </div>

                        <div class="col-12">
                            <span class="formerror"> <?php echo $msg_error; ?></span>
                            <textarea rows="8" cols="80" name="smsg" placeholder="message*" value="<?php echo htmlspecialchars($msg);?>" required></textarea>
                        </div>

                        <div class="col-12 submit flex justify-content-center">
                            <input type="submit" name="" value="send message" class="btn">
                        </div>

                    </div><!-- row -->
                </div><!-- contact-form -->
                </form>
            </div><!-- newsletter-subscribe -->
        </div><!-- main-content -->
    </div><!-- container -->
<?php
readfile("../footer.html");
?>

