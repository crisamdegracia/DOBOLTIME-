<?php  
$output = '';  
$video_id = '';  
sleep(1);  
$connect = mysqli_connect("localhost", "root", "", "testing");  
$sql = "SELECT * FROM testing WHERE id > ".$_POST['last_video_id']." LIMIT 2";  
$result = mysqli_query($connect, $sql);  


if(mysqli_num_rows($result) > 0)  
{  
     while($row = mysqli_fetch_array($result))  
     {  
          $video_id = $row["id"];  
          $output .= ' 
               <tbody>  
               <tr>  
                    <td>'.$row["vid_title"].'</td>  
               </tr></tbody>';  
     }  
     $output .= '  
               <tbody><tr id="remove_row">  
                    <td><button type="button" name="btn_more" data-vid="'. $video_id .'" id="btn_more" class="btn btn-success form-control">more</button></td>  
               </tr></tbody>  
     ';  
     echo $output;  
}  


?>

