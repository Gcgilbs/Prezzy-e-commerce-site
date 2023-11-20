<?php require_once 'views/partials/header.php'; ?>
<title><?= $title ?></title>
</head>

<body>
  <?php require_once 'views/partials/navbar.php'; ?>



  <section>
    <div class="productbar" id="productbar">
      <div class="displayfilter" id="displayfilter">
        <div class="search">
          <form action="">
            <input type="search" placeholder="search products..." name="search" value="<?= $search ?>">
          </form>
        </div>
        <div class="filtermenu" id="filtermenu">

          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>

        </div>
        <div class="pricefilter">
          <span class="pricefilter1">Filter by price</span>
          <form action="">
            <div class="range-slider-container">
              <div class="range-slider">
                <div class="range-fill" id="rangeFill"></div>
                <div class="range-slider-handle" id="minHandle"></div>
                <div class="range-slider-handle" id="maxHandle"></div>
              </div>
              <div class="range-values">
                <div class="range-values1">
                  <span>Price:&nbsp;</span>
                  <div>
                    <span>&#8358;</span><span id="minValue">0</span><span>&nbsp;&ndash;&nbsp;</span>
                  </div>
                  <div>
                    <span>&#8358;</span><span id="maxValue">1000</span>
                  </div>
                </div>
                <button type="submit">Filter</button>
              </div>
            </div>
            <input type="number" id="minPriceInput" name="minPrice" hidden>
            <input type="number" id="maxPriceInput" name="maxPrice" hidden>
          </form>
        </div>
        <div class="productcategories">
          <span class="productcategories1">Product categories</span>
          <span class="productcategories2"><a href="">
              <form action=""><input type="hidden" name="new-arrival" value="<?= Generatereferral() ?>"><button>New arrivals</button></form>
            </a></span>
          <span class="productcategories3"><a href="">Women</a></span>
          <ul class="productcategories4">

            <li><a href="">
                <form action=""><input type="hidden" name="active-wears" value="1"><button>> active wears</button></form>
              </a></li>
            <li><a href="">
                <form action=""><input type="hidden" name="bodysuit" value="2"><button>> Bodysuit</button></form>
              </a></li>
            <li><a href="">
                <form action=""><input type="hidden" name="co-ords" value="3"><button>> Co-ords</button></form>
              </a></li>
            <li><a href="">
                <form action=""><input type="hidden" name="dresses" value="4"><button>> Dresses</button></form>
              </a></li>
            <li><a href="">
                <form action=""><input type="hidden" name="jacket" value="5"><button>> Jacket</button></form>
              </a></li>
            <li><a href="">
                <form action=""><input type="hidden" name="jeans" value="6"><button>> Jeans</button></form>
              </a></li>
            <li><a href="">
                <form action=""><input type="hidden" name="jumpsuit" value="7"><button>> Jumpsuit</button></form>
              </a></li>
            <li><a href="">
                <form action=""><input type="hidden" name="pants" value="8"><button>> Pants</button></form>
              </a></li>
            <li><a href="">
                <form action=""><input type="hidden" name="shorts" value="9"><button>> Shorts</button></form>
              </a></li>
            <li><a href="">
                <form action=""><input type="hidden" name="skirts" value="10"><button>> Skirts</button></form>
              </a></li>
            <li><a href="">
                <form action=""><input type="hidden" name="tops" value="11"><button>> Tops</button></form>
              </a></li>

          </ul>
          <span class="productcategories5">Filter by size</span>
          <ul class="productcategories6">
            <li><span><a href="">
                  <form action=""><input type="hidden" name="six-size" value="<?= $countsize6[0] ?>"><button>6</button></form>
                </a></span> <span>(<?= $countsize6[0] ?>)</span></li>
            <li><span><a href="">
                  <form action=""><input type="hidden" name="eight-size" value="<?= $countsize8[0] ?>"><button>8</button></form>
                </a></span> <span>(<?= $countsize8[0] ?>)</span></li>
            <li><span><a href="">
                  <form action=""><input type="hidden" name="ten-size" value="<?= $countsize10[0] ?>"><button>10</button></form>
                </a></span> <span>(<?= $countsize10[0] ?>)</span></li>
            <li><span><a href="">
                  <form action=""><input type="hidden" name="twelve-size" value="<?= $countsize12[0] ?>"><button>12</button></form>
                </a></span> <span>(<?= $countsize12[0] ?>)</span></li>
            <li><span><a href="">
                  <form action=""><input type="hidden" name="fourteen-size" value="<?= $countsize14[0] ?>"><button>14</button></form>
                </a></span> <span>(<?= $countsize14[0] ?>)</span></li>
            <li><span><a href="">
                  <form action=""><input type="hidden" name="sixteen-size" value="<?= $countsize16[0] ?>"><button>16</button></form>
                </a></span> <span>(<?= $countsize16[0] ?>)</span></li>
          </ul>
        </div>

      </div>
    </div>

  </section>

  <section>
    <div class="double">
      <div class="filter" id="filter">
        <span class="fa fa-filter"></span>
        <span>&nbsp;Filter</span>
      </div>
      <div class="latest">
        <form action="">
          <select name="" id="">
            <option value="">Sort by latest</option>
            <option value="">Sort by average rating</option>
            <option value="">Sort by price: low to high</option>
            <option value="">Sort by price: high to low</option>
            <option value="">Sort by popularity</option>
            <option value="">Random</option>
          </select>
        </form>
      </div>
    </div>
  </section>

  <section>
    <div class="listing">
      <?php foreach ($productsOnPage as $product) : ?>

        <?php
        // Retrieve the Addtocart information for the current product
        $addtocart = $conn->select("SELECT * FROM products JOIN cart ON products.id = cart.product_id
        WHERE cart.session = ? AND products.id = ?", [session_id(), $product['id']])->fetchAll(PDO::FETCH_ASSOC);

        // Check if the Addtocart array is not empty, indicating the product is in the wishlist
        $addtocartlist = !empty($addtocart) ? 'addcart' : 'removecart';
        

        // Retrieve the wishlist information for the current product
        $wishlistInfo = $conn->select("SELECT * FROM products JOIN wishlist ON products.id = wishlist.product_id
        WHERE wishlist.session = ? AND products.id = ? AND wishlist.publish = 1", [session_id(), $product['id']])->fetchAll(PDO::FETCH_ASSOC);

        // Check if the wishlistInfo array is not empty, indicating the product is in the wishlist
        $checkwishlist = !empty($wishlistInfo) ? 'addwishlist' : 'removewishlist';

        // fetch size6 if not equal 0
        $sizeinfo6 = $conn->select("SELECT * FROM products WHERE id = ? AND size_6 = ?", [ $product['id'],6])->fetch(PDO::FETCH_ASSOC);

        $sizeinvisible6 = !empty($sizeinfo6['size_6']) ? 'door' : 'invisible';

        // fetch size8 if not equal 0
        $sizeinfo8 = $conn->select("SELECT * FROM products WHERE id = ? AND size_8 = ?", [ $product['id'],8])->fetch(PDO::FETCH_ASSOC);

        $sizeinvisible8 = !empty($sizeinfo8['size_8']) ? '' : 'invisible';

        // fetch size10 if not equal 0
        $sizeinfo10 = $conn->select("SELECT * FROM products WHERE id = ? AND size_10 = ?", [ $product['id'],10])->fetch(PDO::FETCH_ASSOC);

        $sizeinvisible10 = !empty($sizeinfo10['size_10']) ? '' : 'invisible';

        // fetch size12 if not equal 0
        $sizeinfo12 = $conn->select("SELECT * FROM products WHERE id = ? AND size_12 = ?", [ $product['id'],12])->fetch(PDO::FETCH_ASSOC);

        $sizeinvisible12 = !empty($sizeinfo12['size_12']) ? '' : 'invisible';

        // fetch size14 if not equal 0
        $sizeinfo14 = $conn->select("SELECT * FROM products WHERE id = ? AND size_14 = ?", [ $product['id'],14])->fetch(PDO::FETCH_ASSOC);

        $sizeinvisible14 = !empty($sizeinfo14['size_14']) ? '' : 'invisible';

        // fetch size16 if not equal 0
        $sizeinfo16 = $conn->select("SELECT * FROM products WHERE id = ? AND size_16 = ?", [ $product['id'],16])->fetch(PDO::FETCH_ASSOC);

        $sizeinvisible16 = !empty($sizeinfo16['size_16']) ? '' : 'invisible';

        ?>

        <div class="listing1">
          <div class="image">
            <a href="/commerce101/viewproduct?items=<?= $product['id'] ?>">
            <img src="<?= explode(',', $product['image'])[0] //explode to convert the string separated by comma to array. implode before entering the database
                      ?>" alt="" width="150px" height="150px">
            <span class="imageup <?= $addtocartlist ?>"><span class="fa fa-shopping-cart"></span></span>
            </a>
            <span class="imagedown" id="imagedown" data-id="<?= $product['id'] ?>">
              <button data-wishlist="<?= $product['id'] ?>"><span class="fa fa-heart <?= $checkwishlist ?>"></span></button>
            </span>
          </div>
          <div class="desc">
            <span class="desc1"><?= $product['title'] ?></span>
            <span class="desc2">&#8358; <?= number_format($product['new_price'],0,".",","); ?></span>
            <div class="select" data-id="<?= $product['id'] ?>">
              <span class="desc3" id="desc3"><span class="spandesc" id="spandesc">SELECT OPTIONS</span></span>
              <div class="optionup" id="optionup">
              <div class="optionupflex">
                <span class="<?= $sizeinvisible6?> putspace border border6">size-<?= $sizeinfo6['size_6'] ?? '' ?></span>
                <span class="<?= $sizeinvisible8?> putspace border border8" >size-<?= $sizeinfo8['size_8'] ?? '' ?></span>
                <span class="<?= $sizeinvisible10?> border border10" >size-<?= $sizeinfo10['size_10'] ?? '' ?></span>
                <span class="<?= $sizeinvisible12?> border border12" >size-<?= $sizeinfo12['size_12'] ?? '' ?></span>
                <span class="<?= $sizeinvisible14?> border border14" >size-<?= $sizeinfo14['size_14'] ?? '' ?></span>
                <span class="<?= $sizeinvisible16?> border border16">size-<?= $sizeinfo16['size_16'] ?? '' ?></span>
                
              </div>
              </div>
              <div class="optiondown" id="optiondown">
                <div class="optiondown1">
                  <span class="minus">&ndash;</span>
                  <span class="number">1</span>
                  <span class="plus">+</span>
                </div>
                <!-- <div class="optiondown2"> -->
                  <button data-cartlist="<?= $product['id'] ?>" class="fa fa-shopping-cart fabutton optiondown2"></button>
                <!-- </div> -->
              </div>
            </div>
          </div>
        </div>

      <?php endforeach; ?>

    </div>
  </section>

  <footer>
    <div class="numbers">
    <span class="<?= $hide_prev ?>"><a href="?page=<?= $minuspage ?>">Prev</a></span>
      <!-- <span class="activefooter"><a href="">1</a></span> -->
      <?php for ($i = 1; $i <= $totalPages; $i++) : ?> 
         
          <span><a class="<?=!empty((int)$i === (int)$page)? 'activefooter' : '';?>" href="?page=<?= $i?>"><?= $i ?></a></span>
          
      <?php endfor; ?>
      <!-- <span><a href="">3</a></span>
      <span><a href="">4</a></span>
      <span>...</span>
      <span><a href="">6</a></span>
      <span><a href="">7</a></span>
      <span><a href="">8</a></span> -->
      
      <span class="<?= $hide_next ?>"><a href="?page=<?= $pluspage ?>">Next</a></span>
    </div>
  </footer>

  </div>
</body>

<script src="js/index.js"></script>
<script src="js/rangeslider.js"></script>
<script src="js/cartnumber.js"></script>
<script src="js/displaycart.js"></script>
<script src="js/cartlist.js"></script>
<script src="js/wishlist.js"></script>
<script src="js/selectoption.js"></script>
<script src="js/jquery.js"></script>

</html>