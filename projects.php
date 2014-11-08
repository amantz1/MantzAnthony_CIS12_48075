<?php
$page_title = "Anthony Mantz's PHP Homework Page";
include ('./includes/header.php');
?>
<div id="nav2">
    <ul>
        <li><a href="./Projects/v1/index.html" target="frame">Version 1</a></li>
        <li><a href="./Projects/v2/index.html" target="frame">Version 2</a></li>
        <li><a href="./Projects/v3/index.html" target="frame">Version 3</a></li>
    </ul>
</div>
    <p id="framenote"><em>Please choose a link above to see what the code does or <a href="https://github.com/amantz1/MantzAnthony_CIS12_48075/tree/master/Projects" target="_blank">click here</a> to see the code on github.</em></p>
<iframe name="frame" width="100%" height="600"></iframe>
<?php
include ('./includes/footer.php');
?>