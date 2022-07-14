<?php

/* @var $this yii\web\View */
/* @var $product app\models\Product */
use yii\helpers\Html;

$this->title = 'Каталог';
$this->params['breadcrumbs'][] = $this->title;
?>

 <div class="container-cardnav">
            <div class="container-cardnav-arrow arrowLeft moveLeft">
        <?= Html::submitButton('<i class="fa-solid fa-chevron-left"></i>', ['type' => 'submit', 'name'=>"rev", 'style'=>"border: none"]) ?>
            </div>

            <div class="container-cardnav-arrow arrowRight moveRight"> <?= Html::submitButton('<i class="fa-solid fa-chevron-right"></i>', ['type' => 'submit', 'name'=>"for", 'style'=>"border: none"]);?></div>
        </div>
<div class="container-card">
    <div class="cardInfoCount">
        <div class="cardInfoCount-Counter">
            <div class="cardInfoCount-Counter-one"><?php echo $product->idcard ?> \ </div>
            <div class="cardInfoCount-Counter-all"></div>
        </div>
    </div>
    <div class="cardInfo">
        <div class="cardInfo-Readme">
            <div class="cardInfo-Readme-icon cardInfoIcon"><a href="#"><i class="fa-brands fa-readme"></i></a></div>
            <div id="DropdownReadme" class="readme-description readmeDescriptionShow">
                <ul class='readmeDescriptionShow-basic'>
                    <li>Бренд: <span class="descriptionValue"> <?php echo $product->brand ?></span></li>
                    <li>Название модели:</li>
                    <li>Цвет оправы: <span class="descriptionValue"><?php echo $product->colorframe ?></span></li>
                    <li>Форма оправы: <span class="descriptionValue"><?php echo $product->formframe ?></span></li>
                    <li>Цвет линз: <span class="descriptionValue"><?php echo $product->colorlens ?></span></li>
                    <li>Тип оправы: <span class="descriptionValue"><?php echo $product->typeform ?></span></li>
                    <li>Материал дужка/оправа: <span class="descriptionValue"><?php echo $product->material ?></span> </li>
                    <li>Пол: <span class="descriptionValue"><?php echo $product->gender ?></span></li>
                    <li>Поляризация: <span class="descriptionValue"><?php echo $product->polarization ?></span></li>
                    <li>Артикул модели и цвета: <span class="descriptionValue"><?php echo $product->article ?></span></li>
                    <li>Базовая кривизна линзы: <span class="descriptionValue"><?php echo $product->curvature ?></span></li>
                    <li>Rx-Able: <span class="descriptionValue"><?php echo $product->rxable ?></span></li>
                    <li>Флекс: <span class="descriptionValue"><?php echo $product->flex ?></span></li>
                </ul>
                <ul class='readmeDescriptionShow-size'>
                    <li>Переносица (мост): <span class="descriptionValue"><?php echo $product->nosebridge ?></span></li>
                    <li>Длина заушника: <span class="descriptionValue"><?php echo $product->lengthbracket ?></span></li>
                    <li>Ширина линзы: <span class="descriptionValue"><?php echo $product->widthlens ?></span></li>
                    <li>Высота линзы: <span class="descriptionValue"><?php echo $product->higthlens ?></span></li>
                </ul>
            </div>
        </div>
        <div class="cardInfo-Img">
           <?= Html::img("@web/img/product/$product->idcard.webp")?>
        </div>
        <div class="cardInfo-Buy">
            <div class="cardInfo-Buy-icon cardInfoIcon"><a href="#"><i class="fa-brands fa-cc-visa"></i></a></div>
            <div id="DropdownBuy" class="buyDescriptionShow readme-description">
                <ul class='buyShow'>
                    <li class="buyShow-price">Цена: <span class="descriptionValue">5500рублей</span></li>
                    <li class="buyShow-value">Количество: <select name="selectV" id="selectValue">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select></li>
                    <li class="buyShow-total">Сумма: <span class="totalValue">5500рублей</span> </li>
                    <button type="submit">Добавить в корзину</button>
                    <li class="buyShow-consult">Консультация <button> Позвонить</button></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="cardInfo-Favor">
        <div class="cardInfo-Favor-i"><i class="fa-solid fa-scale-balanced"></i>
        </div>
        <ul class="favorList">
            <li><a href="catalog/img_317880.jpg"><img src="catalog/img_317880.jpg" alt="317880"></a></li>
            <li><a href="catalog/img_344170.jpg"><img src="catalog/img_344170.jpg" alt="317880"></a></li>
            <li><a href="catalog/img_53370.jpg"><img src="catalog/img_53370.jpg" alt="317880"></a></li>
            <li><a href="catalog/img_82292.jpg"><img src="catalog/img_82292.jpg" alt="317880"></a></li>
            <li><a href="catalog/img_317880.jpg"><img src="catalog/img_317880.jpg" alt="317880"></a></li>
        </ul>
    </div>
</div>
