<?php

/**
 * Description of index
 *
 * Created by
 * @author Andrii Molchanov <andymolchanov@gmail.com>
 * Date 19 сент. 2022 г.
 * @var type Description
 */
use src\classes\run;

spl_autoload_register(function (string $className) {
    include_once __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
});

$app = (new run())->getControllerAction();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>TestFeatures</title>
    </head>
    <body>
        <div>
            <img src='/img/under-construction.gif' alt="under-construction"/>
        </div>
        <?php foreach ($app as $item) : ?>
        <div>
                <?= $item ?>
            </div>
        <?php endforeach ?>
    </body>
</html>