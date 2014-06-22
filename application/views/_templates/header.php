<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Always This Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
      a:hover{
        color: white;
      }
      a{
        color: #bdc3c7;
        text-decoration: none;
      }
    </style>
  </head>
  <body>

    <style type="text/css">
      #navigation{
        background-color: #34495e;
      }
      #navigation > ul{
        list-style: none;
        overflow: auto;
      }
      #navigation > ul > li{
        float: left;
        margin: 5px;
        padding: 3px;
      }
    </style>
    <div id="navigation">
      <ul>
        <li><a href="<?php echo URL; ?>">home</a></li>
        <li><a href="<?php echo URL; ?>home/exampleone">one</a></li>
        <li><a href="<?php echo URL; ?>home/exampletwo">two</a></li>
        <li><a href="<?php echo URL; ?>contacts/">contacts</a></li>
      </ul>
    </div>