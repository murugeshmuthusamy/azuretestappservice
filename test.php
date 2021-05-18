<?php
echo 'it works!';
echo '<br>';
//phpinfo();
echo 'BASEURL---'.$_ENV['BASEURL'];
//echo '<br>';
//echo 'APPSETTING_BASEURL---'.$_ENV['APPSETTING_BASEURL'];
echo '<br>';
echo 'DBNAME---'.$_ENV['MYSQLCONNSTR_DBNAME'];
echo '<br>';
echo 'ENV Var';
echo 'ENVBASEURL--'.env('BASEURL');
echo '<br>';
echo 'ENVDBNAME--'.env('MYSQLCONNSTR_DBNAME');