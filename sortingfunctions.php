<?php
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
//tuka
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