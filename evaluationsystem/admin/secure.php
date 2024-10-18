<!-- <?php
      // include('database/dbconnect.php');
      // session_start(); // Start a new session or resume the existing session

      // if ($_SERVER["REQUEST_METHOD"] === "POST") {
      //   $username = $_POST['username'];
      //   $password = $_POST['password'];

      //   // Check if the username starts with "admin_" for admin users
      //   if (strpos($username, 'admin_') === 0) {
      //     // Admin authentication logic
      //     loginAdmin($username, $password);
      //   } else {
      //     // Validate username length for regular users
      //     if (strlen($username) > 10) {
      //       die('Username too long for regular users! Maximum allowed is 10 characters.');
      //     }

      //     // Regular user authentication logic
      //     loginUser($username, $password);
      //   }
      // }

      // // Admin login logic
      // function loginAdmin($username, $password)
      // {
      //   // Normally you would check these credentials against a database
      //   $uadmin = "SELECT * FROM admin WHERE (email = ? OR username = ?)";
      //   $padmin = "SELECT * FROM admin WHERE password = ?)";
      //   $adminUsers = [
      //     $uadmin => $padmin // Example admin users
      //   ];

      //   // Check if the username exists in the admin users array
      //   if (isset($adminUsers[$username]) && $adminUsers[$username] === $password) {
      //     $_SESSION['username'] = $username; // Store username in session
      //     // $_SESSION['role'] = 'admin'; // You can store user role if needed
      //     header('location: adminDashboard.php');
      //     echo "Admin login successful. Welcome, $username!";
      //   } else {
      //     die("Invalid admin credentials.");
      //   }
      // }

      // // User login logic
      // function loginUser($username, $password)
      // {
      //   // Normally you would check these credentials against a database
      //   $schoolid = "SELECT * FROM tblstudent WHERE school_id = ?";
      //   $pstudent = "SELECT * FROM tblstudent WHERE password = ?)";
      //   $studentUsers = [
      //     $schoolid => $pstudent // Example regular users
      //   ];

      //   // Check if the username exists in the regular users array
      //   if (isset($studentUsers[$username]) && $studentUsers[$username] === $password) {
      //     $_SESSION['username'] = $username; // Store username in session
      //     // $_SESSION['role'] = 'user'; // You can store user role if needed
      //     header('location: studentDashboard.php');

      //     echo "User login successful. Welcome, $username!";
      //   } else {
      //     die("Invalid user credentials.");
      //   }
      // }

      // function isAdminUser($username, $password)
      // {
      //   $ad = loginAdmin($username, $password);
      //   // Define the logic for admin users here.
      //   // Example: checking against an array of admin usernames.
      //   $adminUsers = [$ad[$username] => $ad[$password]];
      //   return in_array($username, $adminUsers);
      // }
      ?> -->
<!-- <?php
      // include('./database/dbconnect.php');
      // session_start();
      // if ($_SERVER['REQUEST_METHOD'] == "POST") {
      //   if (isset($_POST['submit'])) {
      //     $username = $_POST['username'];
      //     $password = $_POST['password'];

      //     // Check if the input is a valid student school ID (exactly 7 characters)
      //     if (strlen($username) == 7 && is_numeric($username)) {
      //       if (empty($username)) {
      //         die('School id is required');
      //       }
      //       if (empty($password)) {
      //         die('Password is required');
      //       }
      //       // Assume it's a student login using school ID
      //       try {
      //         $sql = "SELECT * FROM tblstudent WHERE school_id = ? AND password = ?";
      //       } catch (mysqli_sql_exception $e) {
      //         $result = mysqli_query($conn, $sql);
      //         if (mysqli_fetch_assoc($result) > 0) {
      //           echo "Student login successful.";
      //           header('location: studentDashboard.php');
      //         } else {
      //           error_log("Login Failed: " . $e->getMessage());
      //           echo "Invalid student credentials.";
      //         }
      //       }
      //       if (!empty($username)) {
      //         if (empty($password)) {
      //           die('School id is required');
      //         }
      //       } elseif (!empty($password)) {
      //         if (empty($username)) {
      //           die('School id is required');
      //         }
      //       }
      //       header('location: studentDashboard.php');
      //     } else {

      //       if (empty($username)) {
      //         die('Username or Email is required');
      //       }
      //       if (empty($password)) {
      //         die('Password is required');
      //       }
      //       // Admin login using either username or email
      //       try {
      //         $sql = "SELECT * FROM admin WHERE username = $username OR email = $password AND password = $password";
      //       } catch (mysqli_sql_exception $e) {
      //         $result = mysqli_query($conn, $sql);
      //         if (mysqli_fetch_assoc($result) > 0) {
      //           echo "Admin login successful.";
      //         } else {
      //           error_log("Login Failed: " . $e->getMessage());
      //           echo "Invalid admin credentials.";
      //         }
      //       }
      //       if (!empty($username)) {
      //         if (empty($password)) {
      //           die('Password is required');
      //         }
      //       } elseif (!empty($password)) {
      //         if (empty($username)) {
      //           die('Username or Email is required');
      //         }
      //       }
      //       header('location: adminDashboard.php');
      //     }
      //   }
      // }
      ?> -->

