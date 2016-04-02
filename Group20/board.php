<?php
  //header
  $css = "style/boardstyle.css";
  $page = "board";
  include("header.php");
?>

<!-- Content -->
	<main class="container" id="start">
	<!-- Bread Crumb -->
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Board</li>
		</ul>
		<h1>Board</h1>
		<!-- Create thread button (top)-->
		<a href="createThread.php#start" class="btn btn-primary" id="btnCreateThread" role="button">Start a new thread</a>
		<ul class="pagination" id="paginationBoard">
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
		</ul>
		<div class="table-responsive" id="board">
		<!--
		<table class="table table-hover table-bordered table-striped">
		-->
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th class="number">#</th>
					<th class="topic">Topic</th>
					<th class="view">View</th>
					<th class="date">Date</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="number">1</td>
					<td class="topic"><a href="thread.php#start">topic 1</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
				<tr>
					<td class="number">2</td>
					<td class="topic"><a href="thread.php#start">topic 2</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
				<tr>
					<td class="number">3</td>
					<td class="topic"><a href="thread.php#start">topic 3</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
				<tr>
					<td class="number">4</td>
					<td class="topic"><a href="thread.php#start">topic 4</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
				<tr>
					<td class="number">5</td>
					<td class="topic"><a href="thread.php#start">topic 5</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
				<tr>
					<td class="number">6</td>
					<td class="topic"><a href="thread.php#start">topic 6</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
				<tr>
					<td class="number">7</td>
					<td class="topic"><a href="thread.php#start">topic 7</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
				<tr>
					<td class="number">8</td>
					<td class="topic"><a href="thread.php#start">topic 8</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
				<tr>
					<td class="number">9</td>
					<td class="topic"><a href="thread.php#start">topic 9</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
				<tr>
					<td class="number">10</td>
					<td class="topic"><a href="thread.php#start">topic 10</a></td>
					<td class="view">6 / 1000</td>
					<td class="date">Last Poster <br>
					03-01-2016, 12:59 PM</td>
				</tr>
			</tbody>
		</table>
		</div>
		<!-- Create thread button (bottom)-->
		<a href="createThread.php#start" class="btn btn-primary" id="btnCreateThread" role="button">Start a new thread</a>
		<ul class="pagination" id="paginationBoard">
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
		</ul>
	</main>

<?php 
  //footer
  include("footer.php")
?>