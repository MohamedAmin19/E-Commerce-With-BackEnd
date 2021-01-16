<?php 
ob_start();
include "nav.php";
?>
<html>
  <head>
  <link rel="stylesheet"href="cart.css">    
    <style>
        body{
            overflow-x: hidden;
        }
        table,th,td,tr{
            border:1px solid black;
        }
        th,td{
            padding: 15px;
            text-align: left;
        }
        th{
            background-color: grey;
            color: white;
        }
        .counter{
            color:red;
        }
        .sub,.total{
            color:red;
        }
        table{
            width: 50%;
        }
        .cart-items,.cart-heading{
            position:relative;
            right:80px;
        }
        .cart-total{
            position:relative;
            left:700px;
            bottom:105px;
        }
        .checkout{
            position: relative;
            top:180px;
            left:500px;
            font-size: 1.25em;
            font-weight: 700;
            color: white;
            background-color: rgb(121, 117, 117);
            display: inline-block;
            cursor: pointer;
            border: 1px solid black;
            width:200px;
            height:50px;
        }
        .checkout:hover{
            background-color:grey;
        }
    </style>
  </head>
  <body>
        <div class="container ">
            <h1 class="cart-heading">You have <span class="counter">1</span> products in your cart</h1>
            <div class="cart">
                <table class="cart-items">
                    <thead>
                        <tr>
                            <th>product </th>
                            <th>price </th>
                            <th>quantity </th>
                            <th>subtotal </th>
                        </tr>
                    </thead>
                    <tbody>
                        <div class="items-table-parent"></div>
                    </tbody>
                </table>
                <table class="cart-total">
                    <h1 class="cart-total">cart totals</h1>
                    <tr>
                        <th >subtotal</th>
                        <td class="sub">0</td>
                    </tr>
                    <tr>
                        <th>total</th>
                        <td class="total">0</td>
                    </tr>
                </table>
                <input type="submit" class="checkout" value="CheckOut">
            </div> 
        </div>

    <script src="JS/cart.js"></script>
  </body>
</html>

<?php
ob_end_flush();
?>