<div class="d-flex justify-content-center align-items-center container mt-4">
  <div class="card">
    <?php if (isset($_SESSION['message'])) : ?>
      <div class="alert alert-<?= $_SESSION['message'] == "error" ? "danger" : "success" ?> alert-dismissible fade show" role="alert">
        <strong><?= $_SESSION['message'] == 'error' ? "The passwords don't match." : "Password changed successfully." ?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif ?>
    <div class="card-header">
      <h3 class="ubuntu-bold">Profile</h3>
    </div>
    <div class="card-body">
      <div class="form-group">
        <h5 class="ubuntu-bold">Username</h5>
        <p class="ubuntu-ligth"><?= $_SESSION['username'] ?></p>
      </div>
      <div class="form-group">
        <h5 class="ubuntu-bold">Email</h5>
        <p class="ubuntu-ligth"><?= $_SESSION['email'] ?></p>
      </div>
      <div class="form-group">
        <h5 class="ubuntu-bold">Chage Password</h5>
        <form action="/change-pass" method="POST">
          <div class="mb-3">
            <label for="current_password" class="form-label">Current Password
              <input type="password" name="current_password" id="current_password" class="form-control" required>
            </label>
          </div>
          <div class="mb-3">
            <label for="new_password" class="form-label">New Password
              <input type="password" name="new_password" id="new_password" class="form-control" required>
            </label>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Change</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>