<?php include 'inc/header.php'; ?>
  <img src="/PHP/feedback/img/logo.jpg" class="w-25 mb-3" alt="">
  <h2>Feedback</h2>
  <p class="lead text-center">Leave feedback for the Killa Beez</p>
  <form action="" class="mt-4 w-75">
    <div class="mb-3">
      <label for="name" class="form-label">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Feedback:</label>
      <textarea class="form-control" name="body" id="body" placeholder="Enter your feedback"></textarea>
    </div>
    <div class="mb-3">
      <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
    </div>
  </form>
<?php include 'inc/footer.php'; ?>