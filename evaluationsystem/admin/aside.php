<?php
include('./database/dbconnect.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <style>
    /* General body styling */
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    /* Sidebar styling */
    aside {
      width: 250px;
      height: 100vh;
      background-color: #091057;
      /* Secondary color */
      color: white;
      position: fixed;
    }

    .sidebar {
      padding: 20px;
    }

    .sidebar img {
      width: 25px;
      margin-right: 10px;
    }

    /* Menu item styles */
    .menu {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .item,
    .items {
      display: block;
      align-items: center;
      padding: 10px 0;
    }

    .item a {
      text-decoration: none;
      color: white;
      font-size: 16px;
      margin-left: 10px;
    }

    /* Hover effect on the sidebar items */
    .item:hover {
      background-color: #0b126c;
      /* Darker shade of the secondary color */
      cursor: pointer;
    }

    hr {
      border: 0;
      height: 1px;
      background-color: white;
      margin: 20px 0;
    }

    /* Main content styling */
    main {
      margin-left: 260px;
      /* Adjust to leave space for the sidebar */
      padding: 20px;
    }
  </style>
</head>

<body>
  <aside>
    <div class="sidebar">
      <div class="menu">
        <img src="pic/hambuger.svg">
      </div>

      <hr>

      <div class="item">
        <img src="pic/dashboard.svg">
        <a href="./admin/adminDashboard.php">Dashboard</a>
      </div>

      <div class="items">
        <div class="item js-item">
          <img src="pic/user.svg">
          <a href="./student_view.php">Manage Student</a>
        </div>

        <div class="item bks">
          <img src="pic/courses.svg">
          <a href="./teacher_view.php">Manage Teacher</a>
        </div>

        <div class="item">
          <img src="pic/inbox.svg">
          <a href="./department_view.php">Manage Department</a>
        </div>

        <div class="item">
          <img src="pic/inbox.svg">
          <a href="./schoolyear_view.php">Manage Academic</a>
        </div>

        <div class="item">
          <img src="pic/inbox.svg">
          <a href="./criteria_view.php">Manage Criteria</a>
        </div>

        <div class="item">
          <img src="pic/inbox.svg">
          <a href="./question_view.php">Manage Questionnaire</a>
        </div>

        <div class="item">
          <img src="pic/inbox.svg">
          <a href="">Manage User</a>
        </div>

        <div class="item">
          <img src="pic/inbox.svg">
          <a href="">Archive</a>
        </div>

      </div>
    </div>
  </aside>

</body>

</html>