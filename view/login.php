<form method="post" action="/nguoidung/thuchiendangnhap">
  <table>
    <tr>
      <td>username</td>
      <td></td>
      <td><input type="text" name="username"></td>
    </tr>
    <tr>
      <td>password</td>
      <td></td>
      <td><input type="text" name="password"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td><input type="submit" value="Dang nhap"></td>
    </tr>
      <td></td>
      <td></td>
      <td><?=$messageError??"" ?></td>
    <tr>
    </tr>
  </table>
</form>