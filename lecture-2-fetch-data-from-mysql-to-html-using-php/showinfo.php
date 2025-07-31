<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body style="background-color: aqua;">
    
    <div style="padding: 10%; padding-top : 2%">
        <h2 style="text-align: center; padding-bottom : 2%">All Contact Us Forms</h2>
        <div>
            <div class="row row-cols-1 row-cols-md-2 g-4">


            <?php

            $conn = new mysqli("localhost", "root", "", "learnphp");
            $data = $conn->query("select * from contact_us_data order by record_id desc");

            if ($data->num_rows > 0){

                while ($record = $data -> fetch_assoc()) {                

                    echo "<div class='col'>
                        <div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$record['full_name']}</h5>
                            <h6><b>Email ID : -</b> {$record['email_id']}</h6>
                            <h6><b>Phone No. : -</b>{$record['phone_number']}</h6>
                            <p class='card-text'><b>Message :- </b>{$record['message']}</p>
                        </div>
                        </div>
                    </div>";

                }

            }

            ?>

                
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>