<?php
include('./src/php/route.php');

Route::add('/', function() {
    header('Location: ./dashboard');
});

Route::add('/dashboard', function() {
    include('./src/php/index.php');
});

Route::add('/api/getarduinos', function() {
    include('./src/php/API/getArduino.php');
});

Route::add('/api/getroomrecords', function() {
    include('./src/php/API/getRoomRecords.php');
});

Route::run('/ProjetPreTPI/');
?>