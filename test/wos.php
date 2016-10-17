<?php
require __DIR__ .'/../vendor/autoload.php';
$factory = new Faker\Factory; 
$faker = $factory::create();
$faker->seed(5);
?>
<?php for ($i=0; $i < 10; $i++): ?>
<dl>
    <dt><?php echo $faker->watchName ?></dt>
    <dd><?php echo $faker->wPicture ?></dd>
    <dd><?php echo $faker->wShortDescription ?></dd>
    <dd><?php echo $faker->watchAttribute ?></dd>
</dl>
<?php endfor; ?>
