<?php
class Lessen extends Controller
{

  private $lesModel;

  public function __construct()
  {
    $this->lesModel =  $this->model('LesModel');
  }

  public function index()
  {

    $result = $this->lesModel->getLessen();
    $rows = '';
    $data = [
      'title' => "Overzicht lessen",
      'rows' => $rows
    ];
    $this->view('Lessen/index', $data);
  }
}
