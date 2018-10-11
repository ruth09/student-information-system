<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'login'; // Database Name


$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
$rollno = $_POST['rollno'];
$query = "SELECT * FROM marks where rollno='$rollno'";
    $output = "";

    $result = mysqli_query($conn,$query);
if ($result && mysqli_num_rows($result) > 0)
    {       
	   while ($row = mysqli_fetch_assoc($result)) {
    ?>

<html>
<head>

    <title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
	
        body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
            background: linear-gradient(45deg, rgba(239,255,191,1) 0%, rgba(43,184,255,1) 99%, rgba(43,184,255,1) 100%); 
      font-family: 'Arvo', serif;

		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 40px;
               color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px green;

		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>Internal Assessment Marks</h1>
    <br><br>
	<table class="data-table">
		<caption class="title">Marks of the student</caption>
		<thead>
			<tr>
				<th>ROLL NO</th>
				<th>SUBJECT1</th>
				<th>SUBJECT2</th>
				<th>SUBJECT3</th>
				<th>SUBJECT4</th>
                <th>SUBJECT5</th>
                <th>SUBJECT6</th>
			</tr>
            <tr>
                <td><?php echo $row['rollno']?></td>
                <td><?php echo $row['subject1']?></td>
                <td><?php echo $row['subject2']?></td>
                <td><?php echo $row['subject3']?></td>
                <td><?php echo $row['subject4']?></td>
                <td><?php echo $row['subject5']?></td>
                <td><?php echo $row['subject6']?></td>
            </tr>
            
		</thead>
		
        <?php
        break;
		}
    
    }
     else {
    echo 'Sorry But The Respective Student information was not found in the Database ';
 
     }
    
?>
              
        
	</table>
 
    <br><br><center>
    <form action="mainpage.php" method="post" >
<p><input type="submit"  value="Return home page " /></p></form>
    </center>
    
    </body>
</html>