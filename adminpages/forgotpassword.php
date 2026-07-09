

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:180px;"  >
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Change Password</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form id="forgotPasswordForm">

                <div class="mb-3">
                    <label class="form-label">Username or Email</label>
                    <input
                                type="text"
                                class="form-control"
                                id="login"
                                name="login"
                                placeholder="Enter Username or Email"
                                required>
                </div>

                <div id="msg" class="alert d-none""></div>

                <button type="submit" class="btn btn-primary w-100">
                    Send Reset Link
                </button>

            </form>
      </div>
      
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="../static/adminjs/fogotpass.js"></script>