<div class="container">
    <header>
        <div class="header1">
            <p>EXPRESS SHIPPING ON ORDERS OVER &dollar;180</p>
        </div>
        <div class="header2">
            <div class="menu" id="menu">

                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>

            </div>
            <div class="name">
                <span class="name1">P</span>
                <span class="name1">R</span>
                <span class="name1">E</span>
                <span class="name2">Z</span>
                <span class="name2">Z</span>
                <span class="name2">Y</span>
            </div>
            <div class="items">
                <div class="items1">
                    <a href="/commerce101/wishlist">
                    <span class="fa fa-heart"></span>
                    <span class="high1" id="high1"><span class="thenumbers" id="thenumber1"><?= $countwishlist['COUNT(*)'] ?></span></span>
                    </a>
                </div>
                <div class="items2" id="viewcart">
                    <span class="fa fa-shopping-cart"></span>
                    <span class="high2" id="high2"><span class="thenumbers" id="thenumber2"><?= $countcartlist['COUNT(*)'] ?></span></span>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="display" id="display">
            <div class="bars" id="bars">
                <div class="search">
                    <form action="">
                        <input type="search" placeholder="search products..." name="search" value="<?= $search ?>">
                    </form>
                </div>
                <div class="menu" id="menuback">

                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>

                </div>
                <div class="bars2">
                    <span><a href="/commerce101/">Home</a></span>
                    <span>Off sales</span>
                    <span>Contact</span>
                    <span>Help</span>
                    <span>About Us</span>
                    <span>Login / Register</span>
                </div>
                <div class="socials">
                    <span class="fa-brands fa-facebook"></span>
                    <span class="fa-brands fa-instagram"></span>
                    <span class="fa-brands fa-twitter"></span>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="cartdisplay" id="cartdisplay">
            <div class="cartbars" id="cartbars">
                <div class="cartscroll" id="cartTotalAmountContainer">
                    <div class="cartheader"><span>Shopping Cart</span></div>

                    <section>
                        <div class="mainlist <?= $hide_cartlist ?>">
                        <div class="no-wishlist">
                            <span class="fa fa-shopping-cart"></span>
                            <div class="cancelline"></div>
                        </div>
                        <div class="no-wishlist2">
                            <span>No cart available</span>
                        </div>
                        </div>
                    </section>
                    <?php foreach ($cartorders as $cartorder) : ?>
                        <form action="/commerce101/home/deletecart" method="POST">
                            <div class="cartbody">
                                <div class="cartbody1">
                                    <img class="cartbody1a" src="<?= explode(',', $cartorder['image'])[0] //explode to convert the string separated by comma to array. implode before entering the database?>" alt="">
                                </div>
                                <div class="cartbody2">
                                    <span class="cartbody2a"><?= $cartorder['title'] ?></span>
                                    <span class="cartbody2b">Size: <?= $cartorder['sizes'] ?></span>
                                    <span class="cartbody2c">&#8358;<?= number_format($cartorder['new_price']*$cartorder['total_number'], 0, ".", ","); ?></span>
                                    <div class="cartbody2dbody">
                                        <div>
                                            <span>Quantity:</span>
                                        <div class="cartbody2d">
                                            <span class="cartminus hide">&ndash;</span>
                                            <span class="cartnumber"><?= $cartorder['total_number'] ?? 1 ?></span>
                                            <span class="cartplus hide">+</span>
                                        </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="cartbody3 x-marked" >
                                    <input type="hidden" name="x-marked" value="<?= $cartorder['id']?>">
                                <button type="submit">
                                    <div class="cartline1"></div>
                                    <div class="cartline2"></div>
                                </button>
                                </div>
                            </div>
                        </form>

                    <?php endforeach; ?>
                </div>

                <div class="cartdown <?= $hide_checkout ?>">
                    <div class="cartdown1">
                        <span>Subtotal:</span>
                        <span>&#8358;<span id="subtotalAmount"></span></span>
                    </div>
                    <div class="cartdown2">
                        <span>CHECK OUT</span>
                    </div>
                </div>
            </div>

        </div>

    </section>

    

    