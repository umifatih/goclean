<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.1.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- Material Desain -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

 <style>
        input {
            font-weight: normal; /* Membuat teks tidak tebal */
        }
    </style>
</head>

<body class="bg-light">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-5 pt-5">
                <div class="row z-depth-3">
                    <div class="col-sm-4 bg-info rounded-left">
                        <div class="card-block text-center text-white">
                            <i class="fas fa-user-tie fa-7x mt-5"></i>
                            <h2 class="font-weight-bold mt-4">Nickson</h2>
                            <p>Customer</p>
                            <i class="far fa-edit fa-2x md-4"></i>
                        </div>
                    </div>
                    <div class="col-sm-8 bg-white rounded-light">
                        <h3 class="mt-3 text-center">Informasi</h3>
                        <hr class="badge-primary mt-0 w-25">
                        <div class="row">
                        <div class="col-sm-6">
                                <p class="font-weight-bold">Email:</p>
                                <input type="email" id="email" class="form-control" placeholder="Enter Email">
                            </div>
                            <!-- Nomor HP -->
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Nomor Hp:</p>
                                <input type="text" id="phone" class="form-control" placeholder="Enter Phone Number">
                            </div>
                        </div>
                        <h4 class="mt-3">Projects</h4>
                        <hr class="bg-primary">
                        <div class="row">
                            <!-- Recent Project -->
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Recent</p>
                                <input type="text" id="recent" class="form-control" placeholder="Recent Project">
                            </div>
                            <!-- Most Viewed -->
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Most Viewed</p>
                                <input type="text" id="most-viewed" class="form-control" placeholder="Most Viewed Project">
                            </div>
                        </div>
                        <hr class="bg-primary">
                        <ul class="list-unstyled d-flex justify-content-center mt-4">
                            <li><a href="#"><i class="fab fa-facebook-f facebook-f px-3 h4 text-info"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>