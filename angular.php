#!/usr/bin/env php

<?php
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application();

# add our commands
$application->add(new \Commands\CreateApplication());

$application->run();