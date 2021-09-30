<?php

$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/Database.php');
include_once($filepath . '/../helpers/Format.php');
?>

<?php


class Team
{

    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function insertTeam($data, $file)
    {
        $name = mysqli_real_escape_string($this->db->link, $this->fm->validation($data['name']));
        $title = mysqli_real_escape_string($this->db->link, $this->fm->validation($data['title']));
        $shortDescription = mysqli_real_escape_string($this->db->link, $this->fm->validation($data['shortDescription']));
        $fb = mysqli_real_escape_string($this->db->link, $this->fm->validation($data['fb']));
        $tw = mysqli_real_escape_string($this->db->link, $this->fm->validation($data['tw']));
        $ln = mysqli_real_escape_string($this->db->link, $this->fm->validation($data['ln']));

        $permitted = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
        $uploaded_image = "uploads/" . $unique_image;

        if ($name == '' || $title == '' || $shortDescription == '' || $file_name == '') {
            $msg = "<span class='error'>Fields Must Not be Empty!!</span>";
            return $msg;
        } elseif ($file_size > 5048567) {
            $msg = "<span class='error'>Image size should be less than 5 MB!!</span>";
            return $msg;
            //in_array(search,array) it searches an array for a specific value
        }elseif (in_array($file_ext, $permitted) === false) {
            $msg = "<span class='error'>you can uploads only:-" . implode(', ', $permitted) . "</span>";
            return $msg;
        } else {
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO tbl_team(name,title,shortDescription,image,fb,tw,ln) 
VALUES('$name','$title','$shortDescription','$uploaded_image','$fb','$tw','$ln')";
            $result = $this->db->insert($query);
            if ($result) {
                $msg = "<span class='success'>Team Member Inserted Successfully !!</span>";
                return $msg;
            } else {
                $msg = "<span class='error'>Team Member Not Inserted !!</span>";
                return $msg;
            }
        }
    }

    public function getAllTeamMember(){
        $query = "SELECT * FROM tbl_team ORDER BY id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function getMemberById($id){
        $query = "SELECT * FROM tbl_team WHERE id = '$id'";
        $result = $this->db->select($query);
        return $result;
    }

    public function updateTeam($data, $file, $id){
        $name = mysqli_real_escape_string($this->db->link, $this->fm->validation($data['name']));
        $title = mysqli_real_escape_string($this->db->link, $this->fm->validation($data['title']));
        $shortDescription = mysqli_real_escape_string($this->db->link, $this->fm->validation($data['shortDescription']));
        $fb = mysqli_real_escape_string($this->db->link, $this->fm->validation($data['fb']));
        $tw = mysqli_real_escape_string($this->db->link, $this->fm->validation($data['tw']));
        $ln = mysqli_real_escape_string($this->db->link, $this->fm->validation($data['ln']));

        $permitted = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];

        $div            = explode('.', $file_name);
        $file_ext       = strtolower(end($div));
        $unique_image   = substr(md5(time()), 0, 10) . '.' . $file_ext;
        $uploaded_image = "uploads/" . $unique_image;

