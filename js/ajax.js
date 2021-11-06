$(document).ready(function () {
    // CREATE ACCOUNT SECTION START
    function create_account() {
        $("#create_button").click(function (e) {
            e.preventDefault()
            console.log("Create Account Button Clicked");

            //Values Are Come From
            var name = $("#create_name").val();
            var email = $("#create_email").val();
            var password = $("#create_password").val();
            var address = $("#create_address").val();

            // Small Validation
            if (name == "") {
                $("#create_name_message").html("<small style='font-size:15px;' class='text-danger font-weight-bold ml-2'>Please Enter Your Name</small>");
                $("#create_name").focus();
            } else if (email == "") {
                $("#create_email_message").html("<small style='font-size:15px;' class='text-danger font-weight-bold ml-2'>Please Enter Your Email</small>");
                $("#create_email").focus();
            } else if (password == "") {
                $("#create_password_message").html("<small style='font-size:15px;' class='text-danger font-weight-bold ml-2'>Please Enter Your Password</small>");
                $("#create_password").focus();
            } else if (address == "") {
                $("#create_address_message").html("<small style='font-size:15px;' class='text-danger font-weight-bold ml-2'>Please Enter Your Address</small>");
                $("#create_address").focus();
            } else {
                console.log("All Fields Are Filled");
                var mydata = { name: name, email: email, password: password, address: address };

                //Ajax Call 
                $.ajax({
                    url: "./database/insert.php",
                    method: "POST",
                    dataType: "json",
                    data: JSON.stringify(mydata),
                    success: function (data) {
                        // console.log(data);
                        if (data == "yes") {
                            $("#create_main_message").html("<div class='alert alert-success font-weight-bold text-center'>Successfully Account Create</div>");
                        } else if (data == "no") {
                            $("#create_main_message").html("<div class='alert alert-danger font-weight-bold text-center'>Sorry Please Try Again Later</div>");
                        }
                        $("#create_form_id")[0].reset();
                    }
                })
            }

   
         })
    }
    create_account();
    // CREATE ACCOUNT SECTION END




    // LOGIN ACCOUNT SECTION START
    function login() {
        $("#login_button").click(function (e) {
            e.preventDefault()
            console.log("Login Account Button Clicked");

            //Values Are Come From
   
            var email = $("#login_email").val();
            var password = $("#login_password").val();
 

            // Small Validation
           if (email == "") {
                $("#login_email_message").html("<small style='font-size:15px;' class='text-danger font-weight-bold ml-2'>Please Enter Your Email</small>");
                $("#login_email").focus();
            } else if (password == "") {
                $("#login_password_message").html("<small style='font-size:15px;' class='text-danger font-weight-bold ml-2'>Please Enter Your Password</small>");
                $("#login_password").focus();
            }   else {
                console.log("All Fields Are Filled");
                var mydata = {   email: email, password: password };

                //Ajax Call 
                $.ajax({
                    url: "./database/login.php",
                    method: "POST",
                    dataType: "json",
                    data: JSON.stringify(mydata),
                    success: function (data) {
                        console.log(data);
                        if (data == "yes") {
                            $("#spinner").html("<div class='spinner-border text-success' role='status'></div>");

                            setTimeout(() => {
                                window.location.href='index.php'
                            }, 2000);

                        } else if (data == "no") {
                            $("#login_main_message").html("<div class='alert alert-danger font-weight-bold text-center'>Please Check Your Details</div>");
                        }
                        $("#login_form_id")[0].reset();
                    }
                })
            }

   
         })
    }
    login();
    // LOGIN ACCOUNT SECTION END




    // Admission Section Start
    function admission() {
        $("#admission_button").click(function (e) {
            e.preventDefault()
            console.log("Admission Button Clicked")

            var name = $("#admission_name").val();
            var email = $("#admission_email").val();
            var password = $("#admission_password").val();
            var address = $("#admission_address").val();
            var phone_number = $("#admission_phone_number").val();
            var parent_phone_number = $("#admission_parent_phone_number").val();
            var previous_college = $("#admission_previous_college").val();

            // Small Validation
            if (name == "") {
                $("#admission_name_message").html("<small style='font-size:15px;' class='text-danger font-weight-bold ml-2'>Please Enter Your Name</small>");
                $("#admission_name").focus();
            } else if (email == "") {
                $("#admission_email_message").html("<small style='font-size:15px;' class='text-danger font-weight-bold ml-2'>Please Enter Your Email</small>");
                $("#admission_email").focus();
            } else if (password == "") {
                $("#admission_password_message").html("<small style='font-size:15px;' class='text-danger font-weight-bold ml-2'>Please Enter Your Password</small>");
                $("#admission_password").focus();
            } else if (address == "") {
                $("#admission_address_message").html("<small style='font-size:15px;' class='text-danger font-weight-bold ml-2'>Please Enter Your Address</small>");
                $("#admission_address").focus();
            } else if (phone_number == "") {
                $("#admission_phone_number_message").html("<small style='font-size:10px;' class='text-danger font-weight-bold ml-2'>Please Enter Your Phone Number</small>")
                $("#admission_phone_number").focus();
            } else if (parent_phone_number == "") {
                $("#admission_parent_phone_number_message").html("<small style='font-size:10px;' class='text-danger font-weight-bold ml-2'>Please Enter Your Parent Number</small>")
                $("#admission_parent_phone_number").focus();

            } else if (previous_college == "") {
                $("#admission_previous_college_message").html("<small style='font-size:10px;' class='text-danger font-weight-bold ml-2'>Please Enter Your Previous College</small>")
                $("#admission_previous_college").focus();
            } else {
                console.log("all fields Are Filled")
                // JS Object
                var mydata = { name: name, email: email, password: password, address: address, phone_number: phone_number, parent_phone_number: parent_phone_number, previous_college: previous_college };

                // AJAX CALL
                $.ajax({
                    url: "./database/admission.php",
                    method: "POST",
                    dataType: "json",
                    data: JSON.stringify(mydata),
                    success: function (data) {
                        // console.log(data);
                        if (data == "yes") {
                            $("#admission_main_message").html("<div class='alert alert-success font-weight-bold text-center'>SuccessFully Submitted</div>");
                        } else if(data =="no") {
                            $("#admission_main_message").html("<div class='alert alert-danger font-weight-bold text-center'>Sorry Something Went Wrong</div>");
                        }
                        // Reset Form
                        $("#admission_form_id")[0].reset();
                    }
                })

            }


        })
    }
    admission();
    // Admission Section End




    // Contact us Section Start
    function contact_us() {
        $("#contact_button").click(function (e) {
            e.preventDefault();
            console.log("Contact us Button Clicked")
           
            var name = $("#contact_name").val()
            var email = $("#contact_email").val()
            var how = $("#contact_how").val();

            //Small Validation
            if (name == "") {
                $("#contact_message").html("<div class='alert alert-danger font-weight-bold text-center'>Please Enter Name</div>");
                $("#contact_name").focus()
            } else if (email == "") {
                $("#contact_message").html("<div class='alert alert-danger font-weight-bold text-center'>Please Enter Email</div>");
                $("#contact_email").focus()
            } else if (how == "") {
                $("#contact_message").html("<div class='alert alert-danger font-weight-bold text-center'>How We Can Help You</div>");
                $("#contact_how").focus()
            } else {
                // JS Object
                var mydata = { name: name, email: email, how: how };
                // Ajax Call
                $.ajax({
                    url: "./database/contact.php",
                    method:"POST",
                    dataType: "json",
                    data: JSON.stringify(mydata),
                    success: function (data) {
                        if (data == "yes") {
                            $("#contact_message").html("<div class='alert alert-success font-weight-bold text-center'>We Will Contact You ASAP</div>");
                        } else if (data == "no") {
                            $("#contact_message").html("<div class='alert alert-danger font-weight-bold text-center'>Sorry SomeThing Went Wrong</div>");
                        }

                        // Reset Form
                        $("#contact_form_id")[0].reset();
                    }
                })
            }
        })
    }
    contact_us()
    // Contact us Section End





})