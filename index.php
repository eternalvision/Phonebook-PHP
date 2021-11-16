<?php include("components/header.php") ?>

<?php echo "<script>const userCheck = \"".$_COOKIE['id']."\";</script>"; ?>

<h1 class="auth-title">Phone Book</h1>
<div class="container">
  <?php if($_COOKIE['user'] == ''):?>
    <ul class="auth-list">
          <li>
          <section class="registration">
            <h2>REGISTRATION</h2>
            <form class="reg-form" action="./validation-form/check.php" method="post">

              <label>Login
                <input type="text" class="form-control" name="login" id="login" placeholder="Enter login" required/>
              </label>

              <label>
                Name
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required/>
              </label>

              <label>Password
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter password" required/>
              </label>

              <button id="btn-register" type="submit" class="btn btn__primary">Register</button>
            </form>
          </section>
        </li>

        <li>
          <section class="login">
            <h2>LOG IN</h2>
            <form class="login-form" action="./validation-form/auth.php" method="post">

              <label>
                Login
                <input type="text" class="form-control" name="login" id="login" placeholder="Enter login" required/>
              </label>

              <label>
                Password
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter password" required/>
              </label>
              <button id="btn-login" type="submit" class="btn btn__primary btn-login">Log in</button>
            </form>
          </section>

        </li>
      </ul>
    </div>

      <?php else: ?>
        <div class="container">

          <section class="auth-contacts">
            <p>
              <?=$_COOKIE['user'] ?>,
              <a id="exit" href="exit.php">
                Выйти
              </a>
            </p>

          <!-- <form action="./contacts/getcontact.php" method="post"> -->
          <form method="post">


            <label>Name
            <input id="userName" type="text" name="userName" placeholder="Enter name" class="form-control" required>
            </label>

            <label>Number
            <input id="userNumber" type="tel" name="userNumber" placeholder="Enter number" class="form-control"
              required  title="+380(123)">
            </label>

            <button id="contactBtn" class="btn btn__primary btn__contacts">Add contact</button>

              </form>

            <section>
              <ul id="root">
            <!--
        <li class="contactItem">
          <ul class="render-root">
            <li>
              <span>

              </span>
            </li>
            <li>
              <span>
              <a href="tel:${userName}">

              </a>
              </span>
              <ul class="edit-btn">
                <li>
                  <button class="edit-item">
                    <img src="https://img.icons8.com/plumpy/24/000000/rename.png"/>
                  </button>
                </li>
                <li>
                  <button id="contactDelBtn" class="edit-item">
                  <img src="https://img.icons8.com/plumpy/24/000000/erase.png"/>
                  </button>
                </li>
              </ul>
            </li>

          </ul>
        </li>
       -->

              </ul>
              </section>
          </section>
        </div>
      <?php endif;?>


<?php include("components/footer.php") ?>