        if ($name == '' || $title == '' || $shortDescription == '') {
            $msg = "<span class='error'>Fields Must Not be Empty!!</span>";
            return $msg;
        } else {
            if (!empty($file_name)) {

                $query   = "SELECT * FROM tbl_team WHERE id = '$id'";
                $getData = $this->db->select($query);
                if ($getData) {
                    while ($delImg = $getData->fetch_assoc()) {
                        $delLink = $delImg['image'];
                        unlink($delLink);
                    }
                }

                if ($file_size > 5048567) {
                    $msg = "<span class='error'>Image size should be less than 5 MB!!</span>";
                    return $msg;

                } elseif (in_array($file_ext, $permitted) === false) {
                    $msg = "<span class='error'>you can upload only:-" . implode(', ', $permitted) . "</span>";
                    return $msg;
                } else {
                    move_uploaded_file($file_temp, $uploaded_image);
                    $query  = "UPDATE tbl_team
                    SET
                    name = '$name',
                    title = '$title',
                    shortDescription = '$shortDescription',
                    image = '$uploaded_image',
                    fb = '$fb',
                    tw = '$tw',
                    ln = '$ln' WHERE id = '$id'";
                    $result = $this->db->update($query);
                    if ($result) {
                        $msg = "<span class='success'>Team Member Updated Successfully !!</span>";
                        return $msg;
                    } else {
                        $msg = "<span class='error'>Team Member Not Updated !!</span>";
                        return $msg;
                    }
                }

            } else {
                $query  = "UPDATE tbl_team
                    SET
                    name = '$name',
                    title = '$title',
                    shortDescription = '$shortDescription',
                    fb = '$fb',
                    tw = '$tw',
                    ln = '$ln' WHERE id = '$id'";
                $result = $this->db->update($query);
                if ($result) {
                    $msg = "<span class='success'>Team Member Updated Successfully !!</span>";
                    return $msg;
                } else {
                    $msg = "<span class='error'>Team Member Not Updated !!</span>";
                    return $msg;
                }
            }
        }
    }

    public function delMemberById($id){
        $query   = "SELECT * FROM tbl_team WHERE id = '$id'";
        $getData = $this->db->select($query);
        if ($getData) {
            while ($delImg = $getData->fetch_assoc()) {
                $delLink = $delImg['image'];
                unlink($delLink);
            }
        }
        $query  = "DELETE FROM tbl_team WHERE id = '$id'";
        $result = $this->db->delete($query);
        if ($result) {
            $msg = "<span class='success'>Team Member Deleted Successfully!!</span>";
            return $msg;
        } else {
            $msg = "<span class='error'>Team Member Not Deleted !!</span>";
            return $msg;
        }
    }

    public function getTeamMembers(){
        $query = "SELECT * FROM tbl_team ORDER BY id ASC LIMIT 4";
        $result = $this->db->select($query);
        return $result;
    }

    public function insertImage($data, $file){

        $permitted = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
        $uploaded_image = "uploads/slider/" . $unique_image;

        if ($file_name == '') {
            $msg = "<span class='error'>Fields Must Not be Empty!!</span>";
            return $msg;
        } elseif ($file_size > 10097134) {
            $msg = "<span class='error'>Image size should be less than 10 MB!!</span>";
            return $msg;
            //in_array(search,array) it searches an array for a specific value
        }elseif (in_array($file_ext, $permitted) === false) {
            $msg = "<span class='error'>you can uploads only:-" . implode(', ', $permitted) . "</span>";
            return $msg;
        } else {
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO tbl_slider(image) VALUES('$uploaded_image')";
            $result = $this->db->insert($query);
            if ($result) {
                $msg = "<span class='success'>Image Inserted Successfully !!</span>";
                return $msg;
            } else {
                $msg = "<span class='error'>Image Not Inserted !!</span>";
                return $msg;
            }
        }
    }

    public function getAllImage(){
        $query = "SELECT * FROM tbl_slider ORDER BY id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function getSliderById($id){
        $query = "SELECT * FROM tbl_slider WHERE id = '$id'";
        $result = $this->db->select($query);
        return $result;
    }

    public function updateSlider($data, $file, $id){

        $permitted = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];

        $div            = explode('.', $file_name);
        $file_ext       = strtolower(end($div));
        $unique_image   = substr(md5(time()), 0, 10) . '.' . $file_ext;
        $uploaded_image = "uploads/slider/" . $unique_image;

            if (!empty($file_name)) {
                $query = "SELECT * FROM tbl_slider WHERE id = '$id'";
                $getData = $this->db->select($query);
                if ($getData) {
                    while ($delImg = $getData->fetch_assoc()) {
                        $delLink = $delImg['image'];
                        unlink($delLink);
                    }
                }

                if ($file_size > 10097134) {
                    $msg = "<span class='error'>Image size should be less than 10 MB!!</span>";
                    return $msg;
                } elseif (in_array($file_ext, $permitted) === false) {
                    $msg = "<span class='error'>you can upload only:-" . implode(', ', $permitted) . "</span>";
                    return $msg;
                } else {
                    move_uploaded_file($file_temp, $uploaded_image);
                    $query = "UPDATE tbl_slider
                    SET      
                    image = '$uploaded_image' WHERE id = '$id'";
                    $result = $this->db->update($query);
                    if ($result) {
                        $msg = "<span class='success'>Image Updated Successfully !!</span>";
                        return $msg;
                    } else {
                        $msg = "<span class='error'>Image Not Updated !!</span>";
                        return $msg;
                    }
                }
            }
        }

        public function deleteSliderById($id){
            $query   = "SELECT * FROM tbl_slider WHERE id = '$id'";
            $getData = $this->db->select($query);
            if ($getData) {
                while ($delImg = $getData->fetch_assoc()) {
                    $delLink = $delImg['image'];
                    unlink($delLink);
                }
            }
            $query  = "DELETE FROM tbl_slider WHERE id = '$id'";
            $result = $this->db->delete($query);
            if ($result) {
                $msg = "<span class='success'>Image Deleted Successfully!!</span>";
                return $msg;
            } else {
                $msg = "<span class='error'>Image Not Deleted !!</span>";
                return $msg;
            }
        }

        public function getImages(){
            $query = "SELECT * FROM tbl_slider ORDER BY id ASC LIMIT 6";
            $result = $this->db->select($query);
            return $result;
        }

        public function getThumImages(){
            $query = "SELECT * FROM tbl_slider ORDER BY id ASC LIMIT 6";
            $result = $this->db->select($query);
            return $result;
        }

}