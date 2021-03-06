<?php


class LayoutView {

  
  public function render($isLoggedIn, LoginView $v, DateTimeView $dtv) {
    if(isset($_GET["register"])){
      echo '<!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Login Example</title>
        </head>
        <body>
          <h1>Assignment 2</h1>
            <a href="index.php">Back to login</a> '
           . $this->renderIsLoggedIn($isLoggedIn) . '
          <div class="container">
            <h2>Register new user</h2>
              '. $v->registerUserFormHTML() . '
             ' . $dtv->show() . '
            </div>
          </body>
       </html>';
    } else {
    echo '<!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Login Example</title>
        </head>
        <body>
          <h1>Assignment 2</h1>
          ' . $this->link($isLoggedIn) . '
          ' . $this->renderIsLoggedIn($isLoggedIn) . '
          <div class="container">
              ' . $v->response() . '
              
              ' . $dtv->show() . '
          </div>
         </body>
      </html>
    ';
    }
  }
  

  private function renderIsLoggedIn($isLoggedIn) {
    if ($isLoggedIn) {
      return '<h2>Logged in</h2>';
    }
    else {
      return '<h2>Not logged in</h2>';
    }
  }

  private function link ($isLoggedIn) {
    if($isLoggedIn) {
      return '';
    } else {
      return '<a href="index.php?register">Register a new user</a>';
    }
  }
}
  