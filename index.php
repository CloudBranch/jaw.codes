<?php
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'app/index.html';
        break;
    default:
        require 'app/404.php';
}
?>