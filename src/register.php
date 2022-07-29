<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>My Contacts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/styles.css" />
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">My Contacts</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      <div class="container py-4">
        <div class="bg-light rounded-3">
          <div class="container-fluid">
            <header>
              <h1 class="display-5 fw-bold">
                <img
                  src="img/logo.png"
                  alt="Logo"
                  title="Logo"
                  class="img-fluid img-thumbnail"
                />
                Register
              </h1>
            </header>

            <section>
              <form
                id="actionForm"
                action="login.php"
                class="needs-validation"
                novalidate
              >
                <div class="row">
                  <div class="col-md-5">
                    <label for="email" class="form-label">Email Address</label>
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      aria-describedby="emailHelp"
                      required
                      autofocus
                    />
                    <div class="invalid-feedback">
                      Please enter a valid email address.
                    </div>
                    <div id="emailHelp" class="form-text">
                      We'll never share your email with anyone else.
                    </div>
                  </div>
                </div>

                <div class="row py-2">
                  <div class="col-md-5">
                    <label for="password" class="form-label">Password</label>
                    <input
                      type="password"
                      class="form-control"
                      id="password"
                      required
                    />
                    <div class="invalid-feedback">Please enter a password.</div>
                  </div>
                </div>

                <div class="row py-2">
                  <div class="col-md-5">
                    <label for="confirm" class="form-label">Confirm</label>
                    <input
                      type="password"
                      class="form-control"
                      id="confirm"
                      required
                    />
                    <div class="invalid-feedback">Please enter a password.</div>
                  </div>
                </div>

                <div class="row py-2">
                  <div class="col-md-5">
                    <button type="submit" class="btn btn-primary">
                      Register &raquo;
                    </button>
                    <button type="reset" class="btn btn-secondary mx-2">
                      Clear
                    </button>
                  </div>
                </div>
              </form>

              <p>
                Already have an account?
                <a href="login.php" title="Login">Login now</a>.
              </p>
            </section>
          </div>
        </div>

        <footer class="pt-3 mt-4 text-muted border-top text-end">
          &copy; 2022
        </footer>
      </div>
    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
    <script src="js/validate.js"></script>
  </body>
</html>
