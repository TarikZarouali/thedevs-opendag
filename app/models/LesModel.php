<?php
class LesModel
{
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getLessen()
  {
    $this->db->query("SELECT Les.DatumTijd
                            ,Les.Id
                            ,Leerling.id
                            ,Leerling.Naam
                             FROM Les
                             INNER JOIN Leerling
                             ON Leerling.Id = Les.LeerlingId
                             WHERE Les.InstructeurId = :Id");
    $this->db->bind(':Id', 2, PDO::PARAM_INT);

    $result = $this->db->resultSet();

    return $result;
  }
}
