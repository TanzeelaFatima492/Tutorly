<?php
session_start();
if (!isset($_SESSION['user_id'])) header("Location: login.php");
?>

<h1>Ask Anything</h1>
<form id="askForm">
    <input type="text" name="question" placeholder="Ask a question..." required>
    <button type="submit">Ask</button>
</form>
<div id="answer"></div>

<script src="assets/js/script.js"></script>
