<div class="modal fade" id="createJobModal" tabindex="-1" aria-labelledby="createJobModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="create_job">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Create a Job Request</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row mb-3">
              <div class="col">
                <label for="company" class="form-label">Company
                  <input type="text" name="company" id="company" class="form-control">
                </label>
              </div>
              <div class="col">
                <label for="platform_id" class="form-label w-100">Platform
                  <select name="platform_id" id="platform_id" class="form-control " required>
                    <option value=""></option>
                    <?php if ($platforms->rowCount() > 0): ?>
                      <?php foreach ($platforms->fetchAll(PDO::FETCH_ASSOC) as $platform): ?>
                        <option value="<?= $platform['id'] ?>"><?= $platform['name'] ?></option>
                      <?php endforeach ?>
                    <?php endif ?>
                  </select>
                </label>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label for="stage" class="form-label">Stage
                  <select name="stage" id="stage" class="form-control">
                    <option value=""></option>
                    <option value="1">Application sent</option>
                    <option value="2">First interview</option>
                    <option value="3">Second interview</option>
                    <option value="4">RH interview</option>
                    <option value="5">Technical interview</option>
                    <option value="6">Final interview</option>
                    <option value="7">Job obtained</option>
                    <option value="0">Rejected</option>
                  </select>
                </label>
              </div>
              <div class="col">
                <label for="day_applied" class="form-label w-100">Day Applied
                  <input type="date" name="day_applied" id="day_applied" class="form-control">
                </label>
              </div>
            </div>
            <div class="row mb-3 d-grid">
              <label for="url" class="form-label">Url
                <input type="text" id="url" name="url" class="form-control">
              </label>
            </div>
            <div class="row mb-3">
              <h5 class="ubuntu-bold">Stack</h5>
              <div class="col">
                <?php if ($stacks->rowCount() > 0): ?>
                  <?php foreach ($stacks->fetchAll(PDO::FETCH_ASSOC) as $stack): ?>
                    <label class="form-label mx-2"><input type="checkbox" name="stacks[]" value="<?= $stack['name'] ?>" > <?= $stack['name'] ?></label>
                  <?php endforeach ?>
                <?php endif ?>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-outline-primary">Save changes</button>
        </div>
      </div>
    </form>
  </div>
</div>