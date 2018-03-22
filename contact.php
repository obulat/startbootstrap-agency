<?php include 'header.php'?>
 <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage" novalidate>
                        <div class="row">
                            <div class="col-md-6 " style="background-color: white; border-radius: .25rem">
                                <h2 class="text-center">Our Presense</h2>
                                <img/>
                                <table class="text-uppercase table table-bordered">
                                    <tr>
                                        <td>Turkey</td>
                                        <td>Syria & Iraq</td>
                                        <td>India</td>
                                    </tr>
                                    <tr>
                                        <td>Russia</td>
                                        <td>Lebanon & Jordan</td>
                                        <td>China</td>
                                    </tr>
                                    <tr>
                                        <td>Ukraine</td>
                                        <td>Lybia</td>
                                        <td>Kazakhstan</td>
                                    </tr>
                                    <tr>
                                        <td>Romania</td>
                                        <td>Sudan</td>
                                        <td>Uzbekistan</td>
                                    </tr>
                                </table>

                            </div>
                            <div class="col-md-6">
                                <h3>Your Enquiry</h3>
                                <p>Kindly provide the product/ services requirement, and our representative will call you shortly</p>
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php'?>