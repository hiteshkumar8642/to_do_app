

<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}
.active {
  background-color: #04AA6D;
}

th, td {
  border-bottom: 1px solid #ddd;
  padding: 20px;
}
tr:nth-child(even) {background-color: #f2f2f2;}
th {
  background-color: #04AA6D;
  color: white;
}
.center{
	text-align: center;
	width:100%;
}
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 40%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */


</style>
</head>
<body>
 <ul>
  <ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="cmptsk.php">Completed Tasks</a></li>
  <li><a href="pentsk.php">Pending Tasks</a></li>
  <li style="float:right"><a  href="addtask1.php">Add New Task</a></li>
</ul> 
</ul>

	  <h2>Tasks Details</h2>
	  <div style="overflow-x:auto">
		<table width=100% class=mytable >
		<tr>
			<th>Sr. No.</td>
			<th>Title</td>
			<th>Description</td>
			<th>Status</td>
			<th>Edit</td>
			<th>Delete</td>
			<th>Mark As Completed</td>
		</tr>
	  <?php
	  include "dbconnect.php";
	  $sql = "SELECT Id, Title,Status, Description FROM tasks";
	  $result = $con->query($sql);
	  $i=1;
	  
	  if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) 
		  { 
			?>
			<tr>
			  <td><?php echo $i; ?></td>
			  <td><?php echo $row['Title']; ?></td>
			  <td><?php echo $row['Description']; ?></td>  
			  <td><?php
			  if ($row["Status"])
			  { 
			  	echo "Completed"; 
			  }
			  else
			  {
				echo "Incomplete";
			  }
					?></td>  
			  <td><a href="modify.php?id=<?php echo $row['Id']; ?>"><div class=center> <button class="btn"><i class="fa fa-edit "></i></button></div></a></td>
			  <td><a href="delete.php?id=<?php echo $row['Id']; ?>"><div class=center> <button class="btn"><i class="fa fa-trash "></i></button></div></a></td>
			  <td><a href="markcp.php?id=<?php echo $row['Id']; ?>"><div class=center> <button class="btn"><i class="fa fa-check "></i></button></div></a></td>
			</tr>
				
		 	<?php
			$i++;
		  }
	  } else {
		  echo "0 results";
	  }
	  $con->close();
	  ?>
	  </table>
	</div>
  </body>
</html>
