<?php
include 'db_config.php';

$student_id = $_POST['student_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];
$address = $_POST['address'];
$date_of_join = $_POST['date_of_join'];

$sql = "INSERT INTO students VALUES ('$student_id', '$name', '$email', '$phone', '$course', '$address', '$date_of_join')";

$resultMessage = "";
if (mysqli_query($conn, $sql)) {
    $resultMessage = "🎉 <strong>Student Registered Successfully!</strong>";
} else {
    $resultMessage = "❌ <strong>Error:</strong> " . mysqli_error($conn);
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Registration Status</title>
  <style>
    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
    }

    body {
      height: 100vh;
      background: linear-gradient(-45deg, #1a1aff, #000000, #000033, #003366);
      background-size: 400% 400%;
      animation: gradientBG 15s ease infinite;
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      overflow: hidden;
    }

    @keyframes gradientBG {
      0% {background-position: 0% 50%;}
      50% {background-position: 100% 50%;}
      100% {background-position: 0% 50%;}
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
      background-color: rgba(255, 255, 255, 0.05);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
      text-align: center;
      backdrop-filter: blur(10px);
      width: 90%;
      max-width: 500px;
      position: relative;
      z-index: 2;
    }

    h2 {
      font-size: 28px;
      margin-bottom: 20px;
      color: #00ffff;
    }

    .status {
      font-size: 18px;
      margin: 20px 0;
      color: #ffffff;
    }

    a {
      display: inline-block;
      background: #00ccff;
      color: black;
      padding: 12px 25px;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 600;
      margin: 10px;
      transition: 0.3s;
    }

    a:hover {
      background: #00aaff;
      transform: scale(1.05);
    }

    .emoji {
      font-size: 48px;
    }
  </style>
</head>
<body>

  <div class="background-text">CMP</div>

  <div class="container">
    <div class="emoji">✅</div>
    <h2>Registration Status</h2>
    <div class="status"><?php echo $resultMessage; ?></div>
    <a href="index.php">🔁 Register Another Student</a>
    <a href="view.php">📋 View All Students</a>
  </div>

</body>
</html>
