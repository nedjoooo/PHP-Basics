<style>
    table, tr, td, th {
        border: 1px solid black;
    }
</style>
<?php

if(isset($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['phone'], $_POST['gender'],
            $_POST['birthday'], $_POST['nationality'])) {
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $birthday=$_POST['birthday'];
    $nationality=$_POST['nationality'];
    $lastCompanyName=$_POST['lastCompanyName'];
    $startJobDate=$_POST['startDate'];
    $endJobDate=$_POST['endDate'];
    $programmingLanguages=$_POST['programmingLanguages'];
    $programmingLanguagesCount=count($programmingLanguages);
    $programmingLanguagesLevel=$_POST['programmingLevel'];
    $languages=$_POST['languages'];
    $languagesCount=count($languages);
    $comprehensions=$_POST['comprehension'];
    $reading=$_POST['reading'];
    $writing=$_POST['writing'];
    $driverLicense=array();

    if(isset($_POST['a'])) {
        array_push($driverLicense, "A");
    }
    if(isset($_POST['b'])) {
        array_push($driverLicense, "B");
    }
    if(isset($_POST['c'])) {
        array_push($driverLicense, "C");
    }

    ?>
    <h1>CV</h1>
    <table>
        <tr>
            <th colspan="2">Personal Information</th>
        </tr>
        <tr>
            <td>First Name</td>
            <td><?=htmlentities($firstName) ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?=htmlentities($lastName) ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?=htmlentities($email) ?></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><?=htmlentities($phone) ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?=htmlentities($gender) ?></td>
        </tr>
        <tr>
            <td>Birth Date</td>
            <td><?=htmlentities($birthday) ?></td>
        </tr>
        <tr>
            <td>Nationality</td>
            <td><?=htmlentities($nationality) ?></td>
        </tr>
    </table><br>
    <table>
        <tr>
            <th colspan="2">Last Work Position</th>
        </tr>
        <tr>
            <td>Company Name</td>
            <td><?=htmlentities($lastCompanyName) ?></td>
        </tr>
        <tr>
            <td>From</td>
            <td><?=htmlentities($startJobDate) ?></td>
        </tr>
        <tr>
            <td>To</td>
            <td><?=htmlentities($endJobDate) ?></td>
        </tr>
    </table><br>
    <table>
        <tr>
            <th colspan="3">Computer Skills</th>
        </tr>
        <tr>
            <td rowspan="<?= $programmingLanguagesCount+1 ?>">Programming Languages</td>
            <th>Language</th>
            <th>Skill Level</th>
        </tr>
        <?php
        for($i=0;$i<$programmingLanguagesCount;$i++) {
            ?>
                <tr>
                    <td><?=htmlentities($programmingLanguages[$i]); ?></td>
                    <td><?=htmlentities($programmingLanguagesLevel[$i]); ?></td>
                </tr>
            <?php
        }
        ?>
    </table><br>
    <table>
        <tr>
            <th colspan="5">Other Skills</th>
        </tr>
        <tr>
            <td rowspan="<?= $languagesCount+1; ?>">Languages</td>
            <td>Language</td>
            <td>Comprehension</td>
            <td>Reading</td>
            <td>Writing</td>
        </tr>
        <?php
        for($i=0;$i<$languagesCount;$i++) {
            ?>
            <tr>
                <td><?=htmlentities($languages[$i]) ?></td>
                <td><?=htmlentities($comprehensions[$i]) ?></td>
                <td><?=htmlentities($reading[$i]) ?></td>
                <td><?=htmlentities($writing[$i]) ?></td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td>Drivers License</td>
            <td><?=htmlentities(implode(",", $driverLicense));  ?></td>
        </tr>

    </table>

    <?php


} else {
    require("index.html");
}

?>

