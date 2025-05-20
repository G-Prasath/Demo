 <!--- Start Side Buttons -->

    <div class="floating-buttons">
        <a href="https://wa.me/9150836061" target="_blank" class="whatsapp">
            <i class="fa fa-whatsapp"></i>
        </a>
        <a href="#" class="quote" data-toggle="modal" data-target="#quoteModal">
            <i class="fa fa-quote-left"></i>
        </a>
        <a href="tel:+91 9150836061" class="call">
            <i class="fa fa-phone"></i>
        </a>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="quoteModalLabel">Get a Quote</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post" action="mail.php" onsubmit="return validateForm()">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control modal_form" id="name" name="name"
                                placeholder="Enter your name" style="margin-bottom:0">
                            <span id="nameError" class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control modal_form" id="email" name="email"
                                placeholder="Enter your email" style="margin-bottom:0">
                            <span id="emailError" class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control modal_form phone" id="phone" name="phone"
                                placeholder="Enter your Phone No" style="margin-bottom:0">
                            <span id="phoneError" class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control modal_form" id="message" name="message" rows="3" col="3"
                                placeholder="Enter your message"></textarea>
                        </div>
                        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>

