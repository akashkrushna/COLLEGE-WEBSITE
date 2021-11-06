<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Link Custom Css -->
    <link rel="stylesheet" href="css/style.css">
    <title>College Website | EasyCoding</title>
</head>

<style>
    body {
        background: #ccc;
    }

    form {
        margin: 150px auto;
        padding: 30px;
        background: #fff;
        border-radius: 20px;
        transition: 1s !important;
    }

    form:hover {
        background: #000;
        border: none !important;
        color: #fff !important;
        cursor: pointer;
    }

    form:hover input::placeholder {
        color: #fff !important;
    }

    button,
    a {
        font-weight: bold !important;
        transition: 1s !important;
        border-radius: 20px !important;
        width: 200px;
    }

    input {
        border-radius: 20px !important;
        color: #fff !important;
        background: none !important;
    }

    button:hover,
    a:hover {
        background: none !important;
        letter-spacing: 5px;
        color: #dc3445 !important;
    }

    h2 {
        font-weight: bold !important;
        font-size: 50px;
        text-align: center;
    }
</style>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <form action="" id="create_form_id">

                    <h2>Create Account</h2>
                    <div id="create_main_message"></div>


                    <div class="form-group">
                        <label for="" class="font-weight-bold">Name</label>
                        <small id="create_name_message"></small>
                        <input type="text" id="create_name" class="font-weight-bold form-control" placeholder="Enter Your Name">
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Email</label>
                        <small id="create_email_message"></small>
                        <input type="email" id="create_email" class="font-weight-bold form-control" placeholder="Enter Your Email">
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Password</label>
                        <small id="create_password_message"></small>
                        <input type="password" id="create_password" class="font-weight-bold form-control" placeholder="Enter Your Password">
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Address</label>
                        <small id="create_address_message"></small>
                        <input type="text" id="create_address" class="font-weight-bold form-control" placeholder="Enter Your Address">
                    </div>

                    <button type="button" id="create_button" class="btn btn-danger">Submit</button>
                    <a href="index.php" type="button" class="float-right btn btn-danger">Back To Home</a>

                </form>
            </div>
        </div>
    </div>

    <?php require_once("header_footer/footer.php"); ?>