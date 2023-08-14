<?php 
    echo '<h1>Welcome to all</h1>';
    echo " My Calculator App<br> <br> Ender the details";
 if(isset($_POST['cal']));
 {
    $txt1=$_POST['x'];
    $txt2=$_POST['y'];
    $ans=$_POST['cal'];
    if($ans=="+")
    $ans=$txt1+$txt2;
    else if($ans=="-")
    $ans=$txt1-$txt2;
    else if($ans=="*")
    $ans=$txt1*$txt2;
    else if($ans=="/")
    $ans=$txt1/$txt2;
    else if($ans=="%")
    $ans=$txt1%$txt2;
 }
    
    ?>
<html>
<head>
    <form method="post" action="">
</br>
    X:   <input name=x value="<?php echo $txt1=""; ?>">
</br>
</br>
    Y:  <input name=y value="<?php echo $txt2=""; ?>">
</br>
</br>
Answer: <input name="ans" value="<?php echo $ans; ?>">
</br>
</br>
    <input type="submit" name="cal" value="+">
    <input type="submit" name="cal" value="-">
    <input type="submit" name="cal" value="*">
    <input type="submit" name="cal" value="/">
    <input type="submit" name="cal" value="%">
    

    </form>
</html>