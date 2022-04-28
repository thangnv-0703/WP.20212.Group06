<?php
    include "Page.php";
    $content = '<font size=4 color="blue">
                    Page Generation! 
                </font>
                <form method="post" action="result.php">
                    <label>Header</label>
                    <input type="text" name="header" size="10" maxlength="10">
                    <br>
                    <label>Content</label>
                    <textarea name="content" rows="4" cols="50" ></textarea>
                    <br>
                    <label>Year</label> 
                    <input type="text" name="year" size="10" maxlength="10" >
                    <br>
                    <label>Copyright</label> 
                    <input type="text" name="copyright" size="10" maxlength="10" >
                    <div>
                        <input type="submit" value="Submit" name="submit">
                        <input type="reset" value="Restart">
                    </div> 
                </form>';

    $obj = new Page( $content, 'Page Generation', '2022', 'Hieu');
    $obj->get();
?>