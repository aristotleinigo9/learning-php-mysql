<?php
    require_once('includes/db.php');

    $sql = "SELECT * FROM notes";
    $notes = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Submitted notes</title>
        <link rel ='stylesheet' href = 'styles/style.css'>
    </head>
    <body>
        <header> 
            Submitted notes
        </header>

        <div>
            <div> 
                <a class = 'nav-link' href = 'new.php'> Magtala ng note </a>
            </div>
                <?php
                    while ($note = mysqli_fetch_assoc($notes)){
                ?>
    
                <div class = 'note'>
                    <div class = 'titleContainer'>
                        <span class ='nt-title'<?php echo $note['title'];?>></span>
                        <div class = 'nt-links'>
                            <a class = 'nt-link' href = <?php echo 'edit.php?id='.$note['id'];?>> Edit Note </a>
                            <a class = 'nt-link' href = <?php echo 'delete.php?id=' .$note['id'];?>> [X] Delete Note </a>
                        </div>
                    </div>

                    <div class = 'nt-content'><?php if($note['important'])
                        echo "<span class = 'imp'> IMPORTANT </span>"; 
                     ?> <?php echo $note['content'];?></div>
                </div>
                
                <?php }
                mysqli_free_result($notes);
                ?>
                

        </div>
    </body>
</html> 

<?php require_once ('includes/footer.php'); ?>

<!-- 
<!DOCTYPE html>
<html>
    <head>
        <title> Notes App </title>
        <link rel ='stylesheet' href = 'styles/style.css'>
    </head>
    <body>
        <header> 
            Note taking app
        </header>

        <div>
            <div> 
                <a class = 'nav-link' href = 'new.php'> Add a note </a>
            </div>
                <div class = 'note'>
                    <div class = 'titleContainer'>
                        <span class ='nt-title'></span>
                        <div class = 'nt-links'>
                            <a class = 'nt-link' href ='#'> Edit Note </a>
                            <a class = 'nt-link' href = '#'> [X] Delete Note </a>
                        </div>
                    </div>

                    <div class = 'nt-content'></div>
                </div>
        </div>
    </body>
</html> -->