# PHPCRUD
Basic CRUD
I use mysqli real escape string for security purpose.
What is mysqli real escape string function in PHP? 
    -> We use this build in function to escape all special characters for use in our SQL query. 
    
   Example.
     $Heroe_Name = mysqli_real_escape_string($connect, $_REQUEST['character_name'])
     
  The $Heroe_Name will holds the value that will be return back by the function (mysqli real escape string).
  We use this function first before we insert something in our query. 
  
  mysqli real escape string here
  query here.   -> $sql = "UPDATE Table name (fields) etc.
  
  Oh! I almost forgot. mysqli real escape string accept 2 parameters the connection and an associative array which is Request, by default (this one hold POST GET and Cookies)
   
