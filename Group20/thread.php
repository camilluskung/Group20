<?php
  //header
  $css = "style/threadstyle.css";
  $page = "board";
  include("header.php");
?>    

<?php
	require_once('forum/config.php');

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect");
	mysql_select_db(DB_DATABASE)or die("cannot select DB");
	$tbl_name="topic"; // Table name

	// get value of id that sent from address bar
	$id=$_GET['id'];
	$sql_topic="SELECT * FROM $tbl_name WHERE id='$id'";
	$result_topic=mysql_query($sql_topic);
	$rows_topic=mysql_fetch_array($result_topic);
?>

	<script>
		function $(id) {
			var element = document.getElementById(id);
			return element;
		}

		function testBodyValid(id) {
			var str = $(id).value.trim();
			return (str.length > 0);
		}

		function warnBodyInvalid(id) {
			if (!testBodyValid(id)) {
				if ($("errMsgBody").innerHTML.length == 0)
					$("errMsgBody").innerHTML = "Post body cannot be empty";
				return false;
			} else {
				if ($("errMsgBody").innerHTML.length > 0)
					$("errMsgBody").innerHTML = "";
				return true;
			}
		}

		function validatePost() {
			return warnBodyInvalid("taBody");
		}
	</script>

<!-- Content -->
	<main class="container" id="start">
	<!-- Bread Crumb -->
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li><a href="board.php#start">Board</a></li>
			<li class="active">Thread</li>
		</ul>
		<h1>Thread</h1>
		<!-- Reply button (top) -->
		<a href="#replybody" class="btn btn-primary" id="btnReplyPost" role="button">Reply to thread</a>
		<!-- Posts -->
		<div class="row post">
			<div class="col-md-2 userinfo">
				<div class="username">
				<?php 
					$member_id=$rows_topic['member_id'];
					$sql_member="SELECT * FROM members WHERE member_id='$member_id'";
					$result_member=mysql_query($sql_member);
					$rows_member=mysql_fetch_array($result_member);
					echo $rows_member['firstname']; 
				?>
				</div>
			</div>
			<div class="col-md-10 postbody">
				<h2><?php echo $rows_topic['topic']; ?></h2>
				<p>
					<?php echo $rows_topic['detail']; ?>
				</p>
				<strong>Date/time : </strong><?php echo $rows_topic['datetime']; ?>
			</div>
		</div>

		<?php
		$tbl_name2="response"; // Switch to table "response"

		$sql_response="SELECT * FROM $tbl_name2 WHERE topic_id='$id'";
		$result_response=mysql_query($sql_response);

		while($rows_response=mysql_fetch_array($result_response)){
		?>

		<div class="row post">
			<div class="col-md-2 userinfo">
				<div class="username">
				<?php 
					$member_id=$rows_response['member_id'];
					$sql_member="SELECT * FROM members WHERE member_id='$member_id'";
					$result_member=mysql_query($sql_member);
					$rows_member=mysql_fetch_array($result_member);
					echo $rows_member['firstname']; 
				?>
				</div>
			</div>
			<div class="col-md-10 postbody">
				<p>
					<?php echo $rows_response['response']; ?>
				</p>
				<strong>Date/time : </strong><?php echo $rows_response['datetime']; ?>
			</div>
		</div>

		<?php
		}
		mysql_close();
		?>

		<div class="row post" id="replybody">
			<div class="userinfo col-md-2">
				<div class="username" id="currentUser">
				<?php
	            if($_SESSION['logged']==true) {
	            	echo $_SESSION["SESS_FIRST_NAME"];
	              	}
              	else if($_SESSION['logged']==false) 
                	echo 'GUEST';
	            ?>
				</div>
			</div>
			<div class="postbody col-md-10">
				<form action="forum/add_response.php" method="post" id="replyform" 
					onSubmit="return validatePost()">
					<textarea form="replyform" name="response" id="taBody" placeholder="write your reply here..."></textarea>
					<div class=message id="errMsgBody"></div>
					<input name="id" type="hidden" value="<?php echo $id; ?>">
					<input type="submit" class="btn btn-success" id="submitReply" value="post quick reply">
				</form>
			</div>
		</div>
	</main>

<?php 
  //footer
  include("footer.php")
?>