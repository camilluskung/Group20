<?php
	include 'functions.php';
	require_once('forum/config.php');
	session_start();

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
	mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
	$tbl_name="topic"; // Table name
	$sql_last_topic="SELECT id FROM $tbl_name ORDER BY id DESC LIMIT 1";
	$result_last_topic=mysql_query($sql_last_topic);
	$row_last_topic=mysql_fetch_array($result_last_topic);
	$upper_bound=$row_last_topic["id"];
	$lower_bound=$upper_bound-10;

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
    <div id="start">
		<h1>Board</h1>
    </div>
		<!-- Create thread button (top)-->
		<a href="createThread.php#start" class="btn btn-primary" id="btnCreateThread" role="button">Start a new thread</a>
		<!-- <ul class="pagination" id="paginationBoard">
			<li class="active"><a href="#start">1</a></li>
			<li><a href="board.php?id=<?=$lower_bound?>#start">2</a></li>
			<li><a href="#start">3</a></li>
			<li><a href="#start">4</a></li>
			<li><a href="#start">5</a></li>
		</ul> -->
		<div class="table-responsive" id="board">
		<!--
		<table class="table table-hover table-bordered table-striped">
		-->
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th class="number">#</th>
					<th class="topic">Topic</th>
					<th class="view">Replies</th>
					<th class="date">Date</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql_topic="SELECT * FROM $tbl_name WHERE id BETWEEN $lower_bound AND $upper_bound ORDER BY id DESC";
				//$sql_topic="SELECT * FROM $tbl_name ORDER BY id DESC";
				$result_topic=mysql_query($sql_topic);
				$count = min(10, mysql_num_rows($result_topic));
				if($count==0)
					echo '
						<tr>
							<td class="number">0</td>
							<td class="topic">No topics</td>
							<td class="view">0</td>
							<td class="date"> N/A</td>
						</tr>';
				else
					for($i=0; $i < $count; $i++){
						$row_topic=mysql_fetch_array($result_topic);
						$tbl_name2="response"; // Switch to table "response"
						$sql_response="SELECT * FROM $tbl_name2 WHERE topic_id=".$row_topic['id'];
						$result_response=mysql_query($sql_response);
						$sql_last_response="SELECT * FROM $tbl_name2 WHERE topic_id=".$row_topic['id']." ORDER BY id DESC LIMIT 1";
						$result_last_response=mysql_query($sql_last_response);
						$row_last_response=mysql_fetch_array($result_last_response);
						$number_response=mysql_num_rows($result_last_response);
						echo '
							<tr>
								<td class="number">'.$row_topic['id'].'</td>
								<td class="topic"><a href="thread.php?id='.$row_topic['id'].'#start">';
						if (empty($row_topic['topic'])) {
							echo 'topic '.$row_topic['id'];
						}
						else {
							echo $row_topic['topic'];
						}
						echo 	'</a></td>
								<td class="view">'.mysql_num_rows($result_response).'</td>
								<td class="date">Last Posy By: ';
						if($number_response==0) {
							$member_id=$row_topic['member_id'];
							$sql_member="SELECT * FROM members WHERE member_id='$member_id'";
							$result_member=mysql_query($sql_member);
							$rows_member=mysql_fetch_array($result_member);
							echo $rows_member['firstname']."<br>"; 
							echo $row_topic['datetime'].'</td></tr>';
						}
						else {
							$member_id=$row_last_response['member_id'];
							$sql_member="SELECT * FROM members WHERE member_id='$member_id'";
							$result_member=mysql_query($sql_member);
							$rows_member=mysql_fetch_array($result_member);
							echo $rows_member['firstname']."<br>"; 
							echo $row_last_response['datetime'].'</td></tr>';
						}
					}
				?>
			</tbody>
		</table>
		</div>
		<!-- Create thread button (bottom)-->
		<a href="createThread.php#start" class="btn btn-primary" id="btnCreateThread" role="button">Start a new thread</a>
		<!-- <ul class="pagination" id="paginationBoard">
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
		</ul> -->
	</main>

<?php 
  //footer
  include("footer.php")
?>