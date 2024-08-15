<div class="d-flex justify-content-center align-items-center container mt-4">
  <div class="card" style="width: 18rem;">
    <div class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/assets/Images/sign.jpg" alt="portray" class="card-img-top d-block w-100" height="200" width="300">
          <div class="carousel-caption d-none d-md-block">
            <h1>Sign In</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <form action="/login" method="POST">
        <div class="mb-3 d-grid">
          <label for="email" class="form-label">Email
            <input type="email" name="email" id="email" class="form-control"/>
          </label>
        </div>
        <div class="mb-3 d-grid">
          <label for="password" class="form-label">Password
            <input type="password" name="password" id="password" class="form-control" />
          </label>
        </div>
        <div class="d-grid">
          <input type="submit" class="btn btn-primary" value="Sign In" />
        </div>
        <div class="mb-3 d-grid">
          <p class="form-text text-center">Don't you already have an account?</p>
          <a href="signup" class="form-text text-center text-primary">Sign Up</a>
        </div>
      </form>
    </div>
  </div>
</div>