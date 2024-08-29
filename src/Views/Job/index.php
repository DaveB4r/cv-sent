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
          <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#createJobModal" <?= $canAddJob ?>>New Job</button>
          <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#createPlatformModal">New Platform</button>
          <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#createStackModal">New Stack</button>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div id="div-message-job" class="alert alert-success alert-dismissible fade d-none" role="alert">
        <strong id="div-text-job"></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <table class="table table-stripped table-bordered">
        <thead>
          <tr>
            <th id="company" class="th-job">Company <i></i></th>
            <th id="platform_name" class="th-job">Platform <i></i></th>
            <th id="stage" class="th-job">Stage <i></i></th>
            <th id="day_applied" class="th-job">Day <i></i></th>
            <th id="stacks" class="th-job">Stack <i></i></th>
            <th>Actions <i></i></th>
          </tr>
        </thead>
      </table>
        <iframe id="iframe-jobs" frameborder="0" class="w-100" style="height: 300px;"></iframe>
      <nav aria-label="Page navigation">
        <ul class="pagination">
          <li class="page-item">
            <button class="page-link paginator" id="previous-page" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </button>
          </li>
          <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
            <li class="page-item"><button class="page-link paginator" id="<?= $i ?>"><?= $i ?></button></li>
          <?php endfor ?>
          <li class="page-item">
            <button class="page-link paginator" id="next-page" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </button>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>