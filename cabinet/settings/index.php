<?php
  session_start();
  require_once $_SESSION['root']."/app/renderPage.php";
  require_once __DIR__."/renderSettingsPanel.php";
  
  $messagesPageContent = renderSettingsPanel($_SESSION['user']['login']);
  define("PAGE_TITLE", "Настройки аккаунта");
  echo renderPage($messagesPageContent, PAGE_TITLE);
?>