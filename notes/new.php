<?php
    require_once('includes/db.php');
    require_once('includes/functions.php');


    if($_SERVER['REQUEST_METHOD']=="POST"){
        $title = prep_input($_POST['title']);
        $content = prep_input ($_POST['content']);
        $important = prep_input($_POST['important']);
        // echo $title;
        // echo $content;
        // echo $important;
        //INSERT INTO tablename(columns) VALUES (values)
        //INSERT INTO notes('title','content','important')VALUES ('$title', '$content', '$important')
        $sql = "INSERT INTO notes (title, content, important) VALUES ('";
        $sql .= $title ."','" . $content . "','" .$important . "')";
        //echo $sql;

        //para mai save sa backend. puwede na i check sa notes sa myphp
        if(mysqli_query($conn, $sql)){
            //echo 'Will be saved sa backend';
        };
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Notes App</title>
        <link rel = "stylesheet" href = "styles/style.css">
    </head>
    <header>
            Type your title and content
    </header>

    <div class = "titleDiv">
            <div ><a class ="nav-link" href = "index.php">HOME</a> </div>
            <div class = "head"> New note </div>
    </div>
    <form action = 'new.php' method = 'post'>

            <span class = 'label' > Title </span>
            <input type = 'text' name ='title'/>

            <span class = 'label'> Content </span>
            <textarea name = 'content'></textarea>

            <div class = 'chkgroup'>
                <span class ='label-in' >Important</span>
                <input type = 'hidden' name = 'important' value ='0' />
                <input type = 'checkbox' name = 'important' value = '1' />
            </div>

        <input type = 'submit' />

</html>

<?php require_once ('includes/footer.php'); ?>



<!-- <!DOCTYPE html> // mula rito ang original na html code bago mag connect sa sql
<html>
    <head>
        <title>Notes App</title>
        <link rel = "stylesheet" href = "styles/style.css">
    </head>
    <header>
            Notes App
    </header>

    <div class = "titleDiv">
            <div class = "backlink"><a class ="nav-link" href = "index.php"></div>
            <div class = "head"> New note </div>
    </div>
    <form action = 'new.php' method = 'post'>

            <span class = 'label' > Title </span>
            <input type = 'text' name ='title'/>

            <span class = 'label'> Content </span>
            <textarea name = 'content'></textarea>

            <div class = 'chkgroup'>
                <span class ='label-in' >Important</span>
                <input type = 'hidden' name = 'important' value ='0' />
                <input type = 'checkbox' name = 'important' value = '1' />
            </div>

        <input type = 'submit' />

</html> -->


