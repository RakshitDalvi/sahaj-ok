<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Sign In / Sign Up</title>
</head>
<body>
    <h1>Welcome</h1>
    <h3>Enter ID</h3>
    <div class="container">
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card py-3 px-2">
                
                
                <div class="division">
                    <div class="row">
                        <div class="col-3">
                            <div class="line l"></div>
                        </div>
                        <div class="col-6"><span>ID</span></div>
                        <div class="col-3">
                            <div class="line r"></div>
                        </div>
                    </div>
                </div>
                <form class="myform" action="idinput1.php" method="POST">
                    <div class="form-group"> <input name="userID" type="text" class="form-control" placeholder="ID"> </div>
                    <!-- <div class="form-group"> <input name="password" type="password" class="form-control" placeholder="Password"> </div> -->
                    <div class="form-group mt-3"> <button type="submit" class="btn btn-block btn-primary btn-lg"><small><i class="far fa-user pr-2"></i>Submit</small></button> </div>
                </form>

            </div>
        </div>
    </div>
</div>
</body>
</html>