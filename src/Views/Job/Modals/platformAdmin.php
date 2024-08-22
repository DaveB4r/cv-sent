<div class="modal fade" id="createPlatformModal" tabindex="-1" aria-labelledby="createPlatformModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Platforms Management</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="create_platform">
          <h3 class="ubuntu-bold">Create Platform</h3>
          <div class="row mb-3">
            <div class="col-10">
              <label for="name" class="form-label w-100">Name
                <input name="name" id="name" type="text" class="form-control" required>
              </label>
            </div>
            <div class="col-2">
              <button type="submit" class="btn btn-outline-primary mt-4">Save</button>
            </div>
          </div>
        </form>
        <div class="container">
          <div id="div-message-platform" class="alert alert-success alert-dismissible fade d-none" role="alert">
            <strong id="div-text-platform"></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <iframe id="iframe-platforms" src="/platforms" frameborder="0" class="w-100"></iframe>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>