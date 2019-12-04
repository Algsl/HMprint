<html>
    <head>
        <title>恒煤打印--个人中心</title>
        <style>
            html,body{
                height: 100%;
                background: #ECEFEE;
                display: flex;
                flex-direction: column;
            }
            .head{
                width: 100%;
                height: 190px;
                display: flex;
                flex-direction: row;
                background: url("../images/head.png");
            }
            .head_img{
                width: 80px;
                height: 80px;
                margin: 35px 35px;
                border-radius: 40px;
                border:2px solid white;
            }
            .nick_name{
                margin-left: 16px;
                margin-top: 48px;
                font-size: 24px;
                color: #333333;
            }
            .hint{
                margin-left: 16px;
                margin-top: 10px;
            }

            .content1{
                width: 92%;
                margin-left: 4%;
                height: 80px;
                margin-top: -40px;
                background: white;
                border-radius: 10px;
                align-items: center;
                display: flex;
                flex-direction: row;
            }
            .content1_item{
                width: 50%;
                height: 100%;
                display: flex;
                flex-direction: row;
                align-items: center;
            }
            .content1_img{
                width: 40px;
                height: 40px;
            }
            .content1_item_hint{
                margin-left: 20px;
                font-size: 20px;
                color: #333333;
            }
            .content1_item_money{
                margin-left: 20px;
                font-size: 16px;
                color: #666666;
                text-align: center;
            }

            .content2{
                width: 92%;
                height: 300px;
                margin-left: 4%;
                background:white;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="head">
            <img class="head_img" src="../images/head_img.png"/>
            <div style="display:flex;flex-direction: column;">
                <div class="nick_name">天道承负</div>
                <div class="hint">欢迎使用恒煤打印</div>
            </div>
        </div>
        <div class="content1">
            <div class="content1_item">
                <img class="content1_img" src="../images/home_off.png">
                <div style="display: flex;flex-direction: column">
                    <div class="content1_item_hint">支出</div>
                    <div class="content1_item_money">60元</div>
                </div>
            </div>
            <div></div>
            <div class="content1_item">
                <img class="content1_img" src="../images/home_off.png">
                <div style="display: flex;flex-direction: column">
                    <div class="content1_item_hint">支出</div>
                    <div class="content1_item_money">60元</div>
                </div>
            </div>
        </div>
        <div class="content2">

        </div>
    </body>
</html>