<!-- <?php
      // include('./database/dbconnect.php');
      // session_start();
      // if ($_SERVER['REQUEST_METHOD'] == "POST") {
      //   if (isset($_POST['submit'])) {
      //     $username = $_POST['username'];
      //     $password = $_POST['password'];

      //     // Check if the input is a valid student school ID (exactly 7 characters)
      //     if (strlen($username) == 7 && is_numeric($username)) {
      //       if (empty($username)) {
      //         die('School id is required');
      //       }
      //       if (empty($password)) {
      //         die('Password is required');
      //       }

      //       // Assume it's a student login using school ID
      //       try {
      //         $sql = "SELECT * FROM tblstudent WHERE school_id = ? AND password = ?";
      //         $stmt = $conn->prepare($sql);
      //         $stmt->bind_param("ss", $username, $password);
      //         $stmt->execute();
      //         $result = $stmt->get_result();

      //         if ($result->num_rows > 0) {
      //           echo "Student login successful.";
      //           header('location: studentDashboard.php');
      //           exit();
      //         } else {
      //           echo "Invalid student credentials.";
      //         }
      //       } catch (mysqli_sql_exception $e) {
      //         error_log("Login Failed: " . $e->getMessage());
      //         echo "Error during student login.";
      //       }

      //       if (!empty($username)) {
      //         if (empty($password)) {
      //           die('Password is required');
      //         }
      //       } elseif (!empty($password)) {
      //         if (empty($username)) {
      //           die('School id is required');
      //         }
      //       }
      //       studentLogin($username, $password);
      //     } else {

      //       if (empty($username)) {
      //         die('Username or Email is required');
      //       }
      //       if (empty($password)) {
      //         die('Password is required');
      //       }

      //       // Admin login using either username or email
      //       try {
      //         $sql = "SELECT * FROM admin WHERE (username = ? OR email = ?) AND password = ?";
      //         $stmt = $conn->prepare($sql);
      //         $stmt->bind_param("sss", $username, $username, $password);
      //         $stmt->execute();
      //         $result = $stmt->get_result();

      //         if ($result->num_rows > 0) {
      //           echo "Admin login successful.";
      //           header('location: adminDashboard.php');
      //           exit();
      //         } else {
      //           echo "Invalid admin credentials.";
      //         }
      //       } catch (mysqli_sql_exception $e) {
      //         error_log("Login Failed: " . $e->getMessage());
      //         echo "Error during admin login.";
      //       }

      //       if (!empty($username)) {
      //         if (empty($password)) {
      //           die('Password is required');
      //         }
      //       } elseif (!empty($password)) {
      //         if (empty($username)) {
      //           die('Username or Email is required');
      //         }
      //       }
      //       adminLogin($username, $password);
      //     }
      //   }
      // }

      ?> -->

<!-- <?php
      // include('./database/dbconnect.php');
      // session_start();
      // if ($_SERVER['REQUEST_METHOD'] == "POST") {
      //   if (isset($_POST['submit'])) {
      //     $username = $_POST['username'];
      //     $password = $_POST['password'];

      //     // Check if the input is a valid student school ID (exactly 7 characters)
      //     if (strlen($username) == 7 && is_numeric($username)) {
      //       if (empty($username)) {
      //         die('School ID is required');
      //       }
      //       if (empty($password)) {
      //         die('Password is required');
      //       }

      //       // Assume it's a student login using school ID
      //       try {
      //         $sql = "SELECT * FROM tblstudent WHERE school_id = ? AND password = ?";
      //         $stmt = $conn->prepare($sql);
      //         $stmt->bind_param("ss", $username, $password);
      //         $stmt->execute();
      //         $result = $stmt->get_result();

      //         if ($result->num_rows > 0) {
      //           // If student login is successful
      //           echo "Student login successful.";
      //           header('location: studentDashboard.php');
      //           exit();
      //         } else {
      //           echo "Invalid student credentials.";
      //         }
      //       } catch (mysqli_sql_exception $e) {
      //         error_log("Login Failed: " . $e->getMessage());
      //         echo "Error during student login.";
      //       }
      //     } else {

      //       if (empty($username)) {
      //         die('Username or Email is required');
      //       }
      //       if (empty($password)) {
      //         die('Password is required');
      //       }

      //       // Admin login using either username or email
      //       try {
      //         $sql = "SELECT * FROM admin WHERE (username = ? OR email = ?) AND password = ?";
      //         $stmt = $conn->prepare($sql);
      //         $stmt->bind_param("sss", $username, $username, $password);
      //         $stmt->execute();
      //         $result = $stmt->get_result();

      //         if ($result->num_rows > 0) {
      //           // If admin login is successful
      //           echo "Admin login successful.";
      //           header('location: adminDashboard.php');
      //           exit();
      //         } else {
      //           echo "Invalid admin credentials.";
      //         }
      //       } catch (mysqli_sql_exception $e) {
      //         error_log("Login Failed: " . $e->getMessage());
      //         echo "Error during admin login.";
      //       }
      //     }
      //   }
      // }
      ?> -->

<?php
include('./database/dbconnect.php');
include('adminLogin.php');
include('./student/studentLogin.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the input is a valid student school ID (exactly 7 characters)
    if (strlen($username) == 7 && is_numeric($username)) {
      if (empty($username)) {
        die('School ID is required');
      }
      if (empty($password)) {
        die('Password is required');
      }
      // Call the student login function
      studentLogin($username, $password);
    } else {
      if (empty($username)) {
        die('Username or Email is required');
      }
      if (empty($password)) {
        die('Password is required');
      }
      // Call the admin login function
      adminLogin($username, $password);
    }
  }
}
?>