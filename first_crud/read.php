<?php
    include '../db.php';
    $sql = "select * from clubs";
    $result = $conn->query($sql);
    
        
  
    while($row = $result->fetch_assoc()){
        
        if(isset($_GET['id']))$idt=$_GET['id'];
        else $idt=null;

        if ($row['id'] == $idt) {
            echo '<form  action="update.php" method="POST">';
            echo '<td><input type="text"  name="name" value="'.$row['name'].'"></td>';
            echo '<td><input type="number"  name="members" value="'.$row['members'].'"></td>';
            echo '<td><button type="submit" >Save</button></td>';
            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '</form>';
          } else {
            echo "<tr>";
            echo "<td>". $row['name']."</td>";
            echo "<td>". $row['members']."</td>";
            echo '<td> <a href="index.php?id='.$row['id'].'"role="button">update</a></td>';
            echo '<td> <a href="delete.php?id='.$row['id'].'"role="button">delete</a></td>';
            echo "</tr>";
        }
    }

    $conn->close();
?>