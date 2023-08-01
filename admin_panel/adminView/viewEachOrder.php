<div class="container">
<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>texte</th> 
        </tr>
    </thead>
    <?php
        include_once "../config/dbconnect.php";
        $ID= $_GET['TexteID'];
        //echo $ID;
        $sql="SELECT * from texteSite
        where texteSite.id=$ID";
        
        $result=$conn-> query($sql);
        $count=1;
        if ($result-> num_rows > 0){
            while ($row=$result-> fetch_assoc()) {
               
    ?>
                <tr>
                    <td><?=$row["id"]?></td>
                    <td><?=$row["Texte"]?></td>
                    
                </tr>
    <?php
                $count=$count+1;
            }
        }
        else{
            echo "error";
        }
    ?>
</table>
</div>
