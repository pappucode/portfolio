<?php

$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/Database.php');
include_once($filepath . '/../helpers/Format.php');
?>

<?php

class Faq
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function addFaq($title, $description)
    {
        $title = $this->fm->validation($title);
        //$description = $this->fm->validation($description);

        $title = mysqli_real_escape_string($this->db->link, $title);
        $description = mysqli_real_escape_string($this->db->link, $description);

        if (empty($title) || empty($description)) {
            $msg = "<span class='error'> Field must Not be Empty!</span>";
            return $msg;
        } else {
            $query = "INSERT INTO tbl_faq (title, description) VALUES ('$title', '$description')";
            $result = $this->db->insert($query);

            if ($result) {
                $msg = "<span class='success'> FAQ inserted Successfully</span>";
                return $msg;
            } else {
                $msg = "<span class='success'> FAQ Not inserted!</span>";
                return $msg;
            }
        }
    }

    public function getAllFaq()
    {
        $query = "SELECT * FROM tbl_faq ORDER BY id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function getFaqById($id){
        $query = "SELECT * FROM tbl_faq WHERE id = '$id'";
        $result = $this->db->select($query);
        return $result;
    }

    public function updateFaq($title, $description, $id){
        $title = $this->fm->validation($title);
        //$description = $this->fm->validation($description);

        $title = mysqli_real_escape_string($this->db->link, $title);
        $description = mysqli_real_escape_string($this->db->link, $description);
        $id = mysqli_real_escape_string($this->db->link, $id);

        if (empty($title) || empty($description)) {
            $msg = "<span class='error'> Field must Not be Empty!</span>";
            return $msg;
        } else {
            $query = "UPDATE tbl_faq
            SET
            title = '$title',    
            description = '$description' 
            WHERE id = '$id'";
          $result = $this->db->update($query);
          if ($result){
              $msg = "<span class='success'> FAQ Updated Successfully</span>";
              return $msg;
          }else{
              $msg = "<span class='success'> FAQ Not Updated!</span>";
              return $msg;
          }
        }
    }

    public function delFaqById($id){
        $query  = "DELETE FROM tbl_faq WHERE id = '$id'";
        $result = $this->db->delete($query);
        if ($result) {
            $msg = "<span class='success'>Faq Deleted Successfully !!</span>";
            return $msg;
        } else {
            $msg = "<span class='error'>Faq Not Deleted !!</span>";
            return $msg;
        }
    }

    public function getFaq(){
        $query = "SELECT * FROM tbl_faq ORDER BY id ASC LIMIT 4";
        $result = $this->db->select($query);
        return $result;
    }

}