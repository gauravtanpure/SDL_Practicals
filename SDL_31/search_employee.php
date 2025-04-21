<!DOCTYPE html>
<html>
<head>
  <title>Search Employee Name</title>
  <style>
    body { font-family: Arial; padding: 20px; }
    input[type="text"] { padding: 5px; width: 200px; }
    button { padding: 5px 10px; }
    .result { margin-top: 20px; font-weight: bold; }
  </style>
</head>
<body>

  <h2>Employee Search</h2>

  <form method="post">
    Enter Employee Name: <input type="text" name="searchName" required>
    <button type="submit">Search</button>
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $employees = [
        "Amit", "Suresh", "Priya", "Ravi", "Neha",
        "Karan", "Divya", "Nisha", "Rahul", "Sneha",
        "Sunil", "Pooja", "Vikas", "Meena", "Rajesh",
        "Komal", "Anil", "Swati", "Deepak", "Alok"
      ];

      $search = strtolower(trim($_POST["searchName"]));
      $found = false;

      foreach ($employees as $emp) {
        if (strtolower($emp) == $search) {
          $found = true;
          break;
        }
      }

      echo "<div class='result'>";
      echo $found ? "✅ <b>$search</b> found in employee list." : "❌ <b>$search</b> not found.";
      echo "</div>";
    }
  ?>

</body>
</html>
