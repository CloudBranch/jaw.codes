<?php
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'app/index.html';
        break;
    case '/contact':
        require 'app/contact.php';
        break;
    default:
        require 'app/404.php';
}
?>