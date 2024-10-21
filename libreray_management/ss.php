
    <!-- Nav Bar Start-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <button class="btn btn-primary me-2 bg-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <a class="navbar-brand text-uppercase me-auto" href="#">Star Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          
          <form class="d-flex ms-auto" role="search">
            <div class="input-group me-2 my-2 my-lg-0">
              <input class="form-control search-inp " type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success search-btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>  
          </form>

          <ul class="navbar-nav   my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">     
            <li class="nav-item ul-ug dropdown ">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="mg-3 me-2" src="./assets/images/profile.jpg" alt="Profile Photo">  Link
              </a>
              <ul class="dropdown-menu-end dropdown-menu">
                <li><a class="dropdown-item" href="#">My Profile</a></li>
                <li><a class="dropdown-item" href="#">Change Password</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Nav Bar End-->
  
    <!-- Side Bar Start-->
          <div class="offcanvas sidebar-nav  offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <ul class="navbar-nav ul ">
              <li class="nav-item">
                <div class="text-uppercase tw-bold small text-secondary">
                  core
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./daskbord.php"><i class="fa-solid fa-gauge-high"></i> Daskbord</a>
              </li>
              <li  class="my-0">
                      <hr class="hr">
              </li>
              <li class="nav-item">
                <div class="text-uppercase tw-bold small text-secondary">
                  Inventory
                </div>
              </li>
              <!-- Books Managemet -->
              <li class="nav-item dropdown drop-list">
                <a  class="nav-link active sidebar-link" data-bs-toggle="collapse" href="#bookMamt" role="button" aria-expanded="false" aria-controls="bookMamt">
                  <i class="fa-solid fa-book me-2"></i>Books Management
                  <span class="float-end right-icon"><i class="fas fa-chevron-down "></i></span>
                </a>
                <div class="collapse" id="bookMamt">
                  <div>
                    <ul class="navbar-nav ps-3">
                      <li>
                        <a class="nav-link" href="./add-book.html"><i class="fa-solid fa-plus me-2"></i> Add New</a>
                      </li>
                      <li>
                        <a class="nav-link" href="./manage-books.html"><i class="fa-solid fa-list me-2"></i> Manage All</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <!-- Student Management -->
              <li class="nav-item dropdown drop-list">
                <a  class="nav-link active sidebar-link" data-bs-toggle="collapse" href="#studentMemt" role="button" aria-expanded="false" aria-controls="studentMemt">
                  <i class="fa-solid fa-user-group me-2"></i>Student Management
                  <span class="float-end right-icon"><i class="fas fa-chevron-down "></i></span>
                </a>
                <div class="collapse" id="studentMemt">
                  <div>
                    <ul class="navbar-nav ps-3">
                      <li>
                        <a class="nav-link" href="#"><i class="fa-solid fa-plus me-2"></i> Add New</a>
                      </li>
                      <li>
                        <a class="nav-link" href="#"><i class="fa-solid fa-users me-2"></i> Manage All</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>

              <li  class="my-0">
                <hr class="hr">
              </li>
              <li class="nav-item">
                <div class="text-uppercase tw-bold small text-secondary">
                  Business
                </div>
              </li>
              <!-- Books Loan -->
              <li class="nav-item dropdown drop-list">
                <a  class="nav-link active sidebar-link" data-bs-toggle="collapse" href="#booksLoanMemt" role="button" aria-expanded="false" aria-controls="booksLoanMemt">
                  <i class="fa-solid fa-book-open-reader me-2"></i>Books Loan 
                  <span class="float-end right-icon"><i class="fas fa-chevron-down "></i></span>
                </a>
                <div class="collapse" id="booksLoanMemt">
                  <div>
                    <ul class="navbar-nav ps-3">
                      <li>
                        <a class="nav-link" href="#"><i class="fa-solid fa-plus me-2"></i> Add New</a>
                      </li>
                      <li>
                        <a class="nav-link" href="#"><i class="fa-solid fa-users me-2"></i> Manage All</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>      
               <!--  Subscription-->
              <li class="nav-item dropdown drop-list">
                <a  class="nav-link active sidebar-link" data-bs-toggle="collapse" href="#SubscriptionMemt" role="button" aria-expanded="false" aria-controls="SubscriptionMemt">
                  <i class="fa-solid fa-indian-rupee-sign me-2"></i>Subscription
                  <span class="float-end right-icon"><i class="fas fa-chevron-down "></i></span>
                </a>
                <div class="collapse" id="SubscriptionMemt">
                  <div>
                    <ul class="navbar-nav ps-3">
                      <li>
                        <a class="nav-link" href="#"><i class="fa-solid fa-plus me-2"></i> Plans</a>
                      </li>
                      <li>
                        <a class="nav-link" href="#"><i class="fa-solid fa-list me-2"></i> Purchase History</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>

              <li  class="my-0">
                <hr class="hr">
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-right-from-bracket me-2"></i> LogOut</a>
              </li>
            </ul>
          </div>
    <!-- Side Bar End-->

