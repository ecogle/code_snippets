<?php include "header.php"?>

<div class="main" id="main">
    <div class="page_header"><h1 id="title">Code Snippets</h1></div>
    <div class="nav_bar">
        <ul>
            <?php 
                $options = ["SQL","JavaScript","jQuery","Java"];
                foreach($options as $v){
                    echo "<li>".$v."</li>";
                }
            ?>
        </ul>
    </div>

    <div class="main_content">
                <code><pre>This is a test of the EBS
                        hello world</pre> </code>
                        <script>console.log(9-25)</script>
    <div>
</div>
<?php include "footer.php"?>
    
