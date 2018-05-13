<?php     
    // try {
    //     $filename="abc.php";
    //     if (!file_exists($filename)){
    //         throw new Exception("err:檔案不存在"); 
    //     } 
    // }catch (Exception $e) { 
    //     echo $e->getMessage(); //getCode(),getLine,...
    //     exit();
    // } 
    // echo "程式執行中";
    //_______________________________________________
    class myFileNotExist extends Exception{
        function __construct($f){
             echo "err : file ".$f." 不存在!!";
        }
   }
   class myEmptyFile extends Exception{
         function __construct($f){
             echo "err : file ".$f." 是空檔案!!";
         }
   }
   function checkfile($filename){
        try {
            if (!file_exists($filename)){
               throw new myFileNotExist($filename); 
            } 
            if (filesize("empty.txt")==0) {
               throw new myEmptyFile($filename);
            }
        } catch (myFileNotExist $e) { 
            echo $e->getMessage(); 
        } catch (myEmptyFile $e) { 
            echo $e->getMessage(); 
        }
    }
    echo "<p>test abc.txt 此檔案應該不存在 <br>";
    checkfile("abc.txt");
    echo "<p>test empty.txt 此檔案應該存在, 但為空檔案 <br>";
    checkfile("empty.txt"); 
?>