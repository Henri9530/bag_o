<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<header>
  <div class="navbar fixed z-50 bg-base-100">
    <div>
      <div class="drawer">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
          <label for="my-drawer" class="btn btn-outline btn-base-100 drawer-button">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              class="inline-block h-5 w-5 stroke-current">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </label>
        </div>
        <div class="drawer-side z-20">
          <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
          <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
          <div class="mt-10">
            <h1 class="text-3xl p-4">Dashboard</h1>
          </div>
            <li>
              <div>
                <div>
                  <img src="../Images/student_sidebar.svg" 
                  alt="image"
                  width="40"
                  height="40">
                </div>
                <div>
                  <a 
                    class="text-lg"
                    href="../student_view.php">Manage Students</a>
                </div>
              </div>
            </li>
            <li>
            <div>
                <div>
                  <img src="../Images/teacher_sidebar.svg" 
                  alt="image"
                  width="40"
                  height="40">
                </div>
                <div>
                  <a 
                    class="text-lg"
                    href="../teacher_view.php">Manage Teachers</a>
                </div>
            </div>
            </li>
            <li>
            <div>
                <div>
                  <img src="../Images/notebook_sidebar.svg" 
                  alt="image"
                  width="40"
                  height="40">
                </div>
                <div>
                  <a class="text-lg"
                  href="../department_view.php">Manage Department</a>
                </div>
              </div>
            </li>
            <li>
            <div>
                <div>
                  <img src="../Images/feedback_sidebar.svg" 
                  alt="image"
                  width="40"
                  height="40">
                </div>
                <div>
                  <a class="text-lg"
                  href="../schoolyear_view.php">Manage Academic</a>
                </div>
              </div>
            </li>
            <!-- <li>
            <div>
                <div>
                  <img src="../Images/feedback_sidebar.svg" 
                  alt="image"
                  width="40"
                  height="40">
                </div>
                <div>
                  <a class="text-lg"
                  href="../criteria_view.php">Manage Criteria</a>
                </div>
              </div>
            </li> -->
            <li>
            <div>
                <div>
                  <img src="../Images/feedback_sidebar.svg" 
                  alt="image"
                  width="40"
                  height="40">
                </div>
                <div>
                  <a class="text-lg"
                  href="../create_ques.php">Manage Questionnaire</a>
                </div>
              </div>
            </li>
            <li>
            <div>
                <div>
                  <img src="../Images/feedback_sidebar.svg" 
                  alt="image"
                  width="40"
                  height="40">
                </div>
                <div>
                  <a class="text-lg"
                  href="../admin/admin_view.php">Manage User</a>
                </div>
              </div>
            </li>
            <li>
            <div>
                <div>
                  <img src="../Images/feedback_sidebar.svg" 
                  alt="image"
                  width="40"
                  height="40">
                </div>
                <div>
                  <a class="text-lg">Archive</a>
                </div>
              </div>
            </li>
            <li>
              <div class="flex justify-between items-center border border-2">
                <div class="text-lg">
                  Dark Mode
                </div>
                <div>
                  <a>
                    <label class="flex cursor-pointer gap-2">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="12" cy="12" r="5" />
                        <path
                          d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
                      </svg>
                      <input type="checkbox" value="dark" class="toggle theme-controller" />
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                      </svg>
                    </label>
                  </a>
                </div> 
              </div>
            </li>
            <li>
              <div class="mt-40">
                <div>
                  <img src="../Images/logout_sidebar.svg" 
                  alt="image"
                  width="40"
                  height="40">
                </div>
                <div>
                  <a class="text-lg"
                    href="../index.php">
                    Logout
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <a class="btn btn-ghost text-3xl mx-3" href="#">Cebu Eastern College</a>
    </div>
    
  </div>
</header>

  <section>
    <div class="flex w-full flex-col md:flex-row-1 lg:flex-col px-6 pt-24">
      
      <div class="card bg-base-300 rounded-md m-2 h-[400px] grid grid-cols-1">
        <div class="p-8">
          <h1 class="text-3xl font-semibold">Welcome Administrator</h1>
          <div class="pt-4 px-1">
            <p class="text-xl">School Year: 2024-2025, <strong class="text-2xl">1st Semester</strong></p>
          </div>
          <div class="pt-4 px-1">
            <p class="text-xl">Status: <strong class="text-2xl">On-Going</strong></p>
          </div>
        </div>
    
      </div>

      <div class="card bg-base-300 rounded-md m-2 grid h-[400px] grid-cols-2 p-8 gap-3">
        
        <div class="card bg-base-100 w-full h-40 shadow-xl">
          <div class="card-body">
            <h2 class="card-title text-4xl">
              <img src="../Images/teacher.svg" 
                alt="image"
                width="35"
                height="35">
              Teacher</h2>
              <div class="flex justify-start items-center p-4">
                <div class="mt-2">
                <img src="../Images/yellow.svg" 
                  alt="image"
                  width="20"
                  height="20">
                </div>
                <div>
                  <p class="text-4xl px-2">50</p>
                </div>
              </div>
              
              
            
          </div>
        </div>

        <div class="card bg-base-100 w-full h-40 shadow-xl">
          <div class="card-body">
            <h2 class="card-title text-4xl">
            <img src="../Images/student.svg" 
                alt="image"
                width="35"
                height="35">
              Student</h2>
              <div class="flex justify-start items-center p-4">
                <div class="mt-2">
                <img src="../Images/student_circle.svg" 
                  alt="image"
                  width="20"
                  height="20">
                </div>
                <div>
                  <p class="text-4xl px-2">2500</p>
                </div>
              </div>
          </div>
        </div>


        <div class="card bg-base-100 w-full h-40 shadow-xl">
          <div class="card-body">
            <h2 class="card-title text-4xl">
            <img src="../Images/admin.svg" 
                alt="image"
                width="35"
                height="35">
              Admin</h2>
              <div class="flex justify-start items-center p-4">
                <div class="mt-2">
                <img src="../Images/admin_circle.svg" 
                  alt="image"
                  width="20"
                  height="20">
                </div>
                <div>
                  <p class="text-4xl px-2">8</p>
                </div>
              </div>
          </div>
        </div>

        <div class="card bg-base-100 w-full h-40 shadow-xl">
          <div class="card-body">
            <h2 class="card-title text-4xl">
            <img src="../Images/feedback.svg" 
                alt="image"
                width="35"
                height="35">  
              Feedback</h2>
              <div class="flex justify-start items-center p-4">
                <div class="mt-2">
                <img src="../Images/feedback_circle.svg" 
                  alt="image"
                  width="20"
                  height="20">
                </div>
                <div>
                  <p class="text-4xl px-2">350</p>
                </div>
              </div>
          </div>
        </div>
      </div>

      
    </div>
  </section>

  <footer class="footer footer-center bg-base-300 text-base-content rounded p-5">
    <nav class="grid grid-flow-col gap-4">
      <a class="link link-hover">About us</a>
      <a class="link link-hover">Contact</a>
      <a class="link link-hover">Jobs</a>
      <a class="link link-hover">Press kit</a>
    </nav>
    <nav>
      <div class="grid grid-flow-col gap-4">
        <a>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            class="fill-current">
            <path
              d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
          </svg>
        </a>
        <a>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            class="fill-current">
            <path
              d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
          </svg>
        </a>
        <a>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            class="fill-current">
            <path
              d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
          </svg>
        </a>
      </div>
    </nav>
    <aside>
      <p>Copyright © 2024-2025 - All right reserved by Cebu Eastern College</p>
    </aside>
  </footer>

  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>