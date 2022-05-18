<div class="scroll-div">
    <button class="scroll-btn" id="scroll-btn">
        <p>Back Top</p>
    </button>
</div>
<header>
    <nav>
        <div class="wrapper">
            <input  type="checkbox" name="checkNavBar"  id="checkNavBar">
            <h1 class="logo"><a href="http://127.0.0.1/shoe/"><img src="http://127.0.0.1/shoe/storage/s_files/shoe_footer.png"></a></h1>       
            <div class="nav-items">
               <div class="links">
                    <li class="nav-links"><a id="a" href="#">Home</a></li>
                    <li class="nav-links page c-pointer">Pages
                        <div class="pages-dropdown box-shadow1 w-200 p-5-5 m-t-4">
                            <div class="dropdown">
                               <ul>
                                <li><a id="a" href="#a">About Us</a></li>
                                <li><a id="a" href="#con">Contact Us</a></li>
                                <li><a id="a" href="#f">FAQs</a></li>
                                <li><a id="a" href="#t">Terms & Conditions</a></li>
                                <li><a id="a" href="#p">Products</a></li>
                               </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-links"><a id="a" href="#">Shop</a></li>
                    <li class="nav-links">
                        <a id="a" href="<?php BASE;?>wishlist">
                            <img title="wishlist" class="w-30 img" src="http://127.0.0.1/shoe/storage/app/cart.svg">
                            <span class="count">2</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a id="a" href="<?php BASE;?>cart">
                            <img title="Cart" class="w-30 img" src="http://127.0.0.1/shoe/storage/app/bag.svg">
                            <span class="count">4</span>
                        </a>
                    </li>
               </div>
               <div class="link-btns">
                    
                    <?php 
                        session_start();
                        if(isset($_SESSION['kicksuserlogin']))
                        {
                        ?>
                            <button class="bg-inherit"><a href="">Logout</a></button>     
                        <?php
                        }else{
                        ?>
        <button class="bg-inherit"><a href="" >Login</a></button>
                            <button class="bg-inherit"><a href="">Create Acc</a></button>     
                        <?php
                        }
                    ?>       
               </div>
            </div>
            <label id="humberger" for="checkNavBar">
                <div class="menu"></div>
                <div class="menu mid"></div>
                <div class="menu"></div>
            </label>
        </div>
        <div class="col-12 m-b-5">
           <form style="" autocomplete="off" action="<?php BASE;?>search/" method="get" id="search_for_products">
                <div class="search-box w-p-90 m-a">
                    <div class="input display-flex b-r-5 c-white col-6 m-a" style="background: #f8f8f8;">
                        <img id="searchsvg" src="<?php BASE;?>kicks_files/svgs/search.svg" class="p-l-19" style="width: 18px !important;" alt="">
                        <input type="text"  placeholder="search for products, brands and category" style="outline: none; background: transparent; flex: 1;" id="textSearch" name="search" class="b-n w-p-90 p-13-15 m-a"> <button class="p-l-10 p-r-20 b-n f-s-16 c-white f-w-800 b-t-r-r-10 b-b-r-r-10" style="background:  rgb(237, 164, 17); " >Search</button>
                    </div>
                    <div style="position:absolute;left: 0; right: 0; " class="col-6 m-a m-t-4 search-suggestion">
                        <div class="w-p-94 m-a">
                            <div class="box-shadow1  m-l-10 m-r-10 m-b-10" style="background: #f8f8f8; z-index:1000;">
                                <div class="product-search p-0-15">
                                    <div class="results">
                                        <div class="product-link">
                                            <div class="result-div">
                                                <div class="result"></div>
                                            </div> 
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </form>
        </div>
    </nav>
    <hr style="border: 1px solid #f8f8f8">
</header>
<script src="http://127.0.0.1/shoetailor/ke/js/jQuery.js"></script>
<script src="http://127.0.0.1/shoetailor/ke/js/livesearch.js"></script>