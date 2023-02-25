<?php

class Registration
{
    private $db;

    public function __construct($pdo)
    {
        $this->db = $pdo;

    }
    public function addStudent($studentId, $name, $class, $major): void
    {
        $sql = "INSERT INTO phieudangky (Mssv, HoTen, Lop, MaNganh) VALUES (:mssv, :hoTen, :lop, :chuyennganh)";
        $stmt = $this->db->prepare($sql);
        $stmt ->execute(array(
            ':mssv' => $studentId,
            ':hoTen' => $name,
            ':lop' => $class,
            ':chuyennganh' => $major

        ));

    }

    public function getList()
    {
        $sql = "SELECT * FROM phieudangky JOIN chuyennganh ON phieudangky.MaNganh = chuyennganh.MaNgan";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
    public function deleteStudent($id)
    {
        $sql = "DELETE FROM phieudangky WHERE MaPhieu = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array(
            'id' => $id
        ));

    }
    public function getById($id)
    {
        $sql = "SELECT * FROM phieudangky WHERE MaPhieu = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array(
            'id' => $id

        ));
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
        

    }
    function updateStudent($id, $hoten, $lop, $chuyennganh, $mssv)
    {
        $sql = "UPDATE phieudangky SET Lop = :lop, Major = :chuyennganh, HoTen = :hoten, Mssv = :mssv WHERE MaPhieu = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array(
            'id' => $id,
            'lop' => $lop,
            'chuyennganh' => $chuyennganh,
            'hoten' => $hoten,
            'mssv' => $mssv
        ));
    }

}
?>