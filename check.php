<?php
// include('/xampp/htdocs/MVC/Model/db.php');
// session_start();
// class check extends db {
//     public function login($username,$password){
//         $check=mysqli_query($this->conn,"SELECT`Username`,`Password` FROM `users`");
//         if($check->num_rows>0){
//             $options1=mysqli_fetch_all($check,MYSQLI_ASSOC);
           
//         }
//         $st=0;
//         foreach($options1 as $options1) {
//         {
//             if($username == $options1['Username']&&$password==$options1['Password'])
//             {
             
//               return $st=1;
//             }
         
//         }
//       }
//     }
//     public function clevel($username)
//     {
//         $clevel=mysqli_query($this->conn,"SELECT`level` FROM `users` Where `username`='$username'");
//         if($clevel->num_rows>0){
//             $options2=mysqli_fetch_all($clevel,MYSQLI_ASSOC);
//         }
//         foreach($options2 as $options2){
//             if($options2['level']==1){
//               echo '<script>alert("Đăng nhập thành công");';
//               echo "window.location.href = '../view/control.php';";
//               echo'</script> ';
//                 $_SESSION['user_level']=$options2['level'];
//             }
//             if($options2['level']==0){
//               echo '<script>alert("Đăng nhập thành công");';
//               echo "window.location.href = '../view/admin.php';";
//               echo'</script> ';
//               $_SESSION['user_level']=$options2['level'];

//           }
//           if($options2['level']==2){
//             echo '<script>alert("Đăng nhập thành công");';
//             echo "window.location.href = '../view/client.php';";
//             echo'</script> ';
           
//             $_SESSION['user_level']=$options2['level'];

//         }
            
//         }

//     }
    
// }
// $newuser = new check();
// if(isset($_POST['submit-login']))
//  {
//   $username=$_POST['username'];
//   $password=$_POST['password'];
//   $st=$newuser->login($username,$password);
//   if($st==1){
//     $newuser->clevel($username);
//   }
//   else
//   {
//     echo '<script>alert("Đăng nhập thất bại");';
//     echo "window.location.href='../index.php';";
//     echo"</script> ";
//   }
//  }
echo "Vào thành công";
?>