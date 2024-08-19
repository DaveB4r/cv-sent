<div class="d-flex justify-content-center align-items-center container mt-4">
  <div class="card w-100">
    <?php if (isset($_SESSION['message'])) : ?>
      <div class="alert alert-<?= $_SESSION['message'] == "error" ? "danger" : "success" ?> alert-dismissible fade show" role="alert">
        <strong><?= $_SESSION['message'] == 'error' ? "The passwords don't match." : "Password changed successfully." ?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif ?>
    <div class="card-header">
      <div class="d-flex justify-content-between align-items-center p-0">
        <h3 class="ubuntu-bold">Jobs Hunting</h3>
        <div class="">
          <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#createJobModal"  <?= $canAddJob ?>>New Job</button>
          <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#createPlatformModal" >New Platform</button>
          <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#createStackModal" >New Stack</button>
        </div>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-stripped table-bordered">
        <thead>
          <tr>
            <th>Company</th>
            <th>Platform</th>
            <th>Stage</th>
            <th>Day</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Quiroga Laws Pll</td>
            <td>Indeed</td>
            <td>Technical Interview</td>
            <td>22-05-2024</td>
            <td>delete</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>