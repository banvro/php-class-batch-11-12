<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        img{
            max-width: 48px;
            border-radius: 9px;
        }
    </style>
</head>
  <body>
    
    <div>
        <h2 style = "text-align : center; color : green">All Forms data</h2>
        <div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">P. Number</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $conn = new mysqli("localhost", "root", "", "learnphp");

                $dataa = $conn->query('select * from contact_us');

                if ($dataa->num_rows > 0) {

                    $xy = 1;
                    
                    while ($x = $dataa->fetch_assoc()) {
                    // print_r($x);
                    echo "<tr>
                        <th scope='row'>{$xy}</th>

                        <td>
                            <img src = '{$x['image']}'>
                        </td>

                        <td>{$x['full_name']}</td>
                        <td>{$x['email_address']}</td>
                        <td>{$x['phone_number']}</td>
                        <td>{$x['Message']}</td>
                        <td>
                            <a href = 'updaing_data.php?update={$x['email_address']}'>
                                <button type='button' class='btn btn-success'>Update</button>
                            </a>

                            <a href = 'backend.php?delete_id={$x['email_address']}'>
                                <button type='button' class='btn btn-danger'>Delete</button>
                            </a>

                        </td>
                    </tr>";
                    $xy = $xy + 1;
                }
            }

                ?>

                
            </tbody>
            </table>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>