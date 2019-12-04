<html>
<head>
    <meta charset="utf-8"  name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>精卫活动</title>
    <script type="text/javascript" src="../../jquery-1.4.3.js"></script>
    <style>
        .bottom{
            width:100%;
            height: 60px;
            position: absolute;
            bottom: 0px;
            left:0px;
            display:flex;
            flex-direction:row;
            border-top:1px solid #C6C8D1;
        }
        .bottom_item{
            width: 50%;
            height: 60px;
            display: flex;
            flex-direction: row;
            font-size:12px;
        }
        #main{
            width: 60px;
            height: 50px;
            text-align: center;
            display: flex;
            flex-direction: column;
            margin-top: 5px;
            margin-left: 30%;
        }
        #me{
            width: 60px;
            height: 50px;
            text-align: center;
            display: flex;
            flex-direction: column;
            margin-top: 5px;
            margin-left: 30%;
        }
        #notice{
            width: 60px;
            height: 50px;
            text-align: center;
            display: flex;
            flex-direction: column;
            margin-top: 5px;
            margin-left: 30%;
        }
        a{
            text-decoration: none;
        }
        img{
            width: 30px;
            height: 30px;
            margin-left: 15px;
            margin-bottom:5px;
        }
    </style>
</head>
<body>
<?php
//session_start();
$change=$_GET['change'];
echo "<script>
        o=".$change.";
        var color_change=['main','me','notice'];
        var img_change=['img_main','img_me','img_notice'];
        window.onload=function(){
            for(var i=0;i<color_change.length;i++){
                if(o==i){
                    document.getElementById(color_change[i]).style.color='#2CCE93';
                    document.getElementById(img_change[i]).src='../images/img_on'+i+'.png';
                }else{
                    document.getElementById(color_change[i]).style.color='#C6C8D1';
                    document.getElementById(img_change[i]).src='../images/img_off'+i+'.png';
                }
            }
        }
    </script>";
?>

<div class="bottom">
    <div class="bottom_item">
        <div id="main" onclick="location='index.php?change=0'">
            <img id="img_main" src="../images/img_off0.png"/>
            <span>首页</span>
        </div>
    </div>
    <!--<div class="bottom_item">
        <div id="notice" onclick="location='order.php?change=2'">
            <img id="img_notice" src="../images/img_off2.png"/>
            <span>订单</span>
        </div>
    </div>-->
    <div class="bottom_item">
        <div id="me" onclick="location='me.php?change=1'">
            <img id="img_me" src="../images/img_off1.png"/>
            <span>我的</span>
        </div>
    </div>
</div>
</body>
</html>