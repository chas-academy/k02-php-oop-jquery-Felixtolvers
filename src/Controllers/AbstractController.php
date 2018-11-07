<?php

namespace Twitter\Controllers;

abstract class AbstractController
{
  public function render(string $view, array $viewData = [])
  {
    extract($viewData);

    ob_start();

    $viewPath = "views/" . $view . ".php";

    include_once 'templates/header.php';
    include_once $viewPath;
    include_once 'templates/footer.php';

    $renderedView = ob_get_clean();

    return $renderedView;
  }

  public function redirect(string $url)
  {
    ob_start();

    header('Location:'.$url);

    ob_end_flush();
    die();
  }
}