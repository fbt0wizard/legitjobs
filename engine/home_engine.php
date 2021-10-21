<?php

include "db_conn.php";
$db=$conn;
// fetch query
function fetch_data(){
 global $db;
  $query="SELECT * from job_post ORDER BY id DESC";
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
$fetchData= fetch_data();
show_data($fetchData);

function show_data($fetchData){
 if(count($fetchData)>0){
      $sn=1;
      foreach($fetchData as $data){ 

  echo "<div class='posted-job'>
  <h3 class='heading'><a href=''>".$data['heading']."</a></h3>
 
  <p class='location'>Location: ".$data['location']."</p>
  <p class='date'>Posted on ".$data['date_posted']."</p>
      <br>
  <p class='company-name'> ".$data['company_name']."</p>
  <p class='company-details'>".substr($data['company_details'], 0, 200)."<a href='job_details.php'> Read more>>></a></p>
 </div>";
    
  $sn++; 
     }
}else{
     
  echo "class='location'>No Data Found</p>"; 
}
//   echo "</table>";
}