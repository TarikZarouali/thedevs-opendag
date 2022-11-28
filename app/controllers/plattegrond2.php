<?php
class Plattegrond2 extends Controller
{

  public function index()
  {
    $data = [
      'title' => "plattegrond2"
    ];
    $this->view('plattegrond2/index', $data);
  }
}
