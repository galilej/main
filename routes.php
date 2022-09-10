<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");


get('/', 'public/index.php');

any('/404','views/404.php');
