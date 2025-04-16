<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Search Student</title>
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
      max-width: 500px;
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

    .search-btn {
      background: linear-gradient(to right, #ffcc00, #ff9900);
      color: black;
    }

    .search-btn:hover {
      background: linear-gradient(to right, #ff9900, #ffcc00);
    }

    .home-btn {
      background: linear-gradient(to right, #99ff66, #33cc33);
      color: black;
    }

    .home-btn:hover {
      background: linear-gradient(to right, #33cc33, #99ff66);
    }

    .result {
      background: rgba(255, 255, 255, 0.1);
      padding: 15px;
      border-radius: 12px;
      margin: 20px 0;
      text-align: left;
    }

    .message {
      margin-top: 20px;
      font-size: 16px;
      font-weight: bold;
    }

    hr {
      border: 0;
      height: 1px;
      background: #00ffff;
      margin: 15px 0;
    }
  </style>
</head>
<body>

  <div class="background-text">CMP</div>

  <div class="container">
    <h1>🔍 Search Student</h1>

    <form method="GET">
      <input type="text" name="query" placeholder="Enter Student ID or Name" required>
      <button type="submit" class="btn search-btn">Search</button>
    </form>

    <?php
    if (isset($_GET['query'])) {
        include 'db_config.php';
        $query = $_GET['query'];
        $result = mysqli_query($conn, "SELECT * FROM students WHERE student_id='$query' OR name LIKE '%$query%'");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='result'>";
                echo "<strong>ID:</strong> {$row['student_id']}<br>";
                echo "<strong>Name:</strong> {$row['name']}<br>";
                echo "<strong>Email:</strong> {$row['email']}<br>";
                echo "<strong>Phone:</strong> {$row['phone']}<br>";
                echo "<strong>Course:</strong> {$row['course']}<br>";
                echo "<strong>Address:</strong> {$row['address']}<br>";
                echo "<strong>Date of Join:</strong> {$row['date_of_join']}";
                echo "</div><hr>";
            }
        } else {
            echo "<div class='message' style='color: #ff4d4d;'>❌ No student found.</div>";
        }
    }
    ?>

    <a href="home.php"><button class="btn home-btn">🏠 Back to Home</button></a>

  </div>

</body>
</html>
