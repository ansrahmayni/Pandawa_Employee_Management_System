<?php
require '../config.php';

$year = $_GET['year'];

// Mengambil proyek berdasarkan tahun yang dipilih
$sql = "SELECT * FROM projects WHERE YEAR(start_date) = :year ORDER BY start_date DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute([':year' => $year]);
$projects = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects from <?= htmlspecialchars($year) ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .back-button {
            display: inline-flex; 
            align-items: center; 
            background-color: #3C5B6F;
            color: #DFD0B8;
            padding: 5px 10px; 
            margin: 10px;
            border-radius: 10px; 
            text-decoration: none;
            font-size: 16px; 
            font-weight: bold; 
            transition: background-color 0.3s; 
        }
        .back-button:hover {
            background-color: red; 
            color: #000;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        .project-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .project-card {
            width: 200px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: transform 0.2s ease;
        }
        .project-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        .project-card h2 {
            margin: 0;
            padding: 15px;
            font-size: 18px;
            text-align: center;
            background-color: #333;
            color: white;
        }
        .project-card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <a href="/elin" class="back-button">
        <span class="arrow">&larr;</span> Back
    </a>

    <h1>Projects from <?= htmlspecialchars($year) ?></h1>
    <div class="project-container">
        <?php foreach ($projects as $project): ?>
            <div class="project-card">
                <h2><?= htmlspecialchars($project['project_name']) ?></h2>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
