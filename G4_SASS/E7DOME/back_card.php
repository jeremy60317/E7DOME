<?php 
ob_start();
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/back.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/back_site_info.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body>
    <div class="back_nav">
        <div class="bcak_logo">
            <img src="images/e7logo.png" alt="">
            <h1>後台管理系統</h1>
        </div>
        <ul>
            <li>
                <a href="back_book.php" class="hover-a">預約訂單管理</a>
            </li>
            <li>
                <a href="back_card.php" class="hover-a">點數卡商品管理</a>
            </li>
            <li>
                <a href="back_card_order01.php" class="hover-a">儲值紀錄</a>
            </li>
            <li>
                <a href="back_fac.php" class="hover-a">場地管理</a>
            </li>
            <li>
                <a href="back_mem.php" class="hover-a">會員管理</a>
            </li>
            <li>
                <a href="back_robot_1.php" class="hover-a">聊天機器人維護</a>
            </li>
            <li>
                <?php
                    if( $_SESSION['ADMIN_PERM'] == 0){
                        echo "<a href='back_admin.php' class='hover-a'>管理員管理</a>";
                    }else{
                        echo "<a href='#' style='display:none' class='hover-a'>管理員管理</a>";
                    }
                ?>
            </li>
            <li>
                <form action="php/back_logout.php" class="lout">
                    <input type="submit" value='登出' class="loutbtn">
                </form>
            </li>
        </ul>
    </div>
    <div class="back_content">
    <div class="bg_site_info_page">
        <div class="add_site_info">
            <h3>新增商品</h3>
            <div id="xx">
                X
            </div>
            <form action="back_card_add.php" method="post">         
                <table>
                    <tr>
                        <th>商品價格</th>
                        <td>
                        <input type="text" name="card_price" id="card_price">
                        </td>
                    </tr>
                    <tr>
                        <th>商品點數</th>
                        <td>
                        <input type="text" name="card_points" id="card_points">
                        </td>
                    </tr>
                   
                </table>
                <div class="add_site_info_but">
                    <input type="submit" id="add_site" value="確認新增">
 
                </div>
            </form>
        </div>
    </div>

        <h2>點數卡商品管理</h2>
        <div class="search">
            <button class="btn">新增商品</button>
        </div>
        

         <table>
                <thead>
                    <tr>
                        <th>商品編號</th>
                        <th>商品售價</th>
                        <th>商品點數</th>
                        <th>商品狀態</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                require_once('php/connect_g4.php');
                $show_card = "SELECT * FROM pointcard";
                $query = $pdo->query($show_card);
                while($row = $query->fetch(PDO::FETCH_ASSOC)){
                    if($row['CARD_STATUS']==1){
                        $row['CARD_STATUS'] = '上架中';
                    }
                    else
                        $row['CARD_STATUS'] = '下架中';
                    
                    echo "<tr>".
                    "<td class='card_no'>".$row['CARD_NO']."</td>".
                    "<td>".$row['CARD_PRICE']."</td>".
                    "<td>".$row['CARD_POINTS']."</td>".
                    '<td><input class="btn_status" type="button" value="'.$row['CARD_STATUS'].'"></td>'.
                    "</tr>";
                }
                ?>
                </tbody>
            </table>              
    </div>
    <script>
            $('.btn_status').click(function(){
                if($(this).val()=='上架中')
                $(this).val('下架中');
                else
                $(this).val('上架中');

                $.ajax({
                url: 'back_card_status.php',
                dataType: 'text',
                tpye: 'GET',
                data:{
                    CARD_NO:$(this).parents().parents().children().eq(0).text(),
                    CARD_STATUS: $(this).val(),
                },
                success: function(data) {
                    alert('修改成功');
                    // $('table tbody').append(data);    
                }
            });
            });
            $('.btn').click(function () { 
                $('.bg_site_info_page').toggleClass('active');
            });
            $('#xx').click(function () {
                $('.bg_site_info_page').removeClass('active');
            })
    </script>
    
</body>
</html>