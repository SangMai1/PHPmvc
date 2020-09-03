<?php 
    class userController{

        public static function indexAction(){
            echo "aaaaaaaaaaaaaaaaa";
        }

        public static function deleteAction(){
            echo "bbbbbbbbbbbbbbbbbbbbb";
        }

        public static function showLoginAction(){
            include "login.php";
        }

        public static function doLoginAction(){
            if($_POST["username"] =="admin" && $_POST["password"] == "123456"){
               $_SESSION["user"] = "admin";
            } else {
                $messageError = "Sai username hoac password";
                include "login.php";
            }
        }

        public static function addNdAction(){
            include "addNguoiDung.php";
        }

        public static function allNdAction(){
            include "viewNguoiDung.php";
        }

        public static function editNdAction(){
            include "editNguoiDung.php";
        }

        public static function deleteNdAction(){
            include "deleteNguoiDung.php";
        }

        public static function addCnAction(){
            include "addChucNang.php";
        }

        public static function allCnAction(){
            include "viewChucNang.php";
        }

        public static function editCnAction(){
            include "editChucNang.php";
        }

        public static function deleteCnAction(){
            include "deleteChucNang.php";
        }

        public static function addNAction(){
            include "addNhom.php";
        }

        public static function allNAction(){
            include "viewNhom.php";
        }

        public static function editNAction(){
            include "editNhom.php";
        }

        public static function deleteNAction(){
            include "deleteNhom.php";
        }
    } 
?>