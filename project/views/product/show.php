<div>
    это представление
    действия show контролера product
</div>


<!--task #2-->
<div><?php var_dump($name); ?></div>
<div><?php var_dump($price); ?></div>
<div><?php var_dump($quantity); ?></div>
<div><?php var_dump($category); ?></div>


<!--task #3-->
<h1>Продукт "<?= $name; ?>" из категории "<?= $category; ?>"</h1>
<p>
    Цена: <?= $price; ?>$, количество: <?= $quantity; ?>
</p>
<p>
    Стоимость (цена * количество): <?= $price * $quantity; ?>$
</p>
