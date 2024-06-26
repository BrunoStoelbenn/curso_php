<!DOCTYPE html>
<html>
  <head>
    <title>Signup</title>
    <meta charset="UTF-8" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"
    />
    <script
      src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"
      defer
    ></script>
    <script src="/js/validation.js" defer></script>
  </head>
  <body>
    <h1>Signup</h1>

    <?php if (isset($_GET['error'])): ?>
    <p style="color: red;"><?php echo htmlspecialchars($_GET['error']); ?></p>
    <?php endif; ?>
    <form action="process-signup.php" method="post" id="signup" novalidate>
      <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required />
      </div>

      <div>
        <label for="email">email</label>
        <input type="email" id="email" name="email" required />
      </div>

      <div>
        <label for="password">Password</label>
        <input
          type="password"
          id="password"
          name="password"
          required
          minlength="8"
        />
      </div>

      <div>
        <label for="password_confirmation">Repeat password</label>
        <input
          type="password"
          id="password_confirmation"
          name="password_confirmation"
          required
        />
      </div>

      <button>Sign up</button>
    </form>
  </body>
</html>
