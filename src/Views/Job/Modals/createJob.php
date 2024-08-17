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
                  <input type="text" class="form-control">
                </label>
              </div>
              <div class="col">
                <label for="company" class="form-label">Platform
                  <input type="text" class="form-control">
                </label>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label for="company" class="form-label">Stage
                  <input type="text" class="form-control">
                </label>
              </div>
              <div class="col">
                <label for="company" class="form-label w-100">Day Applied
                  <input type="date" class="form-control">
                </label>
              </div>
            </div>
            <div class="row mb-3 d-grid">
              <label for="company" class="form-label">Url
                <input type="text" class="form-control">
              </label>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label mx-2"><input type="checkbox"> PHP</label>
                <label class="form-label mx-2"><input type="checkbox"> CSS</label>
                <label class="form-label mx-2"><input type="checkbox"> JS</label>
                <label class="form-label mx-2"><input type="checkbox"> HTML</label>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline-primary">Save changes</button>
        </div>
      </div>
    </form>
  </div>
</div>