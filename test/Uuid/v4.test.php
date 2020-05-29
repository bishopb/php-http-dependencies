<?php

$v4 = require __DIR__ . '/../../src/Uuid/v4.php';

assert(36 === strlen($v4()));
