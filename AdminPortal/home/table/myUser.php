<?php
include 'database.php';
class myUser
{
	private $conn;
	public function __construct()
	{
		new Database();
		$this->conn=Database::getConnect();
	}
	public function insert($tablenumber,$table_cost,$number_of_seats)
	{
		$status=FALSE;
		if((!empty($tablenumber))&&(!empty($table_cost))&&(!empty($number_of_seats)))
		{
			$sql = "INSERT INTO res_table (table_number,table_cost,number_of_seats) VALUES ('$tablenumber', '$table_cost', '$number_of_seats')";
			$this->conn->query($sql);
			$status=TRUE;
		}
		else
		{
			echo "No data to insert.";
			$status=FALSE;
		}
		return $status;
	}
	public function read($userId=FALSE)
	{
		$myresult=array();
		if(!empty($userId))
		{
			$sql = "SELECT * FROM res_table WHERE table_number='$userId' ";
			$result = $this->conn->query($sql);
			$myresult=$result->fetch_assoc();
		}
		else
		{
			$sql = "SELECT * FROM res_table";
			$result = $this->conn->query($sql);
			$myresult=$result->fetch_all(MYSQLI_ASSOC);
		}
		return $myresult;		
	}
	public function update($userId,$update_arr) 
	{
		$status=FALSE;
		if((!empty($userId))&&(!empty($update_arr)))
		{
			foreach($update_arr as $key=>$value)
			{
				if($key==='userid' || $key==='submit')
				{
					continue;
				}
					$sql = "UPDATE res_table SET $key='$value' WHERE table_number='$userId'";
					$this->conn->query($sql);
					$status = TRUE;
				
			}
		}		
		return $status;
	}
	public function remove($userId=FALSE)
	{
		$status=FALSE;
		if(!empty($userId))
		{
			$sql = "DELETE FROM user_detail WHERE userid=".$userId;
			$this->conn->query($sql);
			$status=TRUE;
		}
		else
		{
			$sql = "DELETE FROM user_detail";
			$this->conn->query($sql);
			$status=TRUE;
		}
		return $status;
	}
}
#creating object of the orm entity class
#$obj=new user();

#CREATE
/*$status=$obj->insert("Test","Kumar","tesla@tes.com");
echo "<pre>";
print_r($status);
echo "</pre>";*/

#READ
//read single record
/*$res_arr=$obj->read(2);
echo "<pre>";
print_r($res_arr);
echo "</pre>";*/
//read all records
/*$res_arr=$obj->read();
echo "<pre>";
print_r($res_arr);
echo "</pre>";*/

#UPDATE
//update single column
/*$status=$obj->update(1,["email"=>"pranesh@gmail.com"]);
echo "<pre>";
print_r($status);
echo "</pre>";*/
//update multiple column
/*$status=$obj->update(2,["email"=>"rohit@gmail.com","lastname"=>"Birla"]);
echo "<pre>";
print_r($status);
echo "</pre>";*/

#DELETE
//delete single record
/*$status=$obj->remove(1);
echo "<pre>";
print_r($status);
echo "</pre>";*/
//delete all record
/*$status=$obj->remove();
echo "<pre>";
print_r($status);
echo "</pre>";*/
?>