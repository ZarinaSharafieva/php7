<?php

include('tovars/tovars.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>sm7</title>
</head>
<body>
<div class="content">
        <div class="container">
            <h2 class="">Категории</h2>

            <div class="block">
              <?php
              $categories = getGoodsCountByCategory();

              foreach ($categories as $category) { ?>
                  <p>
                      <?= $category['name'] ?>:
                     <div class="container1__count"><?= $category['count'] ?></div> 
                  </p>
              <? } ?>
            </div>
        </div>

        <div class="container">
            <h2>Список товаров</h2>

            <?php
            $goods = getGoodsList();

            foreach ($goods as $good) { ?>
                <p class="container2__p">
                    <?= $good['name'] ?>:<br>
                  <span class="span"><?= $good['category_name'] ?></span>  
                </p>
            <? } ?>
        </div>
   

    <div class="container">
        <h2>Средняя цена товара - 
        <span class="span2"> <?= getGoodsAvgPrice() ?> ₽ </span>
        </h2>
    </div>

    <div class="container">
        <h2>Общий вес товаров - 
            <span class="span2"><?= getGoodsWeightSum() ?> г.</span>
        </h2>
    </div>
    </div>
</body>
</html>