<div class="d-flex justify-content-center align-items-center container mt-4">
  <div class="card" style="width: 18rem;">
    <div class="carousel slide">
      <div class="carousel-inner">
        <img src="/assets/Images/sign.jpg" alt="portray" class="card-img-top d-block w-100" height="200" width="300" />
        <div class="carousel-caption d-none d-md-block">
          <h1>Sign Up</h1>
        </div>
      </div>
    </div>
    <div class="card-body">
      <form action="/insert-user" method="post">
        <div class="mb-2 d-grid">
          <label for="username" class="form-label">Username
            <input type="text" name="username" id="username" class="form-control" required />
          </label>
        </div>
        <div class="mb-2 d-grid">
          <label for="email" class="form-label">Email
            <input type="email" id="email" name="email" class="form-control" required />
          </label>
        </div>
        <div class="mb-2 d-grid">
          <label for="password" class="form-label">Password
            <input type="password" name="password" class="form-control" id="password" required />
          </label>
        </div>
        <div class="mb-2 d-grid">
          <input type="submit" value="Sign UP" class="btn btn-primary" />
        </div>
        <div class="d-grid">
          <p class="form-text text-center">Do you already have an account?</p>
          <a class="form-text text-center text-primary" href="signin">Sign In</a>
        </div>
      </form>
    </div>
  </div>
</div>