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
                My Contacts
              </h1>
            </header>

            <section>
              <div class="row">
                <div class="col">
                  <p>
                    This is a demo App built for the purpose of demonstrating
                    Bootstrap v5.
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <p>
                    <a
                      class="btn btn-primary btn-lg"
                      href="login.php"
                      role="button"
                      >Get Started &raquo;</a
                    >
                  </p>
                </div>
              </div>
            </section>
          </div>
        </div>

        <?php include 'inc/footer.php';?>
      </div>
    </main>

    <?php include 'inc/scripts.php';?>
    <!-- Page specific JS includes here -->
  </body>
</html>
