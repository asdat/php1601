<?php
const BASE_PATH = __dir__;
// название папки шаблона/темы
const THEME_NAME = 'hyperspace';
// уровень администраторских прав, важен для авторизации
const ADMIN_LEVEL = '2';
// путь к папке шаблонов 
define(THEME_ADDR, implode(DIRECTORY_SEPARATOR, [BASE_PATH, '..', 'themes', THEME_NAME, '']));
// путь к шаблону для внешней части
define(THEME_URI, 'http://'.$_SERVER['HTTP_HOST'].'/themes/'.THEME_NAME.'/');

const DB_USER = 'asdat_stud0';
const DB_PASS = 'd9qytps4';
const DB_NAME = 'asdat_stud0';
const DB_HOST = 'asdat.mysql.ukraine.com.ua';
const DB_PORT = '3306';