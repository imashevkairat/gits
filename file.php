<?php
session_start();
ucfirst($_SESSION['kairat'] = $_POST['name']);

if (ucfirst($_SESSION['kairat']) == 'Kairat')
{
    echo "Я КАЙРАТ И Я ПЕДИК И ГАРЖУС ЭТИМ";
}else{
    echo "ТЫ НЕ".'  '.$_POST['name'];
}