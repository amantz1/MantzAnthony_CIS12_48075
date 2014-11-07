<?php
$page_title = "Anthony Mantz's PHP Homework Page";
include ('./includes/header.php');
?>
    <ul>
        <li><a href="Projects/v1/PersonalProject/home.php" target="frame">Personal V1</a></li>
        <li><a href="Projects/v1/ClassProject/home.php" target="frame">Class V1</a>	
    </ul>
<iframe name="frame" srcdoc="<p>Click a link on the navbar to choose an assignment, or to see the code click <a href="https://github.com/amantz1/MantzAnthony_CIS12_48075/tree/master/Projects" target="_blank">here</a>.</p>"></iframe>
<?php
include ('./includes/footer.php');
?>