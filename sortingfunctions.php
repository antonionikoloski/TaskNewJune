<?php
//Sorting Text Date Newest Rating
function sortByTextNew($a, $b) {
      
    if($b['reviewText']>$a['reviewText'])
    {
       return $b['reviewText']>$a['reviewText'];
    }
    else if($a['reviewText']==$b['reviewText'])
    {
       if ( $b['rating']>$a['rating'] )
       {
         return $b['rating']>$a['rating'];   
       }
       else if($b['rating']==$a['rating'])
       {
           return  $a['reviewCreatedOnDate']>$b['reviewCreatedOnDate'];
       }
    }
 
}
//Sorting Text Rating Date Oldest
function sortByTextOld($a, $b) {
      
    if($b['reviewText']>$a['reviewText'])
    {
       return $b['reviewText']>$a['reviewText'];
    }
    else if($a['reviewText']==$b['reviewText'])
    {
       if ( $b['rating']>$a['rating'] )
       {
         return $b['rating']>$a['rating'];   
       }
       else if($b['rating']==$a['rating'])
       {
           return  $b['reviewCreatedOnDate']>$a['reviewCreatedOnDate'];
       }
    }
 
}
//Lowest Rating with Text and Newest date
function sortingByTextDateLowestRatingNewest($a, $b) {
      
        if(strlen($a['reviewText'])<strlen($b['reviewText']))
        {
        return strlen($a['reviewText'])<strlen($b['reviewText']);
        }
        else if(strlen($a['reviewText'])==strlen($b['reviewText']))
        {
             if($b['rating']<$a['rating'])
             {
                return $b['rating']<$a['rating'];
             }
             else if($b['rating']==$a['rating'])
             {
                return  $b['reviewCreatedOnDate']<$a['reviewCreatedOnDate'];
             }
        }
    
}
//SOrting with text lowest rating oldest date
function sortByTextDateLowestRating($a, $b) {
      
    if(strlen($a['reviewText'])<strlen($b['reviewText']))
    {
    return strlen($a['reviewText'])<strlen($b['reviewText']);
    }
    else if(strlen($a['reviewText'])==strlen($b['reviewText']))
    {
         if($b['rating']<$a['rating'])
         {
            return $b['rating']<$a['rating'];
         }
         else if($b['rating']==$a['rating'])
         {
            return  $b['reviewCreatedOnDate']>$a['reviewCreatedOnDate'];
         }
    }

}


//Sorting only by rating and date
function sortByRatingDateNew($a, $b) {
    
    if ( $b['rating']>$a['rating'] )
    {
      return $b['rating']>$a['rating'];   
    }
    else if($b['rating']==$a['rating'])
    {
        return  $a['reviewCreatedOnDate']>$b['reviewCreatedOnDate'];
    }
 }
 //Rating date old
 function sortByRatingDateOld($a, $b) {
    
    if ( $b['rating']>$a['rating'] )
    {
      return $b['rating']>$a['rating'];   
    }
    else if($b['rating']==$a['rating'])
    {
        return  $a['reviewCreatedOnDate']<$b['reviewCreatedOnDate'];
    }
 }