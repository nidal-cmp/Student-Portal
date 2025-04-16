<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Registration</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #000000, #1a1aff);
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      animation: gradientShift 10s infinite alternate;
      overflow: hidden;
    }

    @keyframes gradientShift {
      0% { background: linear-gradient(135deg, #000000, #1a1aff); }
      100% { background: linear-gradient(135deg, #1a1aff, #000000); }
    }

    .background-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 450px; /* Updated from 300px to 450px */
      font-weight: 900;
      color: rgba(255, 255, 255, 0.06);
      text-shadow: 0 0 30px rgba(0, 255, 255, 0.2);
      user-select: none;
      pointer-events: none;
      white-space: nowrap;
      z-index: 1;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.08);
      padding: 20px 25px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.35);
      width: 100%;
      max-width: 350px;
      backdrop-filter: blur(8px);
      position: relative;
      z-index: 2;
    }

    h2 {
      text-align: center;
      margin-bottom: 15px;
      color: #00e6e6;
      font-size: 20px;
    }

    label {
      display: block;
      margin-bottom: 3px;
      font-weight: bold;
      font-size: 11px;
    }

    input, textarea {
      width: 100%;
      padding: 6px;
      margin-bottom: 10px;
      border: none;
      border-radius: 5px;
      font-size: 12px;
    }

    textarea {
      resize: none;
    }

    button {
      width: 100%;
      background: #00e6e6;
      color: black;
      border: none;
      padding: 8px;
      font-size: 13px;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background: #00cccc;
    }

    .link-btn {
      display: block;
      text-align: center;
      margin-top: 10px;
      color: #00e6e6;
      text-decoration: none;
      font-weight: bold;
      font-size: 12px;
    }

    .link-btn:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="background-text">CMP</div>

  <div class="container">
    <h2>🎓 Register</h2>
    <form action="submit.php" method="POST">
      <label for="student_id">ID:</label>
      <input type="text" name="student_id" id="student_id" required>

      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required>

      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required>

      <label for="phone">Phone:</label>
      <input type="text" name="phone" id="phone" required>

      <label for="course">Course:</label>
      <input type="text" name="course" id="course" required>

      <label for="address">Address:</label>
      <textarea name="address" id="address" rows="1"></textarea>

      <label for="date_of_join">Join Date:</label>
      <input type="date" name="date_of_join" id="date_of_join" required>

      <button type="submit">Register</button>
    </form>

    <a class="link-btn" href="view.php">📄 View Students</a>
    <a class="link-btn" href="home.php">🏠 Home</a>
  </div>

</body>
</html>
