    
    <style>
        /* #viewOnMapdiv
        {
            animation: zoom_popup 0.7s
        } */

        .blur
        {
            filter: blur(4px);
        } 
        @keyframes zoom_popup
        {
            0%
            {
                transform: scale(0);
            }
            35%{
                transform: scale(1.15);

            }
            90%{
                transform: scale(0.9);

            }
            100%{
                transform: scale(1);

            }
        }
        @keyframes zoom_popup_fade
        {
            0%
            {
                transform: scale(1);
            }
            35%{
                transform: scale(1.15);

            }
            90%{
                transform: scale(0.9);

            }
            100%{
                transform: scale(0);
               

            }
        }
    </style>

<footer>
    <div class="footer-wrapper bg_update p-b-40 p-t-30">
        <hr class="m-t-20 w-p-90  m-a m-b-29">
        <div class="footer-inner-wrapper ">
            <div class="footer-content">
                <div class="upper-footer display-flex">
                    <div class="col-3 col-m-5 col-s-6">
                        <div class="footer-box">
                            <div class="inner-box">
                                <div class="footer-title">
                                    <img class="w-150" src="<?php base();?>kicks_files/pngs/shoe_footer.png" alt="">
                                </div>
                                <div class="footer-logo-desc">
                                    <p class="color_fade f-s-16">
                                        Company guarante secured transaction by signing a 
                                        debt guarantee guarantee contract with Bankfor the amount 
                                        of cash payment by the customer
                                    </p>
                                </div>
                                <div class="location">
                                    <div class="p-t-20">
                                        <p class="color_fade f-s-16">17 Princess Road, London, Greater London NW1 8JR, UK</p>
                                    </div>
                                </div>
                                <div class="view_on_map">
                                    <div class="m-t-35">
                                        <button id="viewOnMapBTN" class="bg_red b-n p-13-29 b-r-4 f-s-13 c-white"  style="align-items: center; display:flex;justify-content: center;">
                                            <img src="http://127.0.0.1/shoetailor/kicks_files/svgs/location.svg" class="w-18">    
                                            <p style=" display:flex;justify-content: center;" class=" p-l-10">View On Map</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-m-3 col-s-5">
                        <div class="footer-box">
                            <div class="inner-box">
                                <div class="footer-title">
                                    <h2  class="p-l-10 f-s-18 c_black_1">Our Stores</h2>
                                </div>
                                <ul class="ul color_fade f-s-15">
                                    <li><a href="">Nairobi</a></li>
                                    <li><a href="">Thika</a></li>
                                    <li><a href="">Ruiru</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-m-3 col-s-5">
                        <div class="footer-box">
                            <div class="inner-box">
                                <div class=" footer-title">
                                    <h2  class="p-l-10 f-s-18">Quick Links</h2>
                                </div>
                                <ul class="ul color_fade f-s-15">
                                    <li><a href="">Support Center</a></li>
                                    <li><a href="">Terms & Conditions</a></li>
                                    <li><a href="">Shipping</a></li>
                                    <li><a href="">Privacy Policy</a></li>
                                    <li><a href="">Help</a></li>
                                    <li><a href="">Products Return</a></li>
                                    <li><a href="">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>   
                    <div class="col-4 p-t-10 box col-m-6 ">                
                        <div class="footer-box">
                            <div class="p-1-20">
                                <div class="title">
                                    <h2 class="f-s-18">Subscribe</h2>
                                </div>
                                <div class="footer-logo-desc">
                                    <div class="p-t-10">
                                    <p class="f-s-16">
                                        Don’t miss to subscribe to our new feeds, 
                                        kindly fill the form below.Company guarante secured 
                                        transaction by signing a debt guarantee guarantee contract
                                    </p>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lower-footer-div w-p-100 bg_update_1">
        <div class="lower-footer">
            <div class="lower-inner-wrapper  p-20-0 m-t-20">
                <div class="col-6 ">
                    <p class="color_fade f-s-14">
                        &copy; &nbsp; 
                        <span id="currentYear"></span>&nbsp; 
                        Copyrights By <?php echo $_ENV['APP_NAME'];?> - Kenya
                    </p>
                </div>
                <div class="col-6">
                    <p class="p-l-30 f-s-16">
                        Made with ❤️ by 
                        <a href="" class="f-w-800" style="color: rgb(0, 133,221) !important;">
                            jonWaithira
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
    <div  class="w-p-100 hide" id="viewOnMap">
        <div class=" m-a w-p-100" style="top:50px;position: fixed; z-index: 900; " id="viewOnMapdiv">
            <div class="col-10 m-a">
                <div class="m-10">
                    <div class=" b-white p-20 box-shadow">
                        <div class="" style="width: 100%;">
                            <div class="c-pointer " style="display: flex; float:right;" id="close">
                                <p class="bg_update p-0-12 b-r-100 f-s-30 f-w-900" >&times;</p>
                            </div>
                            <div class="map_display">
                                <img src="http://127.0.0.1/shoetailor/kicks_files/svgs/adopters-bg.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php base();?>ke/js/jQuery.js"></script>
    <script src="<?php base();?>ke/js/index.js"></script>
    <script src="<?php base();?>ke/js/app.js"></script>
    <script src="<?php base();?>ke/js/livesearch.js"></script>
    </body>
</html>