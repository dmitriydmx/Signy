<!DOCTYPE html>
<html lang="en">
<head>
    <? require_once('block/head.php');?>
</head>
<body>
    <?require_once('block/topMenu.php');?> 
    <?require_once('formReg.php');?>
    <?require_once('formEntry.php');?> 

        <?$sql = 'SELECT * FROM textforblog' ;
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result); 
        ?>
    <ul class="breadcrumb">
        <li><a href="index.php">Signy</a></li>
        <li><a href="blog.php">Блог</a></li>
        <li><a href="#"><?echo $row['title'];?></a></li>
    </ul> 
        <?     
        $sql_textForBlog = 'SELECT * FROM textforblog WHERE id ='.$_GET['idTextForBlog'];
        $result_textForBlog = mysqli_query($link,$sql_textForBlog);
        $date = date("d.m.y");
        
        while($row = mysqli_fetch_array($result_textForBlog)){
            printf('
            <div class="showCartBlog">
                    <h1>%s</h1>
                    %s
                    <p class="column">%s</p>
                    <img src="%s" >
            </div>'.$row['id'],$row["title"],$date,$row["text"],$row["img"]);
        }  
        ?>
    <?require_once('block/subscription.php');?> 
    <?require_once('block/footer.php');?> 
</body>
</html>
