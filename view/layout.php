
<!DOCTYPE html>
<html>
<head>
<style>
.item1 { grid-area: header; }
.item2 { grid-area: menu; }
.item3 { grid-area: main; }
.item4 {grid-area: footer; }


.grid-container {
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'menu main main main main main'
    'footer footer footer footer footer footer';
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}

ul {
  list-style: none;
}
</style>
</head>
<body>

<div class="grid-container">
  <div class="item1">
    <img src="/images/banner.png" alt="" style="width:100%; height:250px; margin:0">
  </div>
  <div class="item2">
     <ul>
            <?php
               if(isset($_SESSION["user"])){?>
                <li><a href="/nguoidung/addNguoiDung">Danh sach nguoi dung</a></li>
                <li><a href="/chucnang/addChucNang">Danh sach chuc nang</a></li>
                <li><a href="/nhom/addNhom">Danh sach nhom</a></li>
                <li><a href="/nguoidung/thuchiendangnhap">Danh xuat</a></li>
              <?php
               }  else {?>
                      <li>Dang nhap</li>
                    <?php } ?>
            </ul>
  </div>
  <div class="item3">
                <?php $controllerName::$actionName() ?>
  </div>  
  <div class="item4">Footer</div>
</div>

</body>
</html>