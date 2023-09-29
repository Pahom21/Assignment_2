<?php
    require_once "ClassAutoLoad.php";
    // Fetch data from the database
    $data = $dbreader->fetchData();
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Display Data</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
        <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #1e1e1e; /* Dark background color similar to Spotify */
    }

    .data-table {
        width: 100%;
        background-color: #333; /* Table background color similar to Spotify */
        color: #fff; /* Text color */
        border-collapse: collapse;
        margin: 20px 0; /* Space on top and below */
    }

    .data-table th, .data-table td {
        padding: 10px;
        border: 1px solid #000; /* Table border color */
    }

    .data-table th {
        background-color: #222; /* Header background color similar to Spotify */
    }

    .data-table th, .data-table td {
        text-align: center;
    }

    .btn-primary {
        background-color: #1db954; /* Button color similar to Spotify */
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s;
        text-decoration: none; /* Remove underline for anchor links */
    }

    .btn-primary:hover {
        background-color: #169e42; /* Hover color similar to Spotify */
    }
</style>



    </head>
    <body>
        <div class="container">
            <h1>Database Data</h1>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['Name']) ?></td>
                            <td><?= htmlspecialchars($row['Email']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                    <td colspan="2">
                        <a href="signin.php" class="btn btn-primary">Back to Sign In</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </body>
  </html>
