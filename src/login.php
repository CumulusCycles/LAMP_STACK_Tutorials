<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'inc/head.php';?>
    <!-- Page specific CSS includes here -->
  </head>

  <body>
    <?php include 'inc/nav.php';?>

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
                Login
              </h1>
            </header>

            <section>
              <form
                id="actionForm"
                action="contacts.php"
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
                      required
                      autofocus
                    />
                    <div class="invalid-feedback">
                      Please enter a valid email address.
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
                    <button type="submit" class="btn btn-primary">
                      Login &raquo;
                    </button>
                    <button type="reset" class="btn btn-secondary mx-2">
                      Clear
                    </button>
                  </div>
                </div>
              </form>

              <p>
                Don't have an account?
                <a href="register.php" title="Register">Register now</a>.
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
