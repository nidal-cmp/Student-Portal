<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Portal</title>
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
      font-size: 450px; /* Made it much bigger */
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

    .register-btn {
      background: linear-gradient(to right, #33ccff, #0099ff);
      color: white;
    }

    .register-btn:hover {
      background: linear-gradient(to right, #0099ff, #33ccff);
    }

    .view-btn {
      background: linear-gradient(to right, #00ffcc, #00b3b3);
      color: black;
    }

    .view-btn:hover {
      background: linear-gradient(to right, #00b3b3, #00ffcc);
    }

    .search-btn {
      background: linear-gradient(to right, #ffcc00, #ff9900);
      color: black;
    }

    .search-btn:hover {
      background: linear-gradient(to right, #ff9900, #ffcc00);
    }

    .delete-btn {
      background: linear-gradient(to right, #ff4d4d, #cc0000);
      color: white;
    }

    .delete-btn:hover {
      background: linear-gradient(to right, #cc0000, #ff4d4d);
    }

  </style>
</head>
<body>

<div class="background-text">CMP</div>

<div class="container">
  <h1>🎓 Student Portal</h1>

  <a href="index.php"><button class="btn register-btn">📝 Register Student</button></a>
  <a href="view.php"><button class="btn view-btn">📋 View Students</button></a>
  <a href="search.php"><button class="btn search-btn">🔍 Search Student</button></a>
  <a href="delete.php"><button class="btn delete-btn">❌ Delete Student</button></a>
</div>

</body>
</html>
