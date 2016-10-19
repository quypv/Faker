<?php
require __DIR__ .'/../vendor/autoload.php';
$factory = new Faker\Factory; 
$faker = $factory::create();
$faker->seed(5);
?>
<?php for ($i=0; $i < 10; $i++): ?>
<dl>
    <dt><?php echo $faker->wFbId ?></dt>
    <dd><?php echo $faker->wFbToken ?></dd>
    <dd><?php echo $faker->wPicture ?></dd>
    <dd><?php echo $faker->wUuid ?></dd>
    <dd><?php echo $faker->wCoin ?></dd>
</dl>
<?php endfor; ?>
