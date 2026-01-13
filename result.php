<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Result Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* A4 Print Logic */
        @media print {
            @page {
                size: A4;
                margin: 0; /* Let the container handle padding */
            }

            html, body {
                width: 210mm;
                height: 297mm;
                background: white;
            }

            .no-print { display: none !important; }

            .print-container { 
                width: 210mm;
                min-height: 297mm;
                margin: 0 !important; 
                padding: 20mm !important; /* Standard margin for documents */
                box-shadow: none !important; 
                border: none !important;
                border-radius: 0 !important;
            }

            /* Ensure background colors and images print */
            body {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }

        /* Screen spacing to preview A4 center */
        @media screen {
            .print-container {
                width: 210mm;
                min-height: 297mm;
            }
        }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-900">

<?php include("db.php"); ?>

    <div class="no-print max-w-4xl mx-auto mt-10 p-6 bg-white rounded-xl shadow-md border border-slate-200">
        <h2 class="text-xl font-bold mb-4 text-slate-800 border-b pb-2">Search Examination Result</h2>
        <form class="flex flex-wrap gap-4" method="GET">
            <div class="flex-1 min-w-[200px]">
                <label class="block text-sm font-semibold text-slate-600 mb-1">Roll Number</label>
                <input type="text" placeholder="Enter Roll No." class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition" name="roll_no">
            </div>
            <div class="flex items-end">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-2 rounded-lg font-semibold shadow-sm transition">
                    Get Result
                </button>
            </div>
        </form>
    </div>

    <?php
    if(isset($_GET['roll_no'])){
        $roll_no = $_GET['roll_no'];
        $student_sql = "SELECT * FROM students WHERE roll_no='$roll_no'";
        $student_res = mysqli_query($conn, $student_sql);
        $student = mysqli_fetch_assoc($student_res);

        if($student){
            $result_sql = "SELECT r.*, s.course_name, s.course_code 
                           FROM results r 
                           LEFT JOIN course s ON r.course_id = s.course_id 
                           WHERE r.student_id = '{$student['student_id']}' 
                           ORDER BY r.semester ASC";
            $result_res = mysqli_query($conn, $result_sql);

            $stmt = $conn->prepare("SELECT SUM(total) AS total_tot, SUM(marks) as total_marks FROM results WHERE student_id = ?");
            $stmt->bind_param("i", $student['student_id']);
            $stmt->execute();
            $summary = $stmt->get_result()->fetch_assoc();
            
            $total = $summary['total_tot'] ?? 0;
            $marks = $summary['total_marks'] ?? 0;
    ?>

    <div id="result-sheet" class="print-container mx-auto my-10 bg-white p-8 md:p-12 shadow-2xl rounded-sm border-t-8 border-blue-900 relative">
        
        <div class="absolute inset-0 flex items-center justify-center opacity-[0.03] pointer-events-none">
            <h1 class="text-9xl font-bold -rotate-45 uppercase">Official</h1>
        </div>

        <div class="flex justify-between items-start border-b-2 border-slate-100 mb-4 pb-4">
            <div>
                <h1 class="text-2xl font-black text-blue-900 uppercase tracking-tight">Learn Institute of Technology Service</h1>
                <p class="text-slate-500 text-sm font-medium">Examination Result</p>
            </div>
            <div class="text-right">
                <div class="inline-block p-2 border-2 border-slate-200 rounded-md">
                    <img src="./image/Logo.png" alt="Logo" class="h-16 w-16">
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-y-4 mb-8 text-sm">
            <div>
                <span class="text-slate-500 uppercase text-xs font-bold block">Student Name</span>
                <span class="text-lg font-semibold"><?= ucfirst(strtolower($student['name'])); ?></span>
            </div>
            <div class="text-right">
                <span class="text-slate-500 uppercase text-xs font-bold block">Roll Number</span>
                <span class="text-lg font-semibold"><?= $student['roll_no']; ?></span>
            </div>
        </div>

        <table class="w-full text-left border-collapse mb-8">
            <thead>
                <tr class="bg-slate-100 border-y-2 border-slate-200">
                    <th class="py-3 px-4 font-bold text-slate-700 uppercase text-xs">Subject Code</th>
                    <th class="py-3 px-4 font-bold text-slate-700 uppercase text-xs">Subject Name</th>
                    <th class="py-3 px-4 font-bold text-slate-700 uppercase text-xs text-center">Marks</th>
                    <th class="py-3 px-4 font-bold text-slate-700 uppercase text-xs text-right">Total</th>
                </tr>
            </thead>
            <tbody class="text-slate-700">
                <?php while($row = mysqli_fetch_assoc($result_res)){ ?>
                <tr class="border-b border-slate-100">
                    <td class="py-4 px-4 font-mono text-sm"><?=$row['course_code'];?></td>
                    <td class="py-4 px-4 font-medium text-slate-900"><?= $row['course_name']; ?></td>
                    <td class="py-4 px-4 text-center"><?= $row['marks']; ?></td>
                    <td class="py-4 px-4 text-right font-bold text-green-600"><?= $row['total']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table> 

        <div class='flex justify-between items-center bg-slate-50 p-6 rounded-lg border border-slate-200'>
            <div>
                <span class='text-slate-500 text-xs font-bold uppercase block'>Result Status</span>
                <span class='text-xl font-black text-green-700 uppercase'>PASSED</span>
            </div>
            <div class='flex gap-8 text-right'>
                <div>
                    <span class='text-slate-500 text-xs font-bold uppercase block'>Total Marks</span>
                    <span class='text-xl font-bold'><?= $marks. ' / '.$total ?></span>
                </div>
            </div>
        </div>

        <div class='mt-12 flex justify-between items-end'>
            <div class='text-[10px] text-slate-400 max-w-[250px]'>
                * This is a computer-generated document. No signature is required. Verify this result online via the QR code or our official portal.
            </div>
            <div class='text-center'>
                <div class='h-1 bg-slate-800 w-32 mb-1 mx-auto'></div>
                <span class='text-xs font-bold text-slate-700 uppercase'>Controller of Exams</span>
            </div>
        </div>
    </div>

    <div class='no-print max-w-4xl mx-auto mb-20 flex justify-center gap-4'>
        <button onclick='window.print()' class='flex items-center gap-2 bg-slate-800 hover:bg-slate-900 text-white px-6 py-3 rounded-full font-bold shadow-lg transition'>
            <i class="bi bi-printer"></i> Print or Save as PDF
        </button>
    </div>

    <?php
        } else {
            echo "<div class='container mt-5'><div class='alert alert-danger text-center'>No Result found.</div></div>";
        }
    }
    ?> 

</body>
</html>