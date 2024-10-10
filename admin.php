<?php
$user_email = $_COOKIE['user'];

if ($user_email == NULL || $user_email != "tingwei@gmail.com"){
    header("Location: Login_page.php");
    exit();
}
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_folder/admin.css">
    <link rel="stylesheet" href="CSS_folder/Header_style.css">
    <title>Admin Page</title>
    <style>
        body {
            background-color: #1D1D1D;
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }
        table {
            margin-left:auto;
            margin-right:auto;
            margin-top: 10px;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            max-width: 30px; 
            word-wrap: break-word; 
        }
        th {
            background-color: #4a4a4a;
        }
        td:nth-child(2) {
            max-width: 90px; 
            word-wrap: break-word; 
        }
        #filters button {
            margin-right: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
        }
        #filters button:hover {
            background-color: #555;
        }
        #filters button.active {
            background-color: #007bff;
        }
        .filter-container {
            margin-bottom: 10px;
        }
        .filter-container label {
            margin-right: 10px;
            cursor: pointer;
        }
        .filter-container label input[type="checkbox"] {
            display: none;
        }
        .filter-container label input[type="checkbox"] + span {
            position: relative;
            display: inline-block;
            width: 16px;
            height: 16px;
            background-color: #333;
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 4px;
        }
        .filter-container label input[type="checkbox"]:checked + span:after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 8px;
            height: 8px;
            background-color: #007bff;
            border-radius: 50%;
            display: block;
        }
    </style>
</head>
<body>
    <?php include('Admin_header.php')?>
    <div class="container">
        <h2>Review</h2>
        <div id="filters" class="filter-container">
            <button onclick="filter('latest')">Latest</button>
            <button onclick="filter('oldest')">Oldest</button>
            <label><input type="checkbox" class="filter" value="Exercise Issue"> <span></span> Exercise Issue</label>
            <label><input type="checkbox" class="filter" value="Exam Feedback"> <span></span> Exam Feedback</label>
        </div>
        <table id="feedbackTable">
            <tr>
                <th>Received Date</th>
                <th>Feedback</th>
                <th>User Email</th>
                <th>Feedback Type</th>
            </tr>
            <?php
            include('conn.php');

            // Fetch feedback data from the database
            $sql = "SELECT * FROM feedback";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['R_date'] . "</td>";
                    echo "<td>" . $row['Feedback'] . "</td>";
                    echo "<td>" . $row['user_email'] . "</td>";
                    echo "<td>" . $row['R_type'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No feedback found</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </div>

    <script>
        var filters = document.querySelectorAll('.filter');

        filters.forEach(function(filter) {
        // When a filter option changes, call the filterTable function
            filter.addEventListener('change', function() {
                filterTable();
            });
        });

        function filter(type) {
             // Variables x and y used to hold references to table cells or elements within each row.
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("feedbackTable");
            switching = true;
            // Loop until no more switching is needed
            while (switching) {
                switching = false;
                rows = table.rows;

                for (i = 1; i < (rows.length - 1); i++) { // Loop through each row (excluding the header row)
                    shouldSwitch = false;

                    x = rows[i].getElementsByTagName("TD")[0]; //Received Date

                    y = rows[i + 1].getElementsByTagName("TD")[0]; //Received Date
                    if (type === 'latest') { 
    // Compare dates based on the 'type' parameter (latest or oldest)
                        if (new Date(x.innerHTML) < new Date(y.innerHTML)) {
                            shouldSwitch = true;
                            break;
                        }
                    } else if (type === 'oldest') {
                        if (new Date(x.innerHTML) > new Date(y.innerHTML)) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                // If a switch is needed, perform the switch in the table
                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
        }

        function filterTable() {
            var table, rows, i, x, shouldShow, filterValues = [];
            table = document.getElementById("feedbackTable");
            rows = table.getElementsByTagName("tr");

            filters.forEach(function(filter) { // Iterate over each filter checkbox
                if (filter.checked) {
                    filterValues.push(filter.value); // If checkbox is checked, add its value (feedback type) to filterValues array
                }
            });
            for (i = 1; i < rows.length; i++) {
                shouldShow = true;
                x = rows[i].getElementsByTagName("td")[3]; // Index 3 for getting the cell containing the feedback typeFeedback Type
                if (filterValues.length > 0) { // Check if any filter is selected
                    if (!filterValues.includes(x.innerHTML.trim())) {  // trim for removing all blank space 
                        shouldShow = false;
                    }
                } 
                // Show or hide the row based on whether it should be displayed
                if (shouldShow) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }
    </script>
</body>
</html>
