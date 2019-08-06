<?php
error_reporting(0);
class Connection
{
	function Connection()
	{
		$link = mysql_connect('localhost','root');
		if(!$link)
		{
			$res=die('Could not connect:' . mysql_error() );
			//echo $res; 
		}
		else
		{
			mysql_select_db('hospital',$link);
			$res="Connected";
			//echo $res; 
		}
	}	
	function qryInserted($qry)
	{
		//echo $qry;
		$result = mysql_query($qry);
		if($result)
		{
			//echo 'row Inserted';
			return $result;
		}		
		else
		{
			//echo 'row not Inserted';
		}
		
	}
	function viewPage($qry)
	{
		$viewResult = mysql_query($qry);
		while($row=mysql_fetch_array($viewResult))
		{
			$returnvalue[] = $row;
		}
		return $returnvalue;
	}
	function checkLogin($qry)
	{
		$checkLog = mysql_query($qry);
		$row = mysql_fetch_row($checkLog);
		return $row;	
	}
}
?>