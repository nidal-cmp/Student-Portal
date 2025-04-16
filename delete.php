<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Delete Student</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      margin: 0;
      background: linear-gradient(-45deg, #000000, #1a1aff, #000033, #003366);
      background-size: 400% 400%;
      animation: gradient 10s ease infinite;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      overflow: hidden;
    }

    @keyframes gradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .background-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 450px;
      font-weight: 900;
      color: rgba(255, 255, 255, 0.08);
      text-shadow: 0 0 40px rgba(0, 255, 255, 0.25);
      user-select: none;
      pointer-events: none;
      white-space: nowrap;
      z-index: 1;
    }

    .container {
      background: rgba(255, 255, 255, 0.05);
      padding: 40px;
      border-radius: 20px;
      text-align: center;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
      backdrop-filter: blur(10px);
      width: 90%;
      max-width: 400px;
      position: relative;
      z-index: 2;
    }

    h1 {
      color: #00ffff;
      margin-bottom: 30px;
    }

    input[type="text"] {
      width: 100%;
      padding: 12px;
      margin: 12px 0;
      border-radius: 10px;
      border: none;
      font-size: 16px;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 15px;
      margin: 10px 0;
      border: none;
      border-radius: 12px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .delete-btn {
      background: linear-gradient(to right, #ff4d4d, #cc0000);
      color: white;
    }

    .delete-btn:hover {
      background: linear-gradient(to right, #cc0000, #ff4d4d);
    }

    .home-btn {
      background: linear-gradient(to right, #99ff66, #33cc33);
      color: black;
    }

    .home-btn:hover {
      background: linear-gradient(to right, #33cc33, #99ff66);
    }

    .message {
      margin-top: 20px;
      font-size: 16px;
      font-weight: bold;
    }

  </style>
</head>
<body>

<div class="background-text">CMP</div>

<div class="container">
  <h1>❌ Delete Student Record</h1>

  <form method="POST">
    <input type="text" name="student_id" placeholder="Enter Student ID" required>
    <button type="submit" class="btn delete-btn">Delete</button>
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      include 'db_config.php';
      $id = $_POST['student_id'];
      $result = mysqli_query($conn, "DELETE FROM students WHERE student_id='$id'");

      if ($result && mysqli_affected_rows($conn) > 0) {
          echo "<div class='message' style='color: #00ffcc;'>✅ Student with ID $id deleted successfully.</div>";
      } else {
          echo "<div class='message' style='color: #ff4d4d;'>❌ Failed to delete. Check the ID.</div>";
      }
  }
  ?>

  <!-- Back to Home button -->
  <a href="home.php"><button class="btn home-btn">🏠 Back to Home</button></a>

</div>

</body>
</html>
