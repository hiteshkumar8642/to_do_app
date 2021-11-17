<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .center{
	text-align: center;
	width:100%;
}
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 30px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
<?php
include "dbconnect.php";
$id=$_GET['id'];
$sql = "SELECT Id, Title, Description FROM tasks";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) 
    {
        if ($id == $row["Id"]) 
        { 
            ?>
                
                <head>
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

                
                li a:hover {
                background-color: #111;
                }
                .active {
                background-color: #04AA6D;
                }
                .center-form{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                }   
                

                * {
                    box-sizing: border-box;
                }

                $colorBase1: #f3efe7;
                $colorInputText: #cfcece;



                .section-form {
                width: 37em;
                margin: 3em auto;
                background-color: $colorBase1;
                padding: 2em;

                $headingSize: 1.6em;
                
                .intro {
                    margin-bottom: 2em;
                }
                
                h1 {
                    text-align: center;
                    font-size: $headingSize;
                    margin-bottom: 0.6em;
                }
                
                h2 {
                    text-align: center;
                    font-size: $headingSize / 1.3;
                } 
                }

                input[type=text] {
                height: 45px; 
                }

                input[type=text], textarea {
                width: 40%;
                margin-bottom: 1em;
                font-size: .9em;
                color: $colorInputText;
                font-weight: 300;
                padding: .5em 1em;
                border: none;
                color: #555555;
                font-weight: 300;
                }


                input[type=reset] {
                cursor: pointer;
                margin-left: 155px;
                padding: .5em 2em;
                background: #636363;
                border: none;
                color: #fff;
                font-size: 1em;
                font-weight: 400;
                }
                input[type=submit] {
                cursor: pointer;
                margin-right: 155px;
                padding: .5em 2em;
                background: #636363;
                border: none;
                color: #fff;
                font-size: 1em;
                font-weight: 400;
                }        

                </style>
                </head>
                <body bgcolor=#f3efe7>
                <ul>
                <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="cmptsk.php">Completed Tasks</a></li>
                <li><a href="pentsk.php">Pending Tasks</a></li>
                <li style="float:right"><a class="active" href="addtask1.php">Add New Task</a></li>
                </ul> 
                </ul>

                <div>
                    <center>
                    <h3>Rewrite The Details</h3>


                    <div class=section-form intro1 >  
                    <form name=f  enctype="multipart/form-data"  method=Post action=modify1.php>
                    <h1> Ready to go?</h1>
                    <h2> Get your task started today</h2>
                    <div class="center center-form">
                        <input type='text', value="<?php echo $row['Title'] ?>", placeholder='Title', name='title' required>
                        <textarea placeholder='Description', name='description', rows='10' required><?php echo $row['Description'] ?></textarea>
                    </div>
                    <input type=hidden name=id value=<?php echo $row['Id'] ?>>
                    <input type='submit', value='Submit'>
                    <input type='reset', value='Clear'>

                    </form>
                    </div>
                    <h2><a href="/to_do_app"><div class=center> <button class="btn"><i class="fa fa-home "></i></button></div></a></h2>
                    </center>
                </div>
            <?php
        }
        
    }
}     
?>  