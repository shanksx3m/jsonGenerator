<?php require 'core/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <title>JSON Generator</title>
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" tpe="text/css" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" type="text/css" href="css/default.css" 
        <style type="text/css">
            
        </style>
            
    </head>
    <body>
        <?php
            require_once 'core/mongoConnect.class.php';
            require_once 'core/genJson.class.php';
            
        ?>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h2 class="pull-right"><a href="#" id="brand" class="" >{ } json generator</a></h2>
                </div>
                <div class="span12">
                    <?php 
                        include('core/pages/input.page.php');
                    ?>
                </div>
            </div>        
        </div>
        
        
        <!-- le js -->
        <script src="js/bootstrap.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/default.js"></script>
    </body>
</html>
