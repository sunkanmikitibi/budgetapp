<footer id="ts-footer">

    <div class="map ts-height__400px" id="map"></div>

    <section id="contact" class="ts-separate-bg-element" data-bg-image="assets/img/bg-hand-mobile.jpg" data-bg-image-opacity=".1" data-bg-color="#12264f">
        <div class="container">
            <div class="ts-box mb-0 p-5 ts-mt__n-10" data-animate="ts-fadeInUp">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Contact Us</h3>
                        <address>
                            <figure>
                                2590 Rocky Road
                                Philadelphia, PA 19108
                            </figure>
                            <br>
                            <figure>
                                <div class="font-weight-bold">Email:</div>
                                <a href="#">office@example.com</a>
                            </figure>
                            <figure>
                                <div class="font-weight-bold">Phone:</div>
                                +1 215-606-0391
                            </figure>
                            <div class="font-weight-bold">Skype:</div>
                            fin.win
                        </address>
                        <!--end address-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-8">
                        <h3>Contact Form</h3>
                        <form id="form-contact" method="post" class="clearfix ts-form ts-form-email ts-inputs__transparent" data-php-path="assets/php/email.php">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="form-contact-name">Your Name *</label>
                                        <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Your Name" required>
                                    </div>
                                    <!--end form-group -->
                                </div>
                                <!--end col-md-6 col-sm-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="form-contact-email">Your Email *</label>
                                        <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Your Email" required>
                                    </div>
                                    <!--end form-group -->
                                </div>
                                <!--end col-md-6 col-sm-6 -->
                            </div>
                            <!--end row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form-contact-message">Your Message *</label>
                                        <textarea class="form-control" id="form-contact-message" rows="5" name="message" placeholder="Your Message" required></textarea>
                                    </div>
                                    <!--end form-group -->
                                </div>
                                <!--end col-md-12 -->
                            </div>
                            <!--end row -->
                            <div class="form-group clearfix">
                                <button type="submit" class="btn btn-primary float-right" id="form-contact-submit">Send a Message</button>
                            </div>
                            <!--end form-group -->
                            <div class="form-contact-status"></div>
                        </form>
                        <!--end form-contact -->
                    </div>
                </div>
                <!--end row-->
            </div>
            <!--end ts-box-->
            <div class="text-center text-white py-4">
                <small>© 2019 Kobonet, All Rights Reserved</small>
            </div>
        </div>
        <!--end container-->
    </section>

</footer>
<!--end #footer-->

</div>
<!--end page-->

@include('frontpartials.scripts')
