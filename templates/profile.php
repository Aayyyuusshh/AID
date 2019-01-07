<!-- Modal -->
<div class="modal fade" id="profile_form_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit your profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form id="update_profile_form" onsubmit="return false">
          <div class="form-group">
            <label>User Name</label>
            <input type="text" class="form-control" name="user_name" id="user_name">
            <small id="user_name" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" class="form-control" name="full_name" id="full_name">
            <small id="full_name" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email" >
            <small id="email" class="form-text text-muted"></small>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>