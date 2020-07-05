<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_1461800115 extends CI_Model
{
    public function getdata($column, $tableFrom, $tableJoin, $joinCondition, $tableJoin1, $joinCondition1, $tableJoin2, $joinCondition2, $where = null)
    {
        $this->db->select($column);
        $this->db->From($tableFrom);
        $this->db->join($tableJoin, $joinCondition);
        $this->db->join($tableJoin1, $joinCondition1);
        $this->db->join($tableJoin2, $joinCondition2);
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }
}
