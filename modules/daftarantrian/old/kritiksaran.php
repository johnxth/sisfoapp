<?php
echo "<div class='span4'>";
//-------------------------------------------------
		include 'modules/daftarantrian/block.php';
//-------------------------------------------------
    echo "<div class='block'>";
        echo "<div class='head'>";
            echo "<div class='icon'><span class='ico-arrow-right'></span></div>";
            echo "<h2>Kritik dan Saran</h2>";
        echo "</div>";
		echo "<form method='post'>";
        echo "<div class='data-fluid'>";
            echo "<div class='row-form'>";
                echo "<div class='span3'>Name:</div>";
                echo "<div class='span9'>";
                    echo "<input type='text' name='nama' value='' placeholder='Name'>";
                echo "</div>";
            echo "</div>";
            echo "<div class='row-form'>";
                echo "<div class='span3'>Email:</div>";
                echo "<div class='span9'>";
                    echo "<input type='text' name='email' value='' placeholder='Email'>";
                echo "</div>";
            echo "</div>";
            echo "<div class='row-form'>";
                echo "<div class='span12'>";
                    echo "<textarea name='text' value=''></textarea>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
        echo "<div class='toolbar'>";
            echo "<button class='btn' type='submit'>Send <span class='icon-arrow-next icon-white'></span></button>";
        echo "</div>";
		echo "</form>";
    echo "</div>";
echo "</div>";
?>