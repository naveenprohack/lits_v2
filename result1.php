



<!DOCTYPE html>
<html lang="en">
  <head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<meta property="og:title" content="Learn Coding Online | Litsedu">

   <link href="css/style.css" rel="stylesheet">

   </style>
</head>
<body>







<?php
// DB connection
$db_host = "localhost:3306";
$db_user = "logesh";
$db_password = "Logesh@2001";
$db_name = "stu_details";


// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Connection check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get roll number
$roll_no = trim($_POST['roll_no'] ?? '');

if (empty($roll_no)) {
    die("Roll number is required.");
}

// Fetch student info
$student_sql = "SELECT * FROM students WHERE roll_no = ?";
$stmt = $conn->prepare($student_sql);
$stmt->bind_param("s", $roll_no);
$stmt->execute();
$student_result = $stmt->get_result();
$student = $student_result->fetch_assoc();

if (!$student) {
    echo "<h3 style='color:red; text-align:center;'>No student found with roll number: $roll_no</h3>";
    echo "<div style='text-align:center;'><a href='result.php'>Go Back</a></div>";
    exit;
}

// Fetch subject-wise marks
$marks_sql = "SELECT subject, marks FROM marks WHERE student_id = ?";
$stmt = $conn->prepare($marks_sql);
$stmt->bind_param("i", $student['id']);
$stmt->execute();
$marks_result = $stmt->get_result();

// Calculate total and percentage
$total = 0;
$subject_count = 0;
$subjects = [];

while ($row = $marks_result->fetch_assoc()) {
    $subjects[] = $row;
    $total += $row['marks'];
    $subject_count++;
}

$percentage = $subject_count > 0 ? round($total / $subject_count, 2) : 0;
?>
<?php 


  // Header Include from mainInclude 
  include('./mainInclude/header.php'); 
  
   // Header Include from mainInclude 
  include('./floatingwi.php'); 



    
  ?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Result</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow p-4" id="printArea">
           <img src="./image/topup1.png"  class="d-block w-100 img-fluid responsive-img" alt="learn institute of technology service" >
     
      <h3 class="text-success text-center mb-4">Result for Roll No: <?= htmlspecialchars($roll_no) ?></h3>
      <p><strong>Name:</strong> <?= htmlspecialchars($student['name']) ?></p>
      <table class="table table-bordered mt-3">
        <thead>
          <tr>
            <th>Subject</th>
            <th>Marks</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($subjects as $subject): ?>
            <tr>
              <td><?= htmlspecialchars($subject['subject']) ?></td>
              <td><?= $subject['marks'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th>Total</th>
            <th><?= $total ?></th>
          </tr>
          <tr>
            <th>Percentage</th>
            <th><?= $total ?>%</th>
          </tr>
        </tfoot>
      </table>
      <div class="text-center mt-3">
  <button onclick="printResult()" class="btn btn-success">Print Result</button>
  <a href="result.php" class="btn btn-secondary ms-2">Check Another</a>
</div>

    </div>
  </div>
  
  
  
  
 
  <script>
  function printResult() {
    let printContents = document.getElementById("printArea").innerHTML;
    let originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
    window.location.reload(); // reload to restore JS/CSS
  }
</script>

</body>
</html>
    
    
<?php
$conn->close();
?>

             <?php 
    // Footer Include from mainInclude 
    include('./mainInclude/footer.php'); 
    
  ?> 
