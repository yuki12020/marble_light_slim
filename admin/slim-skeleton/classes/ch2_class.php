<?php
class ch2_class extends Mapper
{
  public function ch_info() {
    $sql = "select * from channel_title_id";
    $stmt = $this->db->query($sql);
    $results = [];
    while($row = $stmt->fetch()) {
      $results[] = $row;
    }
    return $results;
  }
}