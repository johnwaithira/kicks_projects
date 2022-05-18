<div class="scroll-div">
    <button class="scroll-btn" id="scroll-btn">
        <p>Back Top</p>
    </button>
</div>
<header>
    <nav>
        <div class="wrapper">
            <input  type="checkbox" name="checkNavBar"  id="checkNavBar">
            <h1 class="logo">
                <a href="http://127.0.0.1/kicksfootware">
                    <!-- <img src="http://127.0.0.1/shoe/storage/s_files/shoe_footer.png"> -->
                    <h3>Kicks Nairobi</h3>
                </a>
            </h1>       
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
                        if(isset($_SESSION['kicksuserloggedin']))
                        {
                        ?>
                            <button class="bg-inherit"><a href="">Logout</a></button>     
                        <?php
                        }else{
                        ?>
                            <a href="" ><button class="bg-inherit">Login</button></a>
                            <a href=""><button class="bg-inherit">Create Acc</button></a>     
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
      
    </nav>
    <hr style="border: 1px solid #f8f8f8">
</header>
