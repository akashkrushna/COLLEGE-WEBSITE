<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Admission | Easy College </title>
</head>

<body>

    <style>
        .row {
            box-shadow: 10px 10px 10px -10px rgba(0, 0, 0, 0.4), inset 10px 10px 10px -10px rgba(0, 0, 0, 0.7);
            padding: 20px;
            margin: 50px auto;
            border-radius: 20px;
            background: #000;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 20px;
        }

        button,
        a {
            font-weight: bold;
            width: 250px;
            border-radius: 20px !important;
            transition: 0.9s !important;
        }

        input {
            border-radius: 20px !important;
        }

        button:hover,
        a:hover {
            letter-spacing: 8px;
            background: none !important;
            color: #dc3445 !important;
        }

        .one {
            width: 300px !important;
            display: inline-block;
            margin-left: 50px;
        }
    </style>

    <!-- Admission Page Start -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-9">
                <form action="" id="admission_form_id">
                    <div id="admission_main_message"></div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Name</label>
                        <small id="admission_name_message"></small>
                        <input type="text" id="admission_name" class="font-weight-bold form-control" placeholder="Enter Your Name">
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Email</label>
                        <small id="admission_email_message"></small>
                        <input type="email" id="admission_email" class="font-weight-bold form-control" placeholder="Enter Your Email">
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Password</label>
                        <small id="admission_password_message"></small>
                        <input type="password" id="admission_password" class="font-weight-bold form-control" placeholder="Enter Your Password">
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Address</label>
                        <small id="admission_address_message"></small>
                        <input type="text" id="admission_address" class="font-weight-bold form-control" placeholder="Enter Your Address">
                    </div>

                    <div class="form-group one">
                        <label for="" class="font-weight-bold">Phone Number</label>
                        <small id="admission_phone_number_message"></small>
                        <input type="number" id="admission_phone_number" class="font-weight-bold form-control" placeholder="Enter Your Phone Number">
                    </div>

                    <div class="form-group one">
                        <label for="" class="font-weight-bold">Parents Phone Number</label>
                        <small id="admission_parent_phone_number_message"></small>
                        <input type="number" id="admission_parent_phone_number" class="font-weight-bold form-control" placeholder="Parents Phone Number">
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Previous College</label>
                        <small id="admission_previous_college_message"></small>
                        <input type="text" id="admission_previous_college" class="font-weight-bold form-control" placeholder="Enter Previous College Name">
                    </div>

                    <button type="button" id="admission_button" class="font-weight-bold btn   btn-danger">Submit</button>
                    <a href="index.php" type="button" class="float-right font-weight-bold btn   btn-danger">Back To Home</a>



                </form>
            </div>
        </div>
    </div>
    <!-- Admission Page End -->


</body>
<!-- Script For Bootstrap -->
<script src="js/jquery.js"></script>
<script src="js/pooper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script>

</html>