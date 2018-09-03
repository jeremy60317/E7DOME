<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Examples</title>
	<link rel="stylesheet" href="css/booking.css">
	<link rel="stylesheet" href="css/font.css">
</head>

<body>
	<header>
		<?php include 'header.php';?>
	</header>
	<div class="container">
		<div class="area accordion">
			<h3 class="text-lg">籃球場</h3>
			<div class="mask">
				<div class="court panel">
					<h3 class="text-xxlg padding-32">籃球場</h3>
					<table id="tbl1" class="table-date">
						<caption class="text-white text-lg padding-16">選擇預約日期</caption>
						<tr>
							<!-- 							<th>SUN</th>
								<th>MON</th>
								<th>TUE</th>
								<th>WED</th>
								<th>THU</th>
								<th>FRI</th>
								<th>SAT</th> -->
						</tr>
					</table>
					<table class="table-select text-white">
						<tr>
							<th>場地</th>
							<th>時段</th>
							<th>點數</th>
							<th>狀態</th>
						</tr>
						<tr>
							<td>籃球場(A)</td>
							<td>上午</td>
							<td>500點</td>
							<td><a href="#" class="btn dim-gray default opacity-1">已預約</a></td>
						</tr>
						<tr>
							<td>籃球場(A)</td>
							<td>下午</td>
							<td>500點</td>
							<td><a href="#" class="btn dim-orange">查看揪團</a></td>
						</tr>
						<tr>
							<td>籃球場(B)</td>
							<td>上午</td>
							<td>500點</td>
							<td><a href="#" class="btn dim-blue" id="myBtn">預約</a></td>
						</tr>
						<tr>
							<td>籃球場(B)</td>
							<td>下午</td>
							<td>500點</td>
							<td><a href="#" class="btn dim-orange">查看揪團</a></td>
						</tr>
					</table>
				</div><!-- panel -->
				<div class="content">
					<!-- <img src="images/booking/01basketball.jpg"> -->
				</div>
			</div>
		</div>

		<!-- BADMINTON -->
		<div class="area accordion activeNow">
			<h3 class="text-lg">保齡球場</h3>
			<div class="mask">
				<div class="court panel">
					<h3 class="text-xxlg padding-32">保齡球場</h3>
					<table id="tbl2" class="table-date">
						<caption class="text-white text-lg padding-16">選擇預約日期</caption>
						<tr>
							<!-- 							<th>SUN</th>
								<th>MON</th>
								<th>TUE</th>
								<th>WED</th>
								<th>THU</th>
								<th>FRI</th>
								<th>SAT</th> -->
						</tr>
					</table>
					<table class="table-select text-white">
						<tr>
							<th>場地</th>
							<th>時段</th>
							<th>點數</th>
							<th>狀態</th>
						</tr>
						<tr>
							<td>保齡球場(A)</td>
							<td>上午</td>
							<td>500點</td>
							<td><a href="#" class="btn dim-gray default opacity-1">已預約</a></td>
						</tr>
						<tr>
							<td>保齡球場(A)</td>
							<td>下午</td>
							<td>500點</td>
							<td><a href="#" class="btn dim-orange">查看揪團</a></td>
						</tr>
						<tr>
							<td>保齡球場(B)</td>
							<td>上午</td>
							<td>500點</td>
							<td><a href="#" class="btn dim-blue">預約</a></td>
						</tr>
						<tr>
							<td>保齡球場(B)</td>
							<td>下午</td>
							<td>500點</td>
							<td><a href="#" class="btn dim-orange">查看揪團</a></td>
						</tr>
					</table>
				</div><!-- panel -->
				<div class="content">
					<!-- <img src="images/booking/02badminton.jpg"> -->
				</div>
			</div>
		</div>

		<!-- CLIMBLING -->
		<div class="area accordion">
			<h3 class="text-lg">攀岩場</h3>
			<div class="mask">
				<div class="court panel">
					<h3 class="text-xxlg padding-32">攀岩場</h3>
					<table id="tbl3" class="table-date">
						<caption class="text-white text-lg padding-16">選擇預約日期</caption>
						<tr>
							<!-- 							<th>SUN</th>
								<th>MON</th>
								<th>TUE</th>
								<th>WED</th>
								<th>THU</th>
								<th>FRI</th>
								<th>SAT</th> -->
						</tr>
					</table>
					<table class="table-select text-white">
						<tr>
							<th>場地</th>
							<th>時段</th>
							<th>點數</th>
							<th>狀態</th>
						</tr>
						<tr>
							<td>攀岩場(A)</td>
							<td>上午</td>
							<td>500點</td>
							<td><a href="#" class="btn dim-gray default opacity-1">已預約</a></td>
						</tr>
						<tr>
							<td>攀岩場(A)</td>
							<td>下午</td>
							<td>500點</td>
							<td><a href="#" class="btn dim-orange">查看揪團</a></td>
						</tr>
						<tr>
							<td>攀岩場(B)</td>
							<td>上午</td>
							<td>500點</td>
							<td><a href="#" class="btn dim-blue">預約</a></td>
						</tr>
						<tr>
							<td>攀岩場(B)</td>
							<td>下午</td>
							<td>500點</td>
							<td><a href="#" class="btn dim-orange">查看揪團</a></td>
						</tr>
					</table>
				</div><!-- panel -->
				<div class="content">
					<!-- <img src="images/booking/03climbling.jpg"> -->
				</div>
			</div>
		</div>

		<div class="area accordion">
			<h3 class="text-lg">羽球場</h3>
			<div class="mask">
				<div class="court panel">
					<h3 class="text-xxlg padding-32">羽球場</h3>
					<table id="tbl4" class="table-date">
						<caption class="text-white text-lg padding-16">選擇預約日期</caption>
						<tr>
							<!-- 							<th>SUN</th>
								<th>MON</th>
								<th>TUE</th>
								<th>WED</th>
								<th>THU</th>
								<th>FRI</th>
								<th>SAT</th> -->
						</tr>
					</table>
					<table class="table-select text-white">
						<tr>
							<th>場地</th>
							<th>時段</th>
							<th>點數</th>
							<th>狀態</th>
						</tr>
						<tr>
							<td>羽球場(A)</td>
							<td>上午</td>
							<td>500點</td>
							<td><a href="#" class="btn dim-gray default opacity-1">已預約</a></td>
						</tr>
						<tr>
							<td>羽球場(A)</td>
							<td>下午</td>
							<td>500點</td>
							<td><a href="#" class="btn dim-orange">查看揪團</a></td>
						</tr>
						<tr>
							<td>羽球場(B)</td>
							<td>上午</td>
							<td>500點</td>
							<td><a href="#" class="btn dim-blue">預約</a></td>
						</tr>
						<tr>
							<td>羽球場(B)</td>
							<td>下午</td>
							<td>500點</td>
							<td><a href="#" class="btn dim-orange">查看揪團</a></td>
						</tr>
					</table>
				</div><!-- panel -->
				<div class="content">
					<!-- <img src="images/booking/04bowling.jpg"> -->
				</div>
			</div>
		</div>


		<!-- The Modal -->
		<div id="myModal" class="modal">

			<!-- Modal content -->
			<div class="modal-content">
				<div class="modal-header">
					<div class="padding-md dim-blue text-white clearfix">
						<h3 class="left">確認預約</h3>
						<span class="close">&times;</span>
					</div>
				</div>
				<div class="modal-body padding-32">
					<table class="table-modal">
						<tr>
							<th>預約場地</th>
							<th>預約日期</th>
							<th>預約時段</th>
							<th>場地點數</th>
						</tr>
						<tr>
							<td>羽球場(A)</td>
							<td>2018/08/08</td>
							<td>上午</td>
							<td>500點</td>
						</tr>
					</table>
					<div class="modal-btn-container margin-top-16">
						<div class="modal-btn">
							<input type="button" class="btn dim-orange cancel" value="取消預約">
						</div>
						<div class="modal-btn">
							<input type="button" class="btn dim-blue" value="確認預約" onclick="window.location='bookingreceipt.html';">
						</div>
					</div>
				</div><!-- modal-body -->
			</div>

		</div><!-- modal -->

	</div><!-- container -->
	
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script src="js/booking.js"></script>
	<script>
		$('.humberger_btn').click(function () {
			$(this).toggleClass('active');
		})
	</script>
</body>

</html>