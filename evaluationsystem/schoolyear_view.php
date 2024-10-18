<?php
  include("admin/function/academic_function.php");
  include("database/dbconnect.php");

  insertAY($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <section>
    <div class="container-full">
      <div class="navbar bg-[#1E2A5E]">
        <div class="flex-1">
          <a class="btn btn-ghost text-xl text-white" href="./admin/adminDashboard.php">Cebu Eastern College</a>
        </div>
        <div class="flex-none gap-2">
          <div class="form-control">
            <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
          </div>
          <div>
            <button type="submit" class="btn btn-md btn-primary">
              Search
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-full m-5">
      <span class="p-2 text-2xl">Manage Academic</span>
      <div class="mt-4 px-3">
        <button class="btn btn-md btn-outline btn-primary" onclick="my_modal_3.showModal()">
          Add Academic
        </button>

        <dialog id="my_modal_3" class="modal">
          <div class="modal-box max-w-lg w-full">
            <div class="flex justify-between items-center">
              <button class="btn btn-sm btn-circle" onclick="my_modal_3.close()">✕</button>
            </div>
            <div class="flex w-full mt-4">
              <div class="card rounded-box w-full">
                <div class="container mx-auto p-6">
                  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="space-y-4">
                    <h1 class="text-lg font-semibold">Academic Form</h1>
                    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">

                    <div id="msg" class="form-group"></div>

                    <div class="form-control">
                      <label for="year" class="label">
                        <span class="label-text">Year</span>
                      </label>
                      <input type="text" class="input input-bordered input-sm" name="year" id="year"
                        value="<?php echo isset($year) ? $year . ' - ' . ($year + 1) : ''; ?>" placeholder="(2019-2020)"
                        required>
                    </div>

                    <div class="form-control">
                      <label for="semester" class="label">
                        <span class="label-text">Semester</span>
                      </label>
                      <input type="number" class="input input-bordered input-sm" name="semester" id="semester"
                        value="<?php echo isset($semester) ? $semester : ''; ?>" required>
                    </div>

                    <div class="form-control">
                      <label for="status" class="label">
                        <span class="label-text">Status</span>
                      </label>
                      <select name="status" id="status" class="select select-bordered input-sm">
                        <option value="0" <?php echo (isset($status) && $status == 0) ? "selected" : ""; ?>>Pending</option>
                        <option value="1" <?php echo (isset($status) && $status == 1) ? "selected" : ""; ?>>Started</option>
                        <option value="2" <?php echo (isset($status) && $status == 2) ? "selected" : ""; ?>>Closed</option>
                      </select>
                    </div>

                    <div class="flex space-x-2">
                      <input type="submit" name="submit" value="Save" class="btn btn-outline btn-sm btn-accent-content">
                      <input type="reset" name="reset" class="btn btn-outline btn-sm btn-error" value="Cancel">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </dialog>
      </div>
    </div>

    <div class="container-full">
      <div class="overflow-x-auto">
        <table class="table table-zebra text-center">
          <thead class="bg-base-300">
            <tr>
              <th class="text-neutral text-[15px]">Academic Year</th>
              <th class="text-neutral text-[15px]">Semester</th>
              <th class="text-neutral text-[15px]">Is Default</th>
              <th class="text-neutral text-[15px]">Status</th>
              <th class="text-neutral text-[15px]">Operation</th>
              <th class="text-neutral text-[15px]">Action</th>
            </tr>
          </thead>
          <tbody class="bg-base-100">
            <?php
              $i = 1;
              $qry = $conn->query("SELECT * FROM tblschoolyear ORDER BY ABS(annual_year) DESC, ABS(semester) DESC");
              while ($row = $qry->fetch_assoc()):
            ?>
            <tr>
              <th><?php echo $i++ ?></th>
              <td class="text-neutral text-[15px]"><?php echo ($row['annual_year'] . ' - ' . ($row['annual_year'] + 1)) ?></td>
              <td class="text-neutral text-[15px]"><?php echo $row['semester'] ?></td>
              <td class="text-neutral text-[15px]">
                <?php if ($row['is_default'] == 0): ?>
                  <button type="button" class="btn btn-content-accent btn-outline btn-sm " data-id="<?php echo $row['school_year_id'] ?>">No</button>
                <?php else: ?>
                  <button type="button" class="btn btn-content-accent btn-outline btn-sm">Yes</button>
                <?php endif; ?>
              </td>
              <td class="text-neutral text-[15px]">
                <?php if ($row['is_status'] == 0): ?>
                  <span class="p-5">Not yet Started</span>
                <?php elseif ($row['is_status'] == 1): ?>
                  <span class="badge badge-success">Starting</span>
                <?php elseif ($row['is_status'] == 2): ?>
                  <span class="badge badge-primary">Closed</span>
                <?php endif; ?>
              </td>
              <td class="text-neutral text-[15px]">
                <div class="btn-group">
                  <a href="schoolyear_edit.php?updateid=<?php echo $row['school_year_id'] ?>" class="btn btn-accent btn-sm btn-outline">Edit</a>
                  <a href="schoolyear_delete.php?deleteid=<?php echo $row['school_year_id'] ?>" class="btn btn-error btn-sm btn-outline">Delete</a>
                </div>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
