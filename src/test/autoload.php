<?php
//Define autoloader
function __autoload($className) {
      if (file_exists($className . '.php')) {
          require_once $className . '.php';
          return true;
      }
      return false;
}

function canClassBeAutloaded($className) {
      return class_exists($className);
}
?>
