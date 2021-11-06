<!-- NavbarSection Start -->
<?php require_once("header_footer/header.php"); ?>
<!-- NavbarSection End -->
<!-- Header Section Start -->
<section>
    <div class="header">
        <div class="vid-parent">


            <!-- Some PHP code Start -->
            <?php
            if (!isset($_SESSION)) {
                session_start();
            }
            if (isset($_SESSION['is_true'])) {
                echo '
              <div id="header_carousel_vid" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <video autoplay playsinline muted loop>
                          <source src="photos/video_header.mp4" class="d-block w-100">
                      </video>
                  </div>
                  <div class="carousel-item">
                      <video autoplay playsinline muted loop>
                          <source src="photos/video_about.mp4" class="d-block w-100">
                      </video>
                  </div>
                  <div class="carousel-item">
                      <video autoplay playsinline muted loop>
                          <source src="photos/video__college_campus.mp4" class="d-block w-100">
                      </video>
                  </div>
              </div>

          </div>  
              ';
            } else {
                echo '
                <div class="img-parent">
                <div class="img">
                    <div id="header_carousel_vid" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="photos/img_header.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="photos/img_header_two.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="photos/img_header_three.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                ';
            }
            ?>
            <!-- Some PHP code End -->



            <!-- VIDEO SECTION END -->

            <!-- IMG SECTION START -->

            <!-- IMG SECTION END -->


            <div class="vid-overlay"></div>
            <div class="vid-content">
                <h6>Make Your Future With Us</h6>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, soluta. <br> Lorem ipsum, dolor
                    sit amet consectetur adipisicing elit. Nesciunt non neque sunt reprehenderit nobis! <br> Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Aliquam accusantium in a nam deserunt est dicta
                    commodi.</span><br><br>
                <div>

                    <!-- PHP CODE START -->
                    <?php
                    if (isset($_SESSION['is_true'])) {
                        echo '
                         <a href="admission.php" class="btn btn-danger">Admission</a>
                         <a href="tour/garden_tour.php" class="btn btn-danger">College Tour</a>
                         ';
                    } else {
                        echo '
                         <a href="create_account.php" class="btn btn-danger">Sign up</a>
                         <a href="#" data-toggle="modal" data-target="#user_login"  class="btn btn-danger">Login</a>
                         ';
                    }
                    ?>


                    <!-- PHP CODE END -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Header Section End -->


<!-- About us Section Start -->
<section>
    <div class="about-us container">

        <div class="content">
            <h6><span>A</span>bout us</h6>
        </div>

        <div class="row">
            <div class="col-sm-5">
                <h6>Easy College</h6>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic quam ipsam nesciunt vel nulla
                    tempore accusantium illum, itaque ratione vitae optio nobis a possimus non laborum labore. Hic,
                    ad aut! <br><br><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
                    itaque
                    dolor amet, error at placeat ipsum, ipsa distinctio earum dolorem accusantium voluptas dolores
                    natus saepe! Quia ex nesciunt atque eius. <br><br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque perspiciatis deleniti beatae nam
                    sequi consequuntur dignissimos non expedita rerum ducimus libero facere corporis, quis
                    voluptatum. Ducimus dolores exercitationem aperiam fuga?Lorem ipsum dolor sit amet consectetur,
                    adipisicing elit. Ullam iusto a impedit numquam debitis quibusdam perspiciatis, inventore magni
                    adipisci veniam iure ea ad, vero doloremque hic vel voluptates odio expedita. </p><br>
                <button class="btn btn-danger" data-target="#about_us_popup" data-toggle="modal">Read More</button>
            </div>
            <div class="offset-sm-2 col-sm-5">
                <!--  -->
                <div id="about_carousel_vid" class="carousel slide" data-ride="carousel">
                    <!--  -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <video autoplay playsinline muted loop>
                                <source src="photos/video2.mp4" class="d-block w-100">
                            </video>
                        </div>
                        <div class="carousel-item">
                            <video autoplay playsinline muted loop>
                                <source src="photos/video_about.mp4" class="d-block w-100">
                            </video>
                        </div>
                    </div>




                    <!--  -->
                    <div class="vid-content">
                        <h6>EasyCoding</h6>
                    </div>
                    <!--  -->
                </div>
                <!--  -->
            </div>
        </div>

    </div>
