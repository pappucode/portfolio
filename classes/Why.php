<?php

$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/Database.php');
include_once($filepath . '/../helpers/Format.php');
?>

<?php

class Why
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function addWhy($title, $description)
    {
        $title = $this->fm->validation($title);
        //$description = $this->fm->validation($description);

        $title = mysqli_real_escape_string($this->db->link, $title);
        $description = mysqli_real_escape_string($this->db->link, $description);

        if (empty($title) || empty($description)) {
            $msg = "<span class='error'> Field must Not be Empty!</span>";
            return $msg;
        } else {
            $query = "INSERT INTO tbl_why (title, description) VALUES ('$title', '$description')";
            $result = $this->db->insert($query);

            if ($result) {
                $msg = "<span class='success'> Why Us inserted Successfully</span>";
                return $msg;
            } else {
                $msg = "<span class='success'> Why Us Not inserted!</span>";
                return $msg;
            }
        }
    }

    public function getAllWhy()
    {
        $query = "SELECT * FROM tbl_why ORDER BY id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function getWhyById($id){
        $query = "SELECT * FROM tbl_why WHERE id = '$id'";
        $result = $this->db->select($query);
        return $result;
    }

    public function updateWhy($title, $description, $id){
        $title = $this->fm->validation($title);
        //$description = $this->fm->validation($description);

        $title = mysqli_real_escape_string($this->db->link, $title);
        $description = mysqli_real_escape_string($this->db->link, $description);
        $id = mysqli_real_escape_string($this->db->link, $id);

        if (empty($title) || empty($description)) {
            $msg = "<span class='error'> Field must Not be Empty!</span>";
            return $msg;
        } else {
            $query = "UPDATE tbl_why
            SET
            title = '$title',    
            description = '$description' 
            WHERE id = '$id'";
          $result = $this->db->update($query);
          if ($result){
              $msg = "<span class='success'> Why Us Updated Successfully</span>";
              return $msg;
          }else{
              $msg = "<span class='success'> Why Us Not Updated!</span>";
              return $msg;
          }
        }
    }

    public function delWhyById($id){
        $query  = "DELETE FROM tbl_why WHERE id = '$id'";
        $result = $this->db->delete($query);
        if ($result) {
            $msg = "<span class='success'>Why Us Deleted Successfully !!</span>";
            return $msg;
        } else {
            $msg = "<span class='error'>Why Us Not Deleted !!</span>";
            return $msg;
        }
    }

    public function getWhy(){
        $query = "SELECT * FROM tbl_why ORDER BY id ASC LIMIT 4";
        $result = $this->db->select($query);
        return $result;
    }

}