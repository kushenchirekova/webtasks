<a href="task2.php?category=sport">Sport news</a> | <a href="task2.php?category=politics">Politic news</a><br/><br/>
<a href="task2.php?category=sport&format=json">Sport news (JSON)</a> | <a href="task2.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
   $news =[
     "sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],
     "politics"=>["Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"]
          ];
   $category = null;
   $format = null;
   if (isset($_GET['category']) && isset($_GET['format']))
     {
        $category = $_GET['category'];
        echo json_encode($news[$category]);
     }
   else if(isset($_GET['category']))
     {
        $category = $_GET['category'];
        foreach ($news[$category] as $item)
          {
             echo "<h3>$item</h3>";
             echo '<div style = "border-bottom: 2px solid grey;"></div>';
          }
     }
?>
