<?php
class Plattegrond1 extends Controller
{

  public function index()
  {
    $data = [
      'title' => "plattegrond"
    ];
    $this->view('plattegrond1/index', $data);
  }
}
