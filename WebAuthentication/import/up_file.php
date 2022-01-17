<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml">  <head > 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

<link href="/style.css" rel="stylesheet" type="text/css" /> 

<title>Upload File XML</title> 

</head> 

<body> 

        <form enctype="multipart/form-data" action="addDB.php" method="post"> 
              <input type="hidden" name="MAX_FILE_SIZE" value="2000000"/> 
              <table width="400"> 
              <tr> 
             <td><strong>File XML</strong>:</td> 
              <td><input type="file" name="file" /></td> 
             <td><input type="submit" value="Tải lên" /></td> 
              </tr> 
             </table>
         </form>   
</body> 

</html>