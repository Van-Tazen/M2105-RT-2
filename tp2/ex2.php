<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <input type="number" name="a">
    <input type="number" name="b">
    <input type="submit">
</form>



<?php
if(array_key_exists("a",$_POST)) {
    print($_POST["a"] + $_POST["b"]."<br>");
     print($_POST["a"] - $_POST["b"]."<br>");
     print($_POST["a"] * $_POST["b"]."<br>");
     print($_POST["a"] / $_POST["b"]."<br>");

}
?>