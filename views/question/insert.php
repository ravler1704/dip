<?php
require_once __DIR__ . '/../../lib/database/DataBase.php';

DataBase::insert($_GET['table'], $_GET['field'], $_GET['value']);


echo 'Добавлено/Обновлено<br />';
echo "<a href='/web/index.php?r=question/adminPanel'>В админ панель</a>";



