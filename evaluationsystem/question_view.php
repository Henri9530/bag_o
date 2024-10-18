<?php
include('./database/dbconnect.php');
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Student</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.1/dist/full.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">
  <main class="container mx-auto p-6">
    <button class="btn btn-primary mb-4 float-right questionAdd">Add Questionnaire</button>

    <table class="table w-full bg-white shadow-md rounded">
      <thead>
        <tr class="bg-primary text-white">
          <th>Question_Id</th>
          <th>School Year</th>
          <th>Criteria_Id</th>
          <th>Question</th>
          <th>Order by</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `tblquestion`";
        $result = mysqli_query($conn, $sql);

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['question_id'];
            $schid = $row['school_year_id'];
            $criteria = $row['criteria_id'];
            $question = $row['question'];
            $ob = $row['order_by'];

            echo '<tr class="hover:bg-gray-100">
                    <td class="border px-4 py-2">' . $id . '</td>
                    <td class="border px-4 py-2">' . $schid . '</td>
                    <td class="border px-4 py-2">' . $criteria . '</td>
                    <td class="border px-4 py-2">' . $question . '</td>  
                    <td class="border px-4 py-2">' . $ob . '</td>
                    <td class="border px-4 py-2">
                      <a class="btn btn-secondary mr-2" href="question_edit.php?updateid=' . $id . '">Edit</a>
                      <a class="btn btn-danger" href="question_delete.php?deleteid=' . $id . '">Delete</a>
                    </td>
                  </tr>';
          }
        }
        ?>
      </tbody>
    </table>
  </main>

  <div id="questionModal" class="modal">
    <div class="modal-content">
      <span class="close" id="closeModalBtn">&times;</span>
      <div id="modal-body-content"></div>
    </div>
  </div>

  <script>
    const modal = document.getElementById("questionModal");
    const openModalBtn = document.querySelector(".questionAdd");
    const closeModalBtn = document.getElementById("closeModalBtn");
    const modalBodyContent = document.getElementById("modal-body-content");

    openModalBtn.addEventListener('click', function() {
      modal.style.display = "block";

      // Use AJAX to load the form
      const xhr = new XMLHttpRequest();
      xhr.open("GET", "create_ques.php", true);
      xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
          modalBodyContent.innerHTML = xhr.responseText; // Load form into modal
        }
      };
      xhr.send();
    });

    closeModalBtn.addEventListener('click', function() {
      modal.style.display = "none";
    });

    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    };
  </script>
</body>

</html>
