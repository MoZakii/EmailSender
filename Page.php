<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Contact Form</title>
</head>
<body>
  <form action="process.php" method="post">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
      <label for="subject" class="form-label">Subject</label>
      <input type="text" name="subject" class="form-control" id="subject">
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Message</label>
      <input type="text" name="message" class="form-control" id="message">
    </div>
    <button type="submit" class="btn btn-primary">Send message</button>
  </form>
  <?php if (isset($_GET['error'])): ?>
  <p style="color: red;"><?php echo htmlspecialchars($_GET['error']); ?></p>
  <?php endif; ?>
</body>
</html>