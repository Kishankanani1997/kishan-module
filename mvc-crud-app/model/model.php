<?php
class model 
{
    public $connection="";
    public function __construct()
    {
        // database connection
        try
        {
            $this->connection=new mysqli("localhost","root","","mvcappdata");
            //echo "Connection success";
        }
        catch(Exceptions $e)
        {
            die(mysqli_error($this->connection,$e));
        }
    }

    // here we create a member function to select all data
    public function selectallthedata($table)
    {
        $select="select * from $table";
        $execute=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($execute))
        {
            $arr[]=$fetch;
        }
        return $arr;
    } 
}
?>