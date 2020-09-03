<?php 
    
    session_start();
    //han tich url thanh controll va action
    $urls = explode("/", $_SERVER['REQUEST_URI']);
    $controller = $urls[1]??""; 
    $actions = (explode("?", $urls[2]??"")); 
    $action = $actions[0]??"";
    $controller = $controller == ""?"home":$controller;
    $action = $action == ""?"index":$action;
    //echo $controller . "-" . $action;

    //xử lý router
    //chặn các action và controller không được phép
    // if($controller == "nguoidung"){
    //     $controller = "user";
    // }
    

    //nguoidung, chucnang




    $routes = [
        "nguoidung" => [
            "name" => "user"
            ,"action" => [
                "xoa" => [
                    "name" => "delete"
                ],
                "thuchiendangnhap" => [
                    "name" =>"showLogin"
                ],
                "thuchiendangnhap" => [
                    "name" =>"doLogin"
                ],
                "addNguoiDung" => [
                    "name" => "addNd"
                ],
                "allNguoiDung" => [
                    "name" => "allNd"
                ],
                "editNguoiDung" => [
                    "name" => "editNd"
                ],
                "deleteNguoiDung" => [
                    "name" => "deleteNd"
                ],
            ]
        ],
        "chucnang" => [
            "name" => "user"
            ,"action" => [
                "addChucNang" => [
                    "name" => "addCn"
                ],
                "allChucNang" => [
                    "name" => "allCn"
                ],
                "editChucNang" => [
                    "name" => "editCn"
                ],
                "deleteChucNang" => [
                    "name" => "deleteCn"
                ]
            ]
        ],
        "nhom" => [
            "name" => "user"
            ,"action" => [
                "addNhom" => [
                    "name" => "addN"
                ],
                "allNhom" => [
                    "name" => "allN"
                ],
                "editNhom" => [
                    "name" => "editN"
                ],
                "deleteNhom" => [
                    "name" => "deleteN"
                ]
            ]
        ]
    ];
    if(isset($routes[$controller])){
        $actions = $routes[$controller]["action"];
        $controller = $routes[$controller]["name"];
      
        if(isset($actions[$action])){
            $action = $actions[$action]["name"];
        } else {
            return;
        }
    } else {
        return;
    }
    // $routes = [
    //     "user" => ["delete"=>[], "index"=>[]]
    // ];

    // if(isset($routes[$controller])){
    //     if(!isset($routes[$controller][$action])){
    //         return;
    //     }
    // } else {
    //     return;
    // }

    //Thiết lập thư mục include
    set_include_path(
        get_include_path()
        . PATH_SEPARATOR . "D:/Lap trinh/myMVC/controller"
        .PATH_SEPARATOR. "D:/Lap trinh/myMVC/view"
    );

    //nhung controller
    require_once($controller."Controller.php");

    //goi action
    $controllerName = $controller . "Controller";
    $actionName = $action . "Action";

    require_once("layout.php");
   // $controllerName::$actionName();

   
    