<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&family=Plus+Jakarta+Sans:ital,wght@0,300;0,500;1,400;1,600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Star Library</title>

</head>
<body>
    <?php
        include('./ss.php');
    ?>
    <!--Main Content Start-->
       
       <main class="mt-1 pt-3">
        <div class="container-fluid">
          <!-- Cards -->
          <div class="row daskbord-count">
            <div class="col-md-12">
              <h4 class="tw-bold text-uppercase ">Daskbord</h4>
               <p>Statistics of the system!</p>
            </div>

            <div class="col-md-3">
              <div class="card text-center">
                <div class="card-body">
                  <h6 class="card-title text-uppercases text-muted">Total Books</h6>
                  <h1>130</h1>
                  <a href="#" class="card-link link-underline-light">View more</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center" >
                  <div class="card-body">
                    <h6 class="card-title text-uppercases text-muted">Total Students</h6>
                    <h1>84</h1>
                    <a href="#" class="card-link link-underline-light">View more</a>
                  </div>
                </div>
            </div>
            <div class="col-md-3">
                  <div class="card text-center" >
                    <div class="card-body">
                      <h6 class="card-title text-uppercases text-muted">Total revenue</h6>
                      <h1><i class="fa-solid fa-indian-rupee-sign me-2"></i>10,20,300 </h1>
                      <a href="#" class="card-link link-underline-light">View more</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                    <div class="card text-center">
                      <div class="card-body">
                        <h6 class="card-title text-uppercases text-muted">Total Books Lone</h6>
                        <h1>35</h1>
                        <a href="#" class="card-link link-underline-light">View more</a>
                      </div>
                    </div>

            </div>
          </div>
          <!-- tabs -->
          <div class="row mt-5 daskbord-tabs">
            <div class="col-md-12">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active text-uppercase" id="recent-student-tab" data-bs-toggle="pill" data-bs-target="#recent-student" type="button" role="tab" aria-controls="recent-student" aria-selected="true">New students</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link text-uppercase" id="recent-lones-tab" data-bs-toggle="pill" data-bs-target="#recent-lones" type="button" role="tab" aria-controls="recent-lones" aria-selected="false">Recent Loans</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link text-uppercase" id="recent-subs-tab" data-bs-toggle="pill" data-bs-target="#recent-subs" type="button" role="tab" aria-controls="recent-subs" aria-selected="false">Recent Subscrptions</button>
                </li>
              
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="recent-student" role="tabpanel" aria-labelledby="recent-student-tab" tabindex="0">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Preparing For</th>
                        <th scope="col">Registered On</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>UPSC</td>
                        <td>10-05-2024, 12:30 PM</td>
                        <td>
                          <span class="badge text-bg-success">Active</span>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">1</th>
                        <td>Jog-bourg</td>
                        <td>UPSC</td>
                        <td>10-05-2024, 12:30 PM</td>
                        <td>
                          <span class="badge text-bg-danger">Inactive</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="recent-lones" role="tabpanel" aria-labelledby="recent-lones-tab" tabindex="0">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Studenet Name</th>
                        <th scope="col">Loan Date</th>
                        <th scope="col">Due date</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>UPSC</td>
                        <td>10-05-2024</td>
                        <td>10-05-2024</td>
                        <td>
                          <span class="badge text-bg-success">Active</span>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">1</th>
                        <td>Jog-bourg</td>
                        <td>UPSC</td>
                        <td>10-05-2024</td>
                        <td>10-05-2024</td>
                        <td>
                          <span class="badge text-bg-danger">Inactive</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="recent-subs" role="tabpanel" aria-labelledby="recent-subs-tab" tabindex="0">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Studenet Name</th>
                        <th scope="col">Amount </th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End date</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>₹ 345</td>
                        <td>10-05-2024</td>
                        <td>10-05-2024</td>
                        <td>
                          <span class="badge text-bg-success">Active</span>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">1</th>
                        <td>Jog-bourg</td>
                        <td>₹ 546</td>
                        <td>10-05-2024</td>
                        <td>10-05-2024</td>
                        <td>
                          <span class="badge text-bg-danger">Inactive</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                
              </div>
            </div>
          </div>
        </div>
       </main>
   
    <!--Main Content Start-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/13424079a1.js" crossorigin="anonymous"></script>
</body>
</html>