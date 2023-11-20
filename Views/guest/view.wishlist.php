<?php require_once 'views/partials/header.php'; ?>
<title><?= $title ?></title>
</head>

<body>
    <?php require_once 'views/partials/navbar.php'; ?>

    <section>
        <div class="mainlist <?= $hide_wishlist ?>">
        <div class="no-wishlist">
            <span class="fa fa-heart"></span>
            <div class="cancelline"></div>
        </div>
        <div class="no-wishlist2">
            <span>No wishlist available</span>
        </div>
        </div>
    </section>

    <section>
    <?php foreach ($wishlistproducts as $wishlistproduct) : ?>

        <?php 
            
            $wishlist = $conn->select("SELECT * FROM products WHERE id = ?",[$wishlistproduct['product_id']])->fetch();

            $images = explode(',', $wishlist['image']);
            
            
        // fetch size6 if not equal 0
        $sizeinfo6 = $conn->select("SELECT * FROM products WHERE id = ? AND size_6 = ?", [ $wishlist['id'],6])->fetch(PDO::FETCH_ASSOC);

        $sizeinvisible6 = !empty($sizeinfo6['size_6']) ? 'door' : 'invisible';

        // fetch size8 if not equal 0
        $sizeinfo8 = $conn->select("SELECT * FROM products WHERE id = ? AND size_8 = ?", [ $wishlist['id'],8])->fetch(PDO::FETCH_ASSOC);

        $sizeinvisible8 = !empty($sizeinfo8['size_8']) ? '' : 'invisible';

        // fetch size10 if not equal 0
        $sizeinfo10 = $conn->select("SELECT * FROM products WHERE id = ? AND size_10 = ?", [ $wishlist['id'],10])->fetch(PDO::FETCH_ASSOC);

        $sizeinvisible10 = !empty($sizeinfo10['size_10']) ? '' : 'invisible';

        // fetch size12 if not equal 0
        $sizeinfo12 = $conn->select("SELECT * FROM products WHERE id = ? AND size_12 = ?", [ $wishlist['id'],12])->fetch(PDO::FETCH_ASSOC);

        $sizeinvisible12 = !empty($sizeinfo12['size_12']) ? '' : 'invisible';

        // fetch size14 if not equal 0
        $sizeinfo14 = $conn->select("SELECT * FROM products WHERE id = ? AND size_14 = ?", [ $wishlist['id'],14])->fetch(PDO::FETCH_ASSOC);

        $sizeinvisible14 = !empty($sizeinfo14['size_14']) ? '' : 'invisible';

        // fetch size16 if not equal 0
        $sizeinfo16 = $conn->select("SELECT * FROM products WHERE id = ? AND size_16 = ?", [ $wishlist['id'],16])->fetch(PDO::FETCH_ASSOC);

        $sizeinvisible16 = !empty($sizeinfo16['size_16']) ? '' : 'invisible';

        ?>
        <div class="itemimage" id="wishitem" data-id="<?= $wishlist['id'] ?>">
        <div class="imagecontainer">
            <div class="holdplus">
                <?php foreach ($images as $image) : ?>
                    <div class="itemimagemain">
                        <img class="itemimage1" src="<?= $image ?>" alt="">
                    </div>
                <?php endforeach; ?>
                <a class="prev">
                    <div class="holder">
                        <div class="container-holder-prev">

                            <div class="plusline1"></div>
                            <div class="plusline2"></div>
                            <div class="plusline3"></div>

                        </div>
                    </div>
                </a>
                <a class="next">
                    <div class="holder">
                        <div class="container-holder-next">

                            <div class="plusline1"></div>
                            <div class="plusline2"></div>
                            <div class="plusline3"></div>

                        </div>
                    </div>
                </a>
            </div>


            <div>
                
               
                <?php foreach ($images as $image) : ?>
                    <img class="itemimage2"  src="<?= $image ?>" alt="">
                    
                <?php endforeach; ?>
            </div>
            </div>


            <div class="titleitem">
                <span class="titleitem1"><?= $wishlist['title'] ?></span>
                <span class="titleitem2">&#8358;<?= number_format($wishlist['new_price'], 0, ".", ","); ?></span>
                <div class="optionupflex titleitem3a">
                    <span class="<?= $sizeinvisible6 ?> putspace border border6">size-<?= $sizeinfo6['size_6'] ?? '' ?></span>
                    <span class="<?= $sizeinvisible8 ?> putspace border border8">size-<?= $sizeinfo8['size_8'] ?? '' ?></span>
                    <span class="<?= $sizeinvisible10 ?> border border10">size-<?= $sizeinfo10['size_10'] ?? '' ?></span>
                    <span class="<?= $sizeinvisible12 ?> border border12">size-<?= $sizeinfo12['size_12'] ?? '' ?></span>
                    <span class="<?= $sizeinvisible14 ?> border border14">size-<?= $sizeinfo14['size_14'] ?? '' ?></span>
                    <span class="<?= $sizeinvisible16 ?> border border16">size-<?= $sizeinfo16['size_16'] ?? '' ?></span>

                </div>
                <div class="optiondown1 titleitem4">
                    <span class="minus">&ndash;</span>
                    <span class="number">1</span>
                    <span class="plus">+</span>
                </div>
                <div>
                <button class="titleitem5">ADD TO CART</button>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </section>

</body>

<script src="js/index.js"></script>
<script src="js/cartnumber.js"></script>
<script src="js/displaycart.js"></script>
<script src="js/cartlist.js"></script>
<script src="js/wishlist.js"></script>
<!-- <script src="js/slider.js"></script> -->
<script src="js/wishlistslider.js"></script>
<script src="js/addtocartpage.js"></script>

</html>