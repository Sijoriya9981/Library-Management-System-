<?php

function get_user_count(){
$con  = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"LMS");

$user_count="";
$query = "SELECT COUNT(*)  AS user_count from user";

$query_run = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($query_run))
{
    $user_count =$row['user_count'];
}
return($user_count);


}




function get_books_count(){
    $con  = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($con,"LMS");
    
    $book_count="";
    $query = "SELECT COUNT(*)  AS book_count from book";
    
    $query_run = mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
        $book_count =$row['book_count'];
    }
    return($book_count);
    
    
    }




 function get_category_count(){
        $con  = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($con,"LMS");
        
        $category_count="";
        $query = "SELECT COUNT(*)  AS category_count from category";
        
        $query_run = mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($query_run))
        {
            $category_count =$row['category_count'];
        }
        return($category_count);
        
 }



function get_author_count(){
            $con  = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($con,"LMS");
            
            $author_count="";
            $query = "SELECT COUNT(*)  AS author_count from author";
            
            $query_run = mysqli_query($con,$query);
            while($row = mysqli_fetch_assoc($query_run))
            {
                $author_count =$row['author_count'];
            }
            return($author_count);
            
            
 }


 function get_issuebook_count(){
                $con  = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($con,"LMS");
                
                $issuebook_count="";
                $query = "SELECT COUNT(*)  AS issuebook_count from issuebook";
                
                $query_run = mysqli_query($con,$query);
                while($row = mysqli_fetch_assoc($query_run))
                {
                    $issuebook_count =$row['issuebook_count'];
                }
                return($issuebook_count);
                
                
 }


?>