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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
        <h2>場地管理</h2>
        <div class="search">
        <button class="btn">新增場地</button>
        </div>
        <form action="php/facility/facility_update_site.php" method="POST" enctype="multipart/form-data">
        <table id="updateTable">
            <thead>
                <tr>
                    <th>場地編號</th>
                    <th>類別名稱</th>
                    <th>場地名稱</th>
                    <th>場地介紹</th>
                    <th>場地點數</th>
                    <th>人數</th>
                    <th>場地照片</th>
                    <th>場地狀態</th>
                    <th>編輯</th>
                </tr>
            </thead>
            <tbody id="table_body">
            
            </tbody>
        </table>
        </form>
    </div>
    <div class="bg_site_info_page">
        <div class="add_site_info">
            <h3>新增場地</h3>
            <div id="xx">
                X
            </div>
            <form id="addForm" method="post" action="php/facility/facility_add_site.php" enctype="multipart/form-data">
                <table>
                    <tr>
                        <th>類別名稱</th>
                        <td>
                            <select name="cate_no"  id="cate_no">
                                <option value="1">1：籃球</option>
                                <option value="2">2：保齡球</option>
                                <option value="3">3：羽毛球</option>
                                <option value="4"">4：攀岩</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>場地名稱</th>
                        <td>
                            <input type="text" name="fac_name" maxlength="10" id="fac_Name">
                        </td>
                    </tr>
                    <tr>
                        <th>場地介紹</th>
                        <td>
                            <textarea name="fac_desc" id="fac_desc" cols="30" rows="7" id="facDesc"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>場地點數</th>
                        <td>
                            <input type="number" id="fac_points" name="fac_points" min="0" max="10000">點
                        </td>
                    </tr>
                    <tr>    
                        <th>人數</th>
                        <td>
                            <input type="number" id="fac_mem" name="fac_mem" min="0" max="100">人
                        </td>
                    </tr>
                    <tr>
                        <th>場地照片</th>
                        <td>
                            <input type="file" name="facimg" id="fac_img">
                        </td>
                    </tr>
                </table>
                <div class="add_site_info_but">
                    <input type="submit" id="add_site" value="確認新增">
                    <!-- <button>
                        重　置
                    </button> -->
                </div>
            </form>
        </div>
    </div>
    <script>
       function setChange(){
           console.log("---------")
            let inputfiles = document.getElementsByClassName("file");
            for(var i=0; i<inputfiles.length;i++){
                inputfiles[i].onchange=function(e){
                    var curInputFile = e.target;
                    var file = e.target.files[0];
                    var reader = new FileReader();
                    reader.onload = function(){
                        curInputFile.nextSibling.src = reader.result;
                    }
                    reader.readAsDataURL(file);
                };
            }
        }	

        $(function(){
            // alert($('.file').val());
            $('.btn').click(function () { 
                $('.bg_site_info_page').toggleClass('active');
            });
            $('#xx').click(function () {
                $('.bg_site_info_page').removeClass('active');
            })
            
            function init(){
                $.ajax({
                    url: 'php/facility/facility.php',				
                    dataType: 'text',
                    success:function(data2){
                        $('#table_body').find('td').remove();   
                        $('#table_body').append(data2);
                        for(var i = 0;i<$('.update_status').length;i++){
                                if($('.update_status').eq(i).text()=="下架"){
                                    $('.update_status').eq(i).css('backgroundColor','rgb(255,0,0)');
                                }else{
                                    $('.update_status').eq(i).css('backgroundColor','rgb(255,255,0)');
                                }
                            }
                        setChange();    
                        // $('.update').on('click',function(e){
                        //     e.preventDefault();
                        //     $.ajax({
                        //         url:'php/facility/facility.php',
                        //         dataType:'text',    
                        //         // data:{
                        //         //     upfac_no:parseInt($(this).parent().parent().find('td').eq(0).text()),
                        //         //     upfac_desc:$(this).parent().parent().find('td').eq(3).find('textarea').val(),
                        //         //     upfac_mem:parseInt($(this).parent().parent().find('td').eq(5).find('input').val()),
                        //         // },
                        //         data: new FormData(this),
                        //         type:'POST',
                        //         contentType:false,
                        //         cache:false,
                        //         processData:false,
                        //         success:function(data3){
                        //             $('#table_body').find('tr').remove();  
                        //             $('#table_body').append(data2);

                        //             alert('修改已成功'); 
                        //         },
                        //         error:function(){
                        //             alert('修改失敗，請聯絡您的網路工程師。');
                        //         }
                        //     });
                        // });
                        $('.update_status').on('click',function(e){
                            e.preventDefault();
                            
                            $.ajax({
                                url:'php/facility/update_status.php',
                                dataType:'text',
                                data:{
                                    upfac_no:parseInt($(this).parent().parent().find('td').eq(0).text()),
                                    // upfac_status:parseInt($(this).parent().parent().find('td').eq(7).find('button').val()),
                                },
                                success:function(data4){
                                    alert('修改成功');
                                    init(); 
                                },
                                error:function(){
                                    alert('修改失敗，請聯絡您的網路工程師。');
                                }
                            })
                        });
                    },
                });
                $.ajax({
                    url:'facility'
                })
            }
            init();
        })
    </script>
</body>
</html>