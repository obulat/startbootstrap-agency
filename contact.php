<?php include 'header.php'?>
 <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-heading">Contact Us</h2>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="left-frame text-center">
                                <h2>Our Presence</h2>
                                <div class="contact-img">
                                    <img src="img/contact/professional-team.png" width="20%" style="padding-top:35%">
                                    <img src="img/contact/globe.png" width="55%">
                                    <img src="img/contact/professional-team.png" width="20%" style="padding-top:35%">
                                </div>
                                <table class="text-uppercase table table-bordered mb-0 ">
                                    <tr>
                                        <td>Turkey</td>
                                        <td>Syria & Iraq</td>
                                        <td>India</td>
                                    </tr>
                                    <tr class="main-color">
                                        <td>Russia</td>
                                        <td>Lebanon & Jordan</td>
                                        <td>China</td>
                                    </tr>
                                    <tr>
                                        <td>Ukraine</td>
                                        <td>Lybia</td>
                                        <td>Kazakhstan</td>
                                    </tr>
                                    <tr class="main-color">
                                        <td>Romania</td>
                                        <td>Sudan</td>
                                        <td>Uzbekistan</td>
                                    </tr>
                                </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="right-frame">
                                <div class="heading">
                                <h2>Your Enquiry</h2>
                                <p>Kindly provide the product/ services requirement.<br> Our representative will contact you shortly!</p>
                                    </div>
                                <div class="right-frame-bottom">
                                <div class="form-group">
                                    <textarea class="form-control" id="message"  placeholder="Dear Sir/Madame, \n I'm looking for products with the following specifications:" required data-validation-required-message="Please enter a message."></textarea>
                                    </div>
                                    <p class="help-block text-danger"></p>
                                </div>
                                    <div class="form-bottom">
                                <div class="form-group form-group-row">
                                    <label for="name">Your Name:</label>
                                    <input class="form-control" id="name" type="text" placeholder="Your Name And Surname *" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group form-group-row">
                                    <label>Email: </label>
                                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group form-group-row">
                                    <label>Mobile:</label>
                                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div id="success"></div>
                                        <div class="text-right">
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                                        </div> </div></div></div>
                            <div class="clearfix"></div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php'?>