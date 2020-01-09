#!/usr/bin/env php
<?php
require __DIR__ . '/vendor/autoload.php';

use Console\Command\TestCommand;
use Symfony\Component\Console\Application;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$app = new Application();
$app->addCommands([
    new TestCommand('test'),
]);
$app->run();