</section>
<!-- About us Section End -->


<!-- Services Section Start -->
<section>
    <div class="services container">

        <div class="content">
            <h6><span>S</span>ervices</h6>
        </div>

        <div class="row">

            <div class="col-sm-4">
                <div class="box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-laptop " viewBox="0 0 16 16">
                        <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                    </svg>
                    <div class="boxcontent">
                        <h6>Great Labs</h6>
                        <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam illo natus alias ipsa
                            unde atque nulla pariatur possimus ad praesentium?</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>
                    <div class="boxcontent">
                        <h6>Transport Service</h6>
                        <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam illo natus alias ipsa
                            unde atque nulla pariatur possimus ad praesentium?</span>
                    </div>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                        <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                        <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                        <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                    </svg>
                    <div class="boxcontent">
                        <h6>24 * 7 Services</h6>
                        <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam illo natus alias ipsa
                            unde atque nulla pariatur possimus ad praesentium?</span>
                    </div>
                </div>
            </div>



            <div class="col-sm-4">
                <div class="box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                        <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                    </svg>
                    <div class="boxcontent">
                        <h6>24*7 Library Service</h6>
                        <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam illo natus alias ipsa
                            unde atque nulla pariatur possimus ad praesentium?</span>
                    </div>
                </div>
            </div>



            <div class="col-sm-4">
                <div class="box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                        <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                    </svg>
                    <div class="boxcontent">
                        <h6>WellFurnished</h6>
                        <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam illo natus alias ipsa
                            unde atque nulla pariatur possimus ad praesentium?</span>
                    </div>
                </div>
            </div>



            <div class="col-sm-4">
                <div class="box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16">
                        <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z" />
                    </svg>
                    <div class="boxcontent">
                        <h6>100% Child Growth</h6>
                        <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam illo natus alias ipsa
                            unde atque nulla pariatur possimus ad praesentium?</span>
                    </div>
                </div>
            </div>



        </div>

    </div>
</section>
<!-- Services Section End -->



<!-- Contact us Form Start -->
<section>
    <div class="contact_us container">

        <div class="content">
            <h6><span>C</span>ontact us</h6>
        </div>

        <div class="row">

            <div class="col-sm-5">
                <form action="" id="contact_form_id">

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Name</label>
                        <input type="text" id="contact_name" class="font-weight-bold form-control" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <label for="" class="font-weight-bold">Email</label>
                        <input type="email" id="contact_email" class="font-weight-bold form-control" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group">
                        <label for="" class="font-weight-bold">How We Can Help You</label>
                        <input type="text" id="contact_how" class="font-weight-bold form-control" placeholder="How We Can Help You">
                    </div>
                    <button type="button" id="contact_button" class="btn btn-danger btn-block">Submit</button>
                    <div class="mt-4" id="contact_message"></div>
                </form>
            </div>

            <div class="offset-sm-2 col-sm-5">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, iusto porro <br>
                    Quaerat
                    blanditiis eligendi, eius amet voluptatum architecto eaque illo fugiat dolorem dignissimos
                    quisquam doloribus nam, deleniti optio ipsa natus.</p>
                <ul>
                    <li>329 Easy Coding, MA 02108</li>
                    <li>+(617) 557-0089</li>
                    <li>ecoding45@gmail.com</li>
                    <li>+000-000000-99</li>
                    <li>+000-000000-99</li>
                    <li>+000-000000-99</li>
                </ul>
            </div>

        </div>

    </div>
</section>
<!-- Contact us Form End -->





<!-- Footer Section Start -->
<?php require_once("header_footer/footer.php"); ?>
<!-- Footer Section End -->