<style>
    input {
        margin: 3px;
    }
</style>
<form action="#" method="post">
    <input type="text" name="name" placeholder="Name..."><br>
    <input type="text" name="age" placeholder="Age..."><br>
    <input type="radio" name="sex" value="male">Male
    <br>
    <input type="radio" name="sex" value="female">Female
    <br>
    <input type="submit" value="Submit">
</form>
<?php

if(isset($_POST['name'], $_POST['age'], $_POST['sex'])) {
    ?><p><?php
    echo "My name is ".htmlentities($_POST['name']).". I am ".htmlentities($_POST['age'])." years old. I am ".htmlentities($_POST['sex']).".";
    ?></p><?php
}


