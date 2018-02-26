<!DOCTYPE html>
<html>
<head>
    <title> Assignment #2. PHP functions and object-relational mapping</title>
</head>
<body>

    <h1> Assignment #2. PHP functions and object-relational mapping </h1>
    <B> Team SIX Members: </B> Aaron Chan, Wanyi Li, Tao Liang, Zihang Ruan <br/>
    <hr>

    <B>Queries based on form data</B>
    <ol>
        <li><a href="/cs157b/Assignment2/index.php/?query=select * from Class;" >Class</a></li>
        <li><a href="/cs157b/Assignment2/index.php/?query=select * from Department;" >Department</a></li>
        <li><a href="/cs157b/Assignment2/index.php/?query=select * from Note;" >Note</a></li>
        <li><a href="/cs157b/Assignment2/index.php/?query=select * from NoteBook;" >NoteBook</a></li>
        <li><a href="/cs157b/Assignment2/index.php/?query=select * from Professor;" >Professor</a></li>
        <li><a href="/cs157b/Assignment2/index.php/?query=select * from Professor_Email;" >Professor_Email</a></li>
        <li><a href="/cs157b/Assignment2/index.php/?query=select * from Professor_Phone;" >Professor_Phone</a></li>
        <li><a href="/cs157b/Assignment2/index.php/?query=select * from School;" >School</a></li>
        <li><a href="/cs157b/Assignment2/index.php/?query=select * from TeachAt;" >TeachAt</a></li>
        <li><a href="/cs157b/Assignment2/index.php/?query=select * from User;" >User</a></li>
        <li><a href="/cs157b/Assignment2/index.php/?query=select * from Vote;" >Vote</a></li>
    </ol>
<hr>

    <!-- Form -->
    <form method="post">
        <fieldset>
            <legend>Search Engine</legend>
            <p>
                <label>Class name:</label>
                <input name="className" type="text" />
            </p>
            <p>
                <label>Department name:</label>
                <input name="departmentName" type="text" />
            </p>

            <p>
                <label>Professor:</label>
                First Name: <input name="professorfirstName" type="text" />
                Last Name: <input name="professorlastName" type="text" />
            </p>

<!--            <p>-->
<!--                <label>NoteBook name:</label>-->
<!--                <input name="notebookName" type="text" />-->
<!--            </p>-->
<!---->
<!--            <p>-->
<!--                <label>Note name:</label>-->
<!--                <input name="noteName" type="text" />-->
<!--            </p>-->

            <B>Order By:</B>
            <br/>
            <select name="Orderby">
                <option value="name" <?php if($orderby == "Name") echo "selected"; ?>>Name</option>
                <option value="id" <?php if($orderby == "ID") echo "selected"; ?>>Year</option>
            </select>
            <br/><br/>

            <p>
                <input type="submit" value="Submit" name="submit"/>
            </p>
        </fieldset>
    </form>

</body>
<hr>



<!-- The Output of the Result Point -->
<div id="results">
    <?php
    require_once 'filter.php';
    require_once 'output.php';
    ?>
</div>


</body>
</html>
