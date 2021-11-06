<!-- Footer Section Start -->
<footer>
    <a href="">@EasyCoding</a>
</footer>
<!-- Footer Section End -->



<!--============================
   POPUP SECTION START 
 =============================-->

<!-- ======POPUP FOR ABOUT US SECTION START ===========-->


<div class="modal fade" id="about_us_popup">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="user_login_label">About Easy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Text Start -->
                <h6>About <span>Easy College</span></h6>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet sint possimus harum iure consectetur aliquam doloremque praesentium repellendus temporibus repudiandae fugiat sit molestias quae, ex ipsum facilis consequatur. Reprehenderit, atque. <br><br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste aliquid facere itaque, nulla voluptatem explicabo ut pariatur autem dolorum laboriosam praesentium aliquam quo amet quis totam a ipsum placeat. Ipsam? <br><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis beatae nesciunt animi, sint perspiciatis harum tempore, at saepe libero molestias necessitatibus iste sit eligendi unde aliquam aliquid autem est ullam. <br><br><br><br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam officiis aliquam modi, recusandae eveniet soluta non? Dignissimos quaerat neque ullam necessitatibus aspernatur similique? Consectetur dicta nisi, distinctio rem officia omnis.</p>
                <!-- Text End -->


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Read More</button>
            </div>
        </div>
    </div>
</div>
<!-- ======POPUP FOR ABOUT US SECTION END ===========-->



<!-- ======POPUP FOR LOGIN SECTION START ===========-->


<div class="modal fade" id="user_login">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="user_login_label">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Form Start -->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-11">
                            <form action="" id="login_form_id" class="shadow-lg p-5">

                                <div id="login_main_message"></div>

                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Email</label>
                                    <small id="login_email_message"></small>
                                    <input type="email" class="font-weight-bold form-control" id="login_email" placeholder="Enter Your Email">
                                </div>

                                <div class="form-group">
                                    <label for="" class="font-weight-bold">Password</label>
                                    <small id="login_password_message"></small>
                                    <input type="password" id="login_password" class="font-weight-bold form-control" placeholder="Enter Your Password">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- Form End -->


            </div>
            <div class="modal-footer">
                <div id="spinner"></div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="login_button" class="btn btn-success">Login</button>
            </div>
        </div>
    </div>
</div>
<!-- ======POPUP FOR LOGIN SECTION END ===========-->


<!-- ======POPUP FOR COLLEGE TOUR SECTION START ===========-->

<div class="modal fade" id="college_virtual_tour">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">

                <h6 class="font-weight-bold m-4" style="font-size: 30px; text-align:center; color:#dc3445;">Welcome To Virtual College Tour</h6>
                <p style="font-size:13px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, neque facere, cum corporis porro praesentium nihil reprehenderit voluptatem incidunt aliquam, rem dolorum quo voluptates nobis similique id deleniti natus explicabo? <br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae libero magni, nulla rem cumque, iste corrupti sapiente, rerum alias ut soluta laboriosam aut facilis ullam obcaecati! Quos odio ipsam esse. <br><br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima earum quae, sed atque obcaecati molestias commodi neque corporis. Ab repudiandae facere sed laboriosam vel dicta tenetur ea exercitationem, reiciendis veritatis. <br><br><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi mollitia hic numquam accusantium dolorem soluta, quia facilis officia fugiat consequuntur velit provident eaque magni repellendus laborum aliquid ipsum asperiores ratione.</p>
                <div class="float-right">
                    <a href="./tour/garden_tour.php" type="button" class="btn btn-success">Garden</a>
                    <a href="./tour/campus_tour.php" type="button" class="btn btn-success">Campus</a>
                    <a href="./tour/class_tour.php" type="button" class="btn btn-success">Class Tour</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ======POPUP FOR COLLEGE TOUR SECTION END ===========-->




<!--============================== 
    POPUP SECTION END
  ==============================--->







</body>
<script src="js/jquery.js"></script>
<script src="js/pooper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script>


<!--  -->
<script>
    //For Scroll
    $(document).scroll(function() {
        $(".navbar").toggleClass("scroll", $(this).scrollTop() > $(".navbar").height());
    })
</script>
<!--  -->


</html>