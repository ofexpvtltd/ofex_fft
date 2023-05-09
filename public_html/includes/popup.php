    <!-- Contact Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                        <!-- ======= Contact Section ======= -->
                    <section id="contact" class="contact"  style="padding: 10px 0;">

                        <div class="container" data-aos="fade-up">

                            <header class="section-header" style="padding-bottom: 20px;">
                                <p>Book a Free Demo</p>                                
                            </header>

                            <form action="forms/requestdemo.php" method="post" class="php-email-form">
                                <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" onkeypress="return validateMobileNumber(event)" class="form-control" name="contact" placeholder="Contact Number" required>
                                </div>

                                <div class="col-md-6 ">
                                <input type="text" class="form-control" name="company" placeholder="Company Name" required>
                                </div>
                                
                                <div class="col-md-12">
                                    <!--input type="text" class="form-control" name="fleet" placeholder="Fleet Size" required-->
                                    <label for="fleet_size">Fleet Size</label>
                                        <select class="form-control" name="fleet" placeholder="Fleet Size" required>
                                            <option value="1-2">1-2</option>
                                            <option value="3-10">3-10</option>
                                            <option value="11-50">11-50</option>
                                            <option value="51-100">51-100</option>
                                            <option value="101-500">101-500</option>
                                            <option value="500+">500+</option>
                                        </select>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="A bit about nature of your business, required to suggest a better solution." required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Thank you for booking a demo with us, an agent will contact you soon.</div>
                                    
                                    <button type="submit" data-bs-dismiss="modal" aria-label="Close" style="background-color: #bfbfbf; color: #fff;">Close</button>
                                    <button type="submit">Send Message</button>
                                    
                                </div>

                                </div>
                            </form>                                         
                        </div>

                    </section><!-- End Contact Section -->

                </div>
            </div>
        </div>
    </div>