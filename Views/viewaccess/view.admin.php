<?php require_once 'views/partials/adminheader.php'; ?>
<title><?= $title ?></title>
</head>

<body>
    <?php require_once 'views/partials/adminnavbar.php'; ?>


    <section class="invoice">

        <div class="form">

        
        <?php if($error): ?>
            <div class="divalert-danger" id="alert">
                <p class="alert"><?=$error[0]?></p>
                <button class="setclose-danger" id="setclose">
                    <div class="close"></div>
                    <div class="close2"></div>
                </button>
            </div>
            <?php endif; ?>
           
        <h1 class="textup">Orders</h1>

            <form action="" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="edit">

                <label for="">Image:</label>
                <input type="file" name="image[]" multiple>

                <label for="">Title:</label>
                <input type="text" name="title" class="input" value="">

                <label for="">New price:</label>
                <input type="number" name="new_price" class="input" value="">

                <label for="">Old price:</label>
                <input type="number" name="old_price" class="input" value="">

                <label for="">Category:</label>
                <select name="category" id="" class="input">
                    <option value="">Choose category</option>
                <?php foreach($category as $value): ?>
                    <option value="<?=$value['id']?>"><?=$value['title']?></option>
                <?php endforeach; ?>
            
                </select>

                <div>

                    <span class="available">Available sizes:</span>

                    <div class="check">

                    <div  class="checkform" id="checkform">
                    <label for="size-6">Size-6</label>
                    <input type="checkbox" id="size-6" name="size_6">
                    </div>
                    <div class="checkform" id="checkform">
                    <label for="size-8">Size-8</label>
                    <input type="checkbox" id="size-8" name="size_8">
                    </div>
                    <div class="checkform" id="checkform">
                    <label for="size-10">Size-10</label>
                    <input type="checkbox" id="size-10" name="size_10" >
                    </div>
                    <div class="checkform" id="checkform"><label for="size-12">Size-12</label>
                    <input type="checkbox" id="size-12" name="size_12"></div>
                    <div class="checkform" id="checkform">
                    <label for="size-14">Size-14</label>
                    <input type="checkbox" id="size-14" name="size_14">
                    </div>
                    <div class="checkform" id="checkform">
                    <label for="size-16">Size-16</label>
                    <input type="checkbox" id="size-16" name="size_16">
                    </div>  
                    
                </div>

                </div>

                <button type="submit" class="formcontrol">Submit</button>


            </form>
        </div>

    </section>


    </div>
</body>

<script src="/commerce101/js/index.js"></script>
<script src="/commerce101/js/checkinput.js"></script>
<script src="/commerce101/js/admincartnumber.js"></script>
<script src="/commerce101/js/admin.js"></script>

</html>