<?php
include('./database/dbconnect.php');
include("admin/function/questionnaire_function.php");
include("header.php");
session_start();

// Process form submission to create a question
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['submit'])) {
    $school_year_id = $_POST['school_year_id'];
    $question = $_POST['question'];
    $criteria_id = $_POST['criteria_id'];

    // Validate input
    if (!empty($criteria_id) && !empty($question) && !empty($school_year_id)) {
      createQuestion($school_year_id, $question, $criteria_id);
      header('location:create_ques.php');
      exit();
    }
  }
}

// Fetch the list of questions grouped by criteria
$questionList = displayCriteriaWithQuestions();
?>

<?php

include("./database/dbconnect.php");
include("criteria.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['submit'])) {
    $criteria = $_POST['criteria'];


  }
}
$criteriaList = displayCriteria();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <section class="p-6">
    <div class="flex w-full flex-col lg:flex-row gap">

      <div class="card bg-base-300 rounded-box flex-grow p-4 mx-5">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="space-y-4">
          <div class="form-control">
            <label for="school_year_id" class="label">
              <span class="label-text">School Year</span>
            </label>
            <select name="school_year_id" id="school_year_id" class="select select-bordered" required>
              <option value="" disabled selected>Select School Year</option>
              <?php
              $schoolYears = $conn->query("SELECT * FROM tblschoolyear ORDER BY annual_year ASC");
              while ($row = $schoolYears->fetch_assoc()):
                ?>
                <option value="<?php echo $row['school_year_id']; ?>">
                  <?php echo htmlspecialchars($row['annual_year'] . " - " . ($row['annual_year'] + 1)); ?>
                </option>
              <?php endwhile; ?>
            </select>
          </div>
          <div class="form-control">
            <label for="criteria_id" class="label">
              <span class="label-text">Criteria</span>
            </label>
            <select name="criteria_id" id="criteria_id" class="select select-bordered" required>
              <option value="" disabled selected>Select Criteria</option>
              <?php
              $criteria = $conn->query("SELECT * FROM tblcriteria ORDER BY abs(order_by) ASC");
              while ($row = $criteria->fetch_assoc()):
                ?>
                <option value="<?php echo $row['criteria_id']; ?>"><?php echo htmlspecialchars($row['criteria']); ?>
                </option>
              <?php endwhile; ?>
            </select>
          </div>
          <div class="form-control">
            <input type="text" name="question" placeholder="Create question" required
              class="input input-bordered w-full" />
          </div>
          <div>
            <input type="submit" name="submit" value="Create Question"
              class="btn btn-sm px-5 text-lg btn-outline btn-content-accent" />
            <button class="btn btn-sm  btn-outline btn-content-accent text-lg" onclick="my_modal_1.showModal()">Create
              Criteria</button>
            <dialog id="my_modal_1" class="modal">
              <div class="modal-box max-w-md w-full">
                <h2 class="text-lg font-bold mb-4">Create Criteria</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="space-y-4">
                  <div class="form-control">
                    <input type="text" name="criteria" placeholder="Create Criteria"  autocomplete="off"
                      class="input input-bordered w-full" />
                  </div>
                  <div>
                    <input type="submit" name="create_criteria" value="Create"
                      class="btn btn-sm px-5 text-lg btn-outline btn-accent mt-3" />
                  </div>
                </form>

                <div id="criterialist" class="mt-4">
                  <?php if (count($criteriaList) > 0): ?>
                    <h3 class="text-md font-semibold">Existing Criteria:</h3>
                    <div>
                      <?php foreach ($criteriaList as $listCriteria): ?>
                        <div class="py-2"><?php echo htmlspecialchars($listCriteria); ?></div>
                      <?php endforeach; ?>
                    </div>
                  <?php else: ?>
                    <div>No Criteria Available</div>
                  <?php endif; ?>
                </div>

                <div class="modal-action">
                  <form method="dialog">
                    <button class="btn">Close</button>
                  </form>
                </div>
              </div>
            </dialog>

          </div>
        </form>
      </div>
      <div class="card bg-base-300 rounded-box flex-grow p-4">
        <div id="questionlist" class="p-4">
          <?php if (count($questionList) > 0): ?>
            <?php foreach ($questionList as $criteria => $questions): ?>
              <div class="mb-6">
                <h3 class="text-xl font-bold mb-2"><?php echo htmlspecialchars($criteria); ?></h3>
                <ol class="list-decimal pl-6">
                  <?php if (count($questions) > 0): ?>
                    <?php foreach ($questions as $index => $listQuestion): ?>
                      <li class="mb-4">
                        <span><?php echo htmlspecialchars($listQuestion); ?></span>

                        <!-- Radio buttons for rating 1-5 -->
                        <div class="mt-2">
                          <?php for ($i = 1; $i <= 5; $i++): ?>
                            <label class="inline-flex items-center mr-4">
                              <input type="radio" name="rating[<?php echo $index; ?>]" value="<?php echo $i; ?>" class="radio"
                                required>
                              <span class="ml-2"><?php echo $i; ?></span>
                            </label>
                          <?php endfor; ?>
                        </div>
                      </li>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <li class="text-gray-500">No questions available for this criteria.</li>
                  <?php endif; ?>
                </ol>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <div class="text-gray-500">No Criteria Available</div>
          <?php endif; ?>
        </div>
      </div>
    </div>



  </section>
</body>

</html>