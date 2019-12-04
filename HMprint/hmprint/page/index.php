<html>
<head>
    <meta charset="utf-8"  name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>精卫活动</title>
    <style>
        html,body{
            height: 100%;
            background: #F7F9FC;
            display: flex;
            flex-direction: column;
        }
        .head{
            width: 100%;
            height: 120px;
            background: url("../images/bg.png");
            background-repeat:no-repeat;
            background-size:cover;
            background-position:center;
            display: flex;
            flex-direction: row;
            border-radius: 8px;
        }
        .content{
            width: 88%;
            margin-top: 30px;
            margin-left: 6%;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            background: white;
        }
        .content_title{
            width: 100px;
            height: 35px;
            line-height: 35px;
            border-radius:8px 0px 35px 0px;
            color: white;
            background: #56D120;
        }
        .content_bottom{
            width: 100%;
            height: 80px;
            display: flex;
            flex-direction: row;
        }
        .content_bottom_item{
            width: 60px;
            height: 60px;
            margin: 0 auto;
            margin-top: 10px;
            display: flex;
            flex-direction: column;
        }
        .content_bottom_item_img{
            width: 36px;
            height: 36px;
            margin-left: 12px;
        }
        .content_bottom_item_text{
            width: 100%;
            height: 20px;
            line-height: 20px;
            text-align: center;
            font-size: 12px;
        }
    </style>
</head>
<body>
<?php include "bottom.php" ?>
<?php
//数据库信息
/*$servername="localhost";
$username="root";
$password="123456";
$dbname="WZTD";
$conn=new mysqli($servername,$username,$password,$dbname);*/

/*if(empty($_SESSION["openid"])){
    $index_url="https://haijiao.pw/project/WZTD/script/";
    echo "<script>window.location.href='".$index_url."';</script>";
}else{
    $openid=$_SESSION["openid"];
}
$openid=$_SESSION['openid'];

$user_sql="select * from user where openid='".$openid."'";
$result = mysqli_query($conn, $user_sql);
if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($result)) {
        $account=$row['account'];
        $password=$row['password'];
    }
}
if($account==null){
    $url='https://haijiao.pw/project/WZTD/wztongda/page/bindData.php';
    $url1='https://haijiao.pw/project/WZTD/wztongda/page/bindData.php';
}else{
    $url='https://haijiao.pw/project/WZTD/wztongda/page/score.php?account='.$account.'&pwd='.$password;
    $url1='https://haijiao.pw/project/WZTD/wztongda/page/kebiao.php?account='.$account.'&pwd='.$password;
}*/

?>
<div class="head"></div>
<div class="content">

</div>
</body>
</html>