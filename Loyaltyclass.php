<?php


class Loyal{
    
    
    private $server_name="localhost";
    private $user_name="root";
    private $password="";
    private $db_name="loyalty";
    
//    private $conn="false";
    private $mysqli="";
    private $result=array();
   
    public function __construct(){
        
       
          $this->mysqli=new mysqli($this->server_name,$this->user_name,$this->password,$this->db_name);

              return true;
          }
          
        public function insertdata($table,$records=array()){
             $table_columns=implode(',',array_keys($records));
            $table_values=implode("','",$records);
             
              $sql="insert into $table($table_columns) values('$table_values')";
              $result=$this->mysqli->query($sql);
          }
          
          public function selectdata($table,$rows="*",$where=null){
              
            if($where!=null){
                $sql="select $rows from $table where $where";
            }else{
                $sql="select $rows from $table";
                
            }
            $this->sql=$result=$this->mysqli->query($sql);
           
          }
           public function updatedata($table,$records=array(),$id){
        $args = array();

        foreach ($records as $key => $value) {
             $args[]="$key = '$value'"; 
        }

       echo $sql="update $table set " . implode(',', $args)." WHERE $id";
        

        //if($id!=null)
       // {$sql." WHERE id='$id'";
        
       
          
  $result=$this->mysqli->query($sql);
               
         // echo $result = $this->mysqli->query($sql);
        
        }
          public function deletedata($table,$id){
              //$id=$_GET['id'];
              $sql="delete from $table where $id";
              
              
                  $result=$this->mysqli->query($sql);
            
          }
        
    public function __destruct(){
        
        $this->mysqli->close();
    
    }
 
}
//  $obj= new online_exam();
//$obj=insertdata($table,$records);
?>