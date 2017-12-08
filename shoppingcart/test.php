<?php
session_start();
unset($_SESSION['cart_products']);
print_r($_SESSION['cart_products']);