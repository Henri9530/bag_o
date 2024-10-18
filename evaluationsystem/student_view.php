

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
        <a 
          class="btn btn-ghost text-xl text-white"
          href="./admin/adminDashboard.php">Cebu Eastern College</a>
      </div>
      <div class="flex-none gap-2">
        <div class="form-control">
          <input 
          type="text" 
          placeholder="Search" 
          class="input input-bordered w-24 md:w-auto" 
          name="find"/>
        </div>
        <div>
          <button 
            type="submit"
            class="btn btn-md btn-neutral btn-outline text-white"
            name="search">
            Search
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-full m-5">
    <span class="p-2 text-2xl">Student Evaluation Status</span>
    <div class="mt-4 px-3">
      <!-- You can open the modal using ID.showModal() method -->
      <button class="btn btn btn-md btn-outline btn-primary" onclick="my_modal_3.showModal()">
        Add Student
      </button>
      <dialog id="my_modal_3" class="modal">
        <div class="modal-box h-[430px] w-full">
          <div>
            <p class="text-sm font-bold">Press ESC key to close</p>
            <h1 class="text-lg font-semibold">Student Information</h1>
          </div>
          <div class="flex w-full">
            <div class="card rounded-box grid h-[300px] w-full">
              <form 
                action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>"
                method="POST">
                <div class="flex flex-col space-y-4 md:flex-row md:space-y-0 md:space-x-4">
                  <div class="form-control w-full">
                    <label class="label" for="school-id">
                      <span class="label-text text-xl">School ID</span>
                    </label>
                    <input id="school-id" 
                          type="text" 
                          placeholder="School ID" 
                          class="input input-bordered w-full"
                          required
                          name="username"
                          autocomplete="off" />
                  </div>
                </div>

                <div class="flex flex-col space-y-4 md:flex-row md:space-y-0 md:space-x-4">
                  <div class="form-control w-full md:w-1/2">
                    <label class="label" for="password">
                      <span class="label-text text-xl">First Name</span>
                    </label>
                    <input id="password"
                          type="password" 
                          placeholder="First Name" 
                          class="input input-bordered w-full" 
                          required
                          name="text"
                          autocomplete="off" />
                  </div>
                  <div class="form-control w-full md:w-1/2">
                    <label class="label" for="password">
                      <span class="label-text text-xl">Last Name</span>
                    </label>
                    <input id="password"
                          type="password" 
                          placeholder="First Name" 
                          class="input input-bordered w-full" 
                          required
                          name="text"
                          autocomplete="off" />
                  </div>
                </div>
                <div class="flex flex-col space-y-4 md:flex-row md:space-y-0 md:space-x-4">
                  <div class="form-control w-full md:w-1/2">
                    <label class="label" for="password">
                      <span class="label-text text-xl">Email</span>
                    </label>
                    <input id="password"
                          type="email" 
                          placeholder="First Name" 
                          class="input input-bordered w-full" 
                          required
                          name="text"
                          autocomplete="off" />
                  </div>
                  <div class="form-control w-full md:w-1/2">
                    <label class="label" for="password">
                      <span class="label-text text-xl">Password</span>
                    </label>
                    <input id="password"
                          type="password" 
                          placeholder="First Name" 
                          class="input input-bordered w-full" 
                          required
                          name="text"
                          autocomplete="off" />
                  </div>
                </div>
                <div class="form-control w-full pt-5">
                  <button 
                    type="submit"
                    class="btn btn-outline btn-md btn-primary text-lg">Add Student</button>    
                </div>
              </form>
            </div>
          </div>
        </div>
      </dialog>
    </div>
    
  </div>
  <div class="container-full">
      <div class="overflow-x-auto">
        <table class="table text-center border">
          <!-- head -->
          <thead class="bg-base-300">
            <tr>
              <th class="text-neutral text-[15px]">Image</th>
              <th class="text-neutral text-[15px]">First Name</th>
              <th class="text-neutral text-[15px]">Last Name</th>
              <th class="text-neutral text-[15px]">Email</th>
              <th class="text-neutral text-[15px]">Subject</th>
              <th class="text-neutral text-[15px]">Date_Created</th>
              <th class="text-neutral text-[15px]">Status</th>
              <th class="text-neutral text-[15px]">Operation</th>
            </tr>
          </thead>
          <tbody class="bg-base-100">
            <!-- row 1 -->
            <tr>
              <td>
                <div class="flex justify-center items-center gap-3">
                  <div class="avatar">
                    <div class="mask mask-squircle h-12 w-12">
                      <img
                        src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                        alt="Avatar Tailwind CSS Component" />
                    </div>
                  </div>
                </div>
              </td>
              <td class="text-[15px]">
                Zemlak 
              </td>
              <td class="text-[15px]">Daniel</td>
              <td class="text-[15px]">Daniel@gmail.com</td>
              <td class="text-[15px]">Mapeh</td>
              <td class="text-[15px]">10/14/24</td>
              <td class="text-[15px]">Pending</td>
              <td>
                <div>
                  <button 
                    type="submit"
                    class="btn btn-outline btn-warning-content btn-sm">
                    Hold
                  </button>
                  <button 
                    type="submit"
                    class="btn btn-outline btn-error btn-sm">
                    Remove
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>
</section>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>