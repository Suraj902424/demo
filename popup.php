<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Contact Form</title>
  <style>
    #alert-box {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      padding: 15px;
      text-align: center;
      font-weight: bold;
      z-index: 9999;
    }
    .success {
      background-color: #4CAF50;
      color: white;
    }
    .error {
      background-color: #f44336;
      color: white;
    }
  </style>
</head>
<body>

  <!-- ✅ Top Alert Banner -->
  <div id="alert-box"></div>

  <!-- ✅ Contact Form -->
  <form method="post" action="contact-save.php">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="phone" placeholder="Phone" required><br>
    <input type="text" name="website" placeholder="Website" required><br>
    <textarea name="message" placeholder="Your Message" required></textarea><br>
    <button type="submit">Submit Now</button>
  </form>

  <!-- ✅ JavaScript for Alert -->
  <script>
    const params = new URLSearchParams(window.location.search);
    const status = params.get('status');
    const alertBox = document.getElementById('alert-box');

    if (status === 'success') {
      alertBox.className = 'success';
      alertBox.textContent = '✅ Your message has been submitted successfully.';
      alertBox.style.display = 'block';
    } else if (status === 'error') {
      alertBox.className = 'error';
      alertBox.textContent = '❌ There was an error submitting the form.';
      alertBox.style.display = 'block';
    }

    if (status) {
      setTimeout(() => {
        alertBox.style.display = 'none';
      }, 5000);
    }
  </script>

</body>
</html>
