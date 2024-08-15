<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="/assets/Images/icon.png" alt="logo" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link nav-home active" aria-current="page" href="/"><i class="fa-solid fa-house"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-job" href="#"><i class="fa-solid fa-hammer"></i></a>
        </li>
        <li class="nav-item">
          <form class="d-flex mx-4" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 250px;">
            <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </li>
      </ul>
      <ul class="navbar-nav" style="margin-right: 90px;">
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['username'] ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <p class="dropdown-item text-danger" onclick="logout();" style="cursor: pointer;"><i class="fa fa-sign-out" aria-hidden="true"></i> logout</p>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script>
  function logout() {
    if (confirm("Are you sure to logout?"))
      return (window.location.href = "/logout");
    return false;
  }
</script>