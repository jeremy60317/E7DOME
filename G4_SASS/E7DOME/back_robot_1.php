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
        <h2>聊天機器人維護</h2>
        <!-- <div id="tab-page"> -->
            <!-- <ul class="tab-title">
                <li class="active"><a href="#tab01">諮詢問答</a></li>
                <li><a href="#tab02">待回答問題</a></li>
                <li><input type="button" value="新增問答" id="new_qa"></li>
            </ul> -->
        <!-- </div> -->
        <div class="search">
            <input type="button" value="諮詢問答"  class="btn active">
            <input type="button" value="待回答問題" class="btn">
            <input type="button" value="新增問答" id="new_qa" class="btn">
        </div>
        <form>
            <table id="tab01">
                <thead>
                    <tr>
                        <th>諮詢編號</th>
                        <th>諮詢關鍵字</th>
                        <th>諮詢答案</th>
                        <th>編輯儲存</th>
                        <th>編輯刪除</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <table id="tab02">
                <thead>
                    <tr>
                        <th>諮詢編號</th>
                        <th>待回答問題</th>
                        <th>設定答案</th>
                        <th>編輯儲存</th>
                        <th>編輯刪除</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
    </div>

    <script>
        $(document).ready(function () {
            // var tab = $('.tab-title li'); //頁籤按鈕
            var tab = $('.search input');
            console.log(tab.eq(0));
            console.log(tab.eq(1));
            tab.eq(0).click(solve); //頁籤 1被按到執行solve
            tab.eq(1).click(unsolve);//頁籤 2被按到執行unsolve
            window.onload = solve;//一讀取就執行solve

            function solve() {//諮詢管理
                $('#new_qa').show();
                $.ajax({
                    url: 'back_robot.php',
                    dataType: 'text',
                    tpye: 'POST',
                    data: {
                        solve: 'solve',
                    },
                    success: function (data) {
                        $('table tbody').children().remove();
                        $('table tbody').append(data);
                        $('.q_change').click(function () {
                            // console.log(parseInt($(this).parent().parent().find('td').eq(0).text()));
                            // console.log($(this).parent().parent().find('input').eq(0).val());
                            // console.log($(this).parent().parent().find('input').eq(1).val());
                            $.ajax({

                                url: 'back_robot.php',
                                data: {
                                    KEY_WORD_NO: $(this).parent().parent().find('td').eq(0).text(),
                                    KEY_WORD: $(this).parent().parent().find('input').eq(0).val(),
                                    ANSWER: $(this).parent().parent().find('input').eq(1).val()
                                },
                                tpye: 'POST',
                                dataType: 'text',
                                success: function (data) {
                                    // $('#table').append(data);
                                    alert('修改成功');
                                    solve();
                                }
                            });
                        });


                        $('.q_del').click(function () {
                            console.log(parseInt($(this).parent().parent().find('td').eq(0).text()));
                            $.ajax({

                                url: 'back_robot.php',
                                data: {
                                    DEl_KEY_WORD_NO: parseInt($(this).parent().parent().find('td').eq(0).text())
                                },
                                tpye: 'POST',
                                dataType: 'text',
                                success: function (data) {
                                    // $('#table').append(data);
                                    alert('刪除成功');
                                    solve();
                                }
                            });
                        });
                    }
                });
            }

            function unsolve() {////尚未回答管理
                $('#new_qa').hide();
                $.ajax({
                    url: 'back_robot.php',
                    dataType: 'text',
                    tpye: 'POST',
                    data: {
                        unsolve: 'unsolve',
                    },
                    success: function (data) {
                        $('table tbody').children().remove();
                        $('table tbody').append(data);
                        $('.q_change').click(function () {
                            // console.log(parseInt($(this).parent().parent().find('td').eq(0).text()));
                            // console.log($(this).parent().parent().find('input').eq(0).val());
                            // console.log($(this).parent().parent().find('input').eq(1).val());
                            $.ajax({
                                url: 'back_robot.php',
                                data: {
                                    KEY_WORD_NO: $(this).parent().parent().find('td').eq(0).text(),
                                    KEY_WORD: $(this).parent().parent().find('td').eq(1).text(),
                                    ANSWER: $(this).parent().parent().find('input').eq(0).val()
                                },
                                tpye: 'POST',
                                dataType: 'text',
                                success: function (data) {
                                    // $('#table').append(data);
                                    alert('修改成功');
                                    unsolve()
                                }
                            });
                        });


                        $('.q_del').click(function () {
                            console.log(parseInt($(this).parent().parent().find('td').eq(0).text()));
                            $.ajax({

                                url: 'back_robot.php',
                                data: {
                                    DEl_KEY_WORD_NO: parseInt($(this).parent().parent().find('td').eq(0).text())
                                },
                                tpye: 'POST',
                                dataType: 'text',
                                success: function (data) {
                                    // $('#table').append(data);
                                    alert('刪除成功');
                                    unsolve()
                                }
                            });
                        });
                    }
                });
            }


            $('#new_qa').click(function () {
                $.ajax({
                    url: 'back_robot_add.php',
                    dataType: 'text',
                    tpye: 'GET',
                    success: function (data) {
                        // $('table tbody').append(data);
                        solve();
                    }
                })
            });
        });

        // 頁簽
        $(function () {
            var tab = $('.tab-title li'); //頁籤按鈕
            var table = $('table');      //table
            $('table#tab02').hide();    //先隱藏table2

            tab.click(function () {   //頁籤點選

                var index = $(this).index();   //抓到點選頁籤的索引值
                $(this).addClass('active'); //被點選的頁籤+active 
                tab.not($(this)).removeClass('active'); //除了被點選的頁籤 其他頁籤remove active
                table.hide();//所有table隱藏
                table.eq(index).show(); //table 對應到的table show

            });



            // var $li = $('ul.tab-title li');
            // $($li.eq(0).addClass('active').find('a').attr('href')).siblings('.back_content').hide();

            // $li.click(function () {
            //     $($(this).find('a').attr('href')).show().siblings('.back_content').hide();
            //     $(this).addClass('active').siblings('.active').removeClass('active');
            // });
        });



    </script>
</body>

</html>