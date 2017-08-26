<center>
 

 
 

<form action="" method="post" enctype="multipart/form-data">
      

      <table width='512' border='0'>
 <tr>
          <td width='123' style='text-align:right;'><div align='left'><b>Nº Da portaria:</b></div></td>
        	<td width='223' style='text-align:left;'><div align='left'>
        	  <input name='n_port' type='text' size='30' maxlength='30'>
      	  </div></td>
      </tr>
      <tr>
        
    		<td style='text-align:right;'><div align='left'><b> Portaria :</b></div></td>
     
    		<td style=' height:20; text-align:center;'><label for='file'></label>
   		      <div align='left'>
   		        <input type='file' name='file' id='file' />
   		        <input type='hidden' name='MAX_FILE_SIZE' value='19264666666' />
            </div></td>
    
    	</tr>
        <tr>
          <td width='123' style='text-align:right;'><div align='left'><b></b></div></td>
        	<td width='223' style='text-align:left;'><input type="submit" name="enviar" id="button" value="Enviar" /></td>
      </tr>
</table>

    </form>

</center>
<?php
require 'dados.php';



session_name('portaria');							
 session_start();
echo  $_SESSION["login"];

$sqll="SELECT * from admin where  Login='{$_SESSION['login']}'";
$query=mysql_query($sqll) or die(mysql_error);
$result=mysql_fetch_array($query);
$id= $result["Id"];


if(isset($_POST['enviar'])){
 
if(is_uploaded_file($_FILES['file']['tmp_name'])){

//$maxsize=$_POST['MAX_FILE_SIZE']; 
$n_port= $_POST['n_port'];             
        $size=@$_FILES['file']['size'];
        // getting the image info..
        $imgdetails= getimagesize($_FILES['file']['tmp_name']);
        $mime_type = $imgdetails['mime']; 
    $filename=$_FILES['file']['name'];  
    $imgData =addslashes (file_get_contents($_FILES['file']['tmp_name']));
  
 $sql = "UPDATE admin SET  n_port= '$n_port',name_port='$filename', portaria='$imgData',type_port='$mime_type', size_port='$size' WHERE Id = '$id'";
 
       mysql_query($sql) or die(mysql_error());
	   	
		header('Location:http://localhost/sistema/Admin/Administrador.php?pagina=1');
	     }
	   
	   }

?>
