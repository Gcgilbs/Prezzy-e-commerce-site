<?php require_once 'views/partials/header.php'; ?>
<title><?= $title ?></title>
</head>

<body>
    <?php require_once 'views/partials/navbar.php'; ?>

    <section>
        <div class="itemimage" data-id="<?= $productitem['id'] ?>">
        <div class="imagecontainer">
            <div class="holdplus">
                <?php foreach ($images as $image) : ?>
                    <div class="itemimagemain">
                        <img class="itemimage1" src="<?= $image ?>" alt="">
                    </div>
                <?php endforeach; ?>
                <a class="prev" onclick="plusslides(-1)">
                    <div class="holder">
                        <div class="container-holder-prev">

                            <div class="plusline1"></div>
                            <div class="plusline2"></div>
                            <div class="plusline3"></div>

                        </div>
                    </div>
                </a>
                <a class="next" onclick="plusslides(1)">
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
                <?php $index = 1; // Initialize the index
                ?>
                <?php foreach ($images as $image) : ?>
                    <img class="itemimage2" onclick="currentslide(<?= $index ?>)" src="<?= $image ?>" alt="">
                    <?php $index++; // Increment the index for the next image 
                    ?>
                <?php endforeach; ?>
            </div>
            </div>


            <div class="titleitem">
                <span class="titleitem1"><?= $productitem['title'] ?></span>
                <span class="titleitem2">&#8358;<?= number_format($productitem['new_price'], 0, ".", ","); ?></span>
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

        <div class="error">
            <div class="error1">
            <div class="error2">
                <p>Select your size before add to cart</p>
            </div>
        </div>
        </div>

    </section>

</body>

<script src="js/index.js"></script>
<script src="js/cartnumber.js"></script>
<script src="js/displaycart.js"></script>
<script src="js/cartlist.js"></script>
<script src="js/wishlist.js"></script>
<script src="js/slider.js"></script>
<script src="js/addtocartpage.js"></script>

</html>