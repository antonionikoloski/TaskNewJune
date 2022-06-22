 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles.css">
     <title>Document</title>
 </head>
 <body>
 <?php
 require_once 'sortingfunctions.php';
$string = file_get_contents("reviews.json");
//Reading as array
$pom=json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $string), true );

error_reporting(E_ALL & ~E_NOTICE);
//Getting values from form
$date=$_POST['Date'];
$rating_string=$_POST['rating_string'];
$rating_number=$_POST['rating_number'];
$text=$_POST['text'];
$pom_new=array();
//creating new array that contains only ratings that we need
foreach($pom as $c=>$key) {
    if($key['rating']>=$rating_number)
    {
        array_push($pom_new,$pom[$c]);
    } 
}


//Reading which function should we use   
if($text=='Yes')
{
   if($rating_string=="Highest")
   {    
       if($date=="Newest First")
       {
           usort($pom_new,'sortByTextNew');
       }
       else
       {
              usort($pom_new,'sortByTextOld');
       }
   }
   else
   {
         if($date=="Newest First")
         {  
            usort($pom_new,'sortingByTextDateLowestRatingNewest');
           
         }
         else
         {
            usort($pom_new,'sortByTextDateLowestRating');
           
         }
   }
}  
else
{
    if($rating_string=='Highest')
    {
         if($date=='Newest First')
         {
            usort($pom_new,'sortByRatingDateNew');
         }
         else
         {
            usort($pom_new,'sortByRatingDateOld');
         }

    } 
    else
    {
        if($date=='Newest First')
        {
           usort($pom_new,'sortByRatingDateOld');
           $pom_new=array_reverse($pom_new);
        }
        else
        {
           usort($pom_new,'sortByRatingDateNew');
           $pom_new=array_reverse($pom_new);
        }

    }

}





$temp = "<table>";
$temp .= "<tr><th>Id</th>";
$temp .= "<th>Rating</th>";
$temp .= "<th>Date</th>";
$temp .= "<th>ReviewText</th></tr>";
for($i = 0; $i < sizeof($pom_new); $i++)
{
$temp .= "<tr>";
$temp .= "<td>" . $pom_new[$i]["id"] . "</td>";
$temp .= "<td>" . $pom_new[$i]["rating"] . "</td>";
$temp .= "<td>" . $pom_new[$i]["reviewCreatedOnDate"] . "</td>";
$temp .= "<td>" . $pom_new[$i]["reviewText"] . "</td>";
$temp .= "</tr>";
}
$temp .= "</table>";
echo $temp;
?>
 </body>
 </html>