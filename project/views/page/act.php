<!--task #1-->
<div>
    это представление
    действия act контролера page
</div>

<!--task #2-->
<!--<ul>-->
<!--    <li>--><?php //echo $var1; ?><!--</li>-->
<!--    <li>--><?php //echo $var2; ?><!--</li>-->
<!--    <li>--><?php //echo $var3; ?><!--</li>-->
<!--</ul>-->

<!--task #3-->
<h1><?= $header; ?> </h1>
<ul>
    <li><?= $users[0]; ?></li>
    <li><?= $users[1]; ?></li>
    <li><?= $users[2]; ?></li>
</ul>
<ul>
    <?php foreach ($users as $user): ?>
        <li><?= $user; ?></li>
    <?php endforeach; ?>
</ul>


