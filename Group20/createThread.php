<?php
	require_once('forum/auth.php');
?>

<?php
  //header
  $css = "style/createThreadstyle.css";
  $page = "board";
  include("header.php");
?>    
	<script>
		function $(id) {
			var element = document.getElementById(id);
			return element;
		}

		function testTopicValid(id) {
			var str = $(id).value.trim();
			return (str.length > 0);
		}

		function warnTopicInvalid(id) {
			if (!testTopicValid(id)) {
				if ($("errMsgTopic").innerHTML.length == 0)
					$("errMsgTopic").innerHTML = "Thread topic cannot be empty";
				return false;
			} else {
				if ($("errMsgTopic").innerHTML.length > 0)
					$("errMsgTopic").innerHTML = "";
				return true;
			}
		}

		function testBodyValid(id) {
			var str = $(id).value.trim();
			return (str.length > 0);
		}

		function warnBodyInvalid(id) {
			if (!testBodyValid(id)) {
				if ($("errMsgBody").innerHTML.length == 0)
					$("errMsgBody").innerHTML = "Thread body cannot be empty";
				return false;
			} else {
				if ($("errMsgBody").innerHTML.length > 0)
					$("errMsgBody").innerHTML = "";
				return true;
			}
		}

		function validateThread() {
			var isValidTopic = warnTopicInvalid("txtTopic");
			var isValidBody = warnBodyInvalid("taBody");
			return isValidTopic&&isValidBody;
		}
	</script>
	
<!-- Content -->
	<main class="container" id="start">
	<!-- Bread Crumb -->
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li><a href="board.php#start">Board</a></li>
			<li class="active">Create New Thread</li>
		</ul>

		<h1>Create New Thread</h1>

		<!-- New thread text area-->
		<div class="row createThread">
			<form action="forum/add_topic.php" method="post" id="threadForm" onSubmit="return validateThread()">
				<label for="txtTopic">Topic</label>
				<input type="text" name="topic" id="txtTopic">
				<div class="message" id="errMsgTopic"></div>
				<textarea form="threadForm" name="detail" id="taBody" placeholder="write your post here..."></textarea>
				<div class="message" id="errMsgBody"></div>
				<input type="submit" class="btn btn-success" value="Submit new thread">
			</form>
		</div>
	</main>

<?php 
  //footer
  include("footer.php")
?>