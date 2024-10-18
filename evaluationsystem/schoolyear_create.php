<?php
include('./database/dbconnect.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['submit'])) {
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $status = $_POST['status'];

    $nextYear = $year++;

    try {
      $sql = "INSERT INTO tblschoolyear (annual_year, semester, is_status) VALUES (?, ?, ?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('sss', $year, $semester, $status);
      $stmt->execute();

      if ($stmt->affected_rows > 0) {
        header('location: schoolyear_view.php');
        exit();
      }
    } catch (mysqli_sql_exception $e) {
      error_log('Database error: ' . $e->getMessage());
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage School Year</title>
</head>

<body>
  <div class="container-fluid">
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
      <div id="msg" class="form-group"></div>
      <div class="form-group">
        <label for="year" class="control-label">Year</label>
        <input type="text" class="form-control form-control-sm" name="year" id="year" value="<?php echo isset($year) ? $year . ' - ' . $year + 1 : '' ?>" placeholder="(2019-2020)" required>
      </div>
      <div class="form-group">
        <label for="semester" class="control-label">Semester</label>
        <input type="number" class="form-control form-control-sm" name="semester" id="semester" value="<?php echo isset($semester) ? $semester : '' ?>" required>
      </div>

      <div class="form-group">
        <label for="" class="control-label">Status</label>
        <select name="status" id="status" class="form-control form-control-sm">
          <option value="0" <?php echo isset($status) == 0 ? "selected" : "" ?>>Pending</option>
          <option value="1" <?php echo isset($status) == 1 ? "selected" : "" ?>>Started</option>
          <option value="2" <?php echo isset($status) == 2 ? "selected" : "" ?>>Closed</option>
        </select>
      </div>

      <input type="submit" name="submit" value="Save">
      <input type="reset" name="reset" class="cancelBtn" value="Cancel">

    </form>
  </div>
</body>

</html>