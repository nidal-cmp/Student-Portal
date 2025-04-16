<?php
include 'db_config.php';

$query = "SELECT * FROM students ORDER BY student_id ASC";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Records</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 40px 20px;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(-45deg, #1a1aff, #000000, #000033, #003366);
      background-size: 400% 400%;
      animation: gradient 15s ease infinite;
      color: white;
      overflow-x: hidden;
    }

    @keyframes gradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .background-text {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 450px;
      font-weight: 900;
      color: rgba(255, 255, 255, 0.07);
      text-shadow: 0 0 40px rgba(0, 255, 255, 0.25);
      user-select: none;
      pointer-events: none;
      white-space: nowrap;
      z-index: 1;
    }

    .container {
      position: relative;
      z-index: 2;
      max-width: 1200px;
      margin: auto;
      background-color: rgba(255, 255, 255, 0.05);
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      backdrop-filter: blur(10px);
    }

    h2 {
      text-align: center;
      color: #00ffff;
      margin-bottom: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 12px;
      overflow: hidden;
    }

    th, td {
      padding: 14px 16px;
      text-align: left;
    }

    th {
      background-color: #00ccff;
      color: black;
    }

    tr {
      transition: background 0.3s ease;
    }

    tr:nth-child(even) {
      background-color: rgba(255, 255, 255, 0.05);
    }

    tr:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }

    .delete-btn {
      background-color: #ff4d4d;
      color: white;
      padding: 8px 12px;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .delete-btn:hover {
      background-color: #e60000;
    }

    .back-btn {
      display: inline-block;
      background-color: #00ccff;
      color: black;
      padding: 12px 24px;
      border-radius: 10px;
      text-decoration: none;
      font-weight: bold;
      margin-top: 20px;
      transition: background 0.3s ease;
    }

    .back-btn:hover {
      background-color: #0099cc;
    }

    .btn-container {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>

<div class="background-text">CMP</div>

<div class="container">
  <h2>📚 Registered Students</h2>

  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Course</th>
      <th>Address</th>
      <th>Joined</th>
      <th>Action</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo $row['student_id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['course']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['date_of_join']; ?></td>
        <td>
          <form method="POST" action="delete.php" onsubmit="return confirm('Are you sure you want to delete this student?');">
            <input type="hidden" name="student_id" value="<?php echo $row['student_id']; ?>">
            <button type="submit" class="delete-btn">Delete</button>
          </form>
        </td>
      </tr>
    <?php } ?>
  </table>

  <div class="btn-container">
    <a href="home.php" class="back-btn">🏠 Back to Home</a>
  </div>
</div>

</body>
</html>
