<?php

// Require the Composer autoloader, if not already loaded
require 'vendor/autoload.php';

use DebugBar\StandardDebugBar;

$debugbar = new StandardDebugBar();
$debugbarRenderer = $debugbar->getJavascriptRenderer();

$debugbar["messages"]->addMessage("hello world!");
?>
<html>
    <head>
        <?php echo $debugbarRenderer->renderHead() ?>
    </head>
    <body>
        ...
        <?php echo $debugbarRenderer->render() ?>
    </body>
</html>