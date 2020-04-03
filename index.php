<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>User Dashboard</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="card-box shadow">
                        <h4 class="header-title mb-3 biggertxt" style="text-decoration: underline; text-align: center;">
                            PHP Calculator</h4>
                            <br>
                            <form>
                            <div class="row">
                                <div class="col">
                                <label for="exampleInputEmail1">First Number</label>
                                <input class="form-control" type="number" name="num1">
                                </div>
                                <div class="col">
                                <label for="exampleInputEmail1">Second Number</label>
                                <input class="form-control" type="number" name="num2">
                                </div>
                            </div>
                            <br>
                            <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary d-flex justify-content-center">Submit</button>
                            </div>
                            <br>
                            <div class="d-flex justify-content-center">
                            Answer:<?php echo $_GET["num1"] + $_GET["num2"] ?>
                            </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

	
</body>
</html>