

<!-- Modal -->
<div class="modal fade mt-4 gynemodal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"  >
  <div class="modal-dialog  modal-dialog-centered" style="max-width:380px;" >
    <div class="modal-content">
      
      <div class="modal-body">
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <form action="#" class="modern-contact-form" >
                    <h3 class="form-title">Send Us a Message</h3>
                    <div class="form-group mb-1">
                        <label for="userName">Full Name *</label>
                        <input type="text" id="userName" class="form-name" name="name" placeholder="John Doe" required>
                    </div>
                    <div class="form-group mb-1">
                        <label for="userEmail">Email Address *</label>
                        <input type="email" id="userEmail" class="form-email" name="email" placeholder="john@example.com" required>
                    </div>
                    <div class="form-group mb-1">
                        <label for="userMobile">Mobile Number *</label>
                        <input type="tel" id="userMobile" class="form-mobile" name="mobile"  pattern="[0-9]{10}"
    maxlength="10" placeholder="Enter your mobile number" required>
                    </div>
                    <div class="form-group mb-1">
                        <label for="userMsg">Your Message *</label>
                        <textarea id="userMsg" class="form-message" name="message" rows="4" placeholder="How can we help you today?" required></textarea>
                    </div>
                    <button type="submit" class="btn-submit-form">
                        Submit Request <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>
                <style>
/* Ultra Compact Popup Form */
.modern-contact-form {
    padding: 5px 7px;
    background: #fff;
    border-radius: 6px;
}

.modern-contact-form .form-title {
    font-size: 14px;
    margin-bottom: 5px;
    text-align: center;
    font-weight: 600;
}

.modern-contact-form .form-group {
    margin-bottom: 0px !important;
}

.modern-contact-form label {
    display: block;
    font-size: 11px;
    font-weight: 500;
    margin-bottom: 0px!important;
}

.modern-contact-form input,
.modern-contact-form textarea {
    width: 100%;
    height: 22px;
    padding: 2px 2px;
    font-size: 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

.modern-contact-form textarea {
    height: 55px;
    resize: none;
    padding-top: 6px;
}

.btn-submit-form {
    width: 100%;
    height: 34px;
    margin-top: 6px;
    font-size: 13px;
    font-weight: 600;
    border: none;
    border-radius: 4px;
    background: #0d6efd;
    color: #fff;
    cursor: pointer;
}

.btn-submit-form:hover {
    background: #0b5ed7;
}
</style>
      </div>
      
    </div>
  </div>
</div>