<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body style="background-color: aqua;">
    
    <div style="padding: 20%; padding-top : 2%;">
        <h2 style="text-align: center;">Contact Us Form</h2>

        <div>
            <form action="backend.php" method = "post">
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name = "f_name" class="form-control" placeholder="Enter your full name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">EMail ID</label>
                    <input type="email" name = "email" class="form-control" placeholder="Enter your email address" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="tel" name = "p_num" class="form-control" placeholder="Enter your phone number" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Message</label>
                    <textarea class="form-control" name = "msg" rows="3" placeholder="Enter your message.." required></textarea>
                </div>

                <div style="text-align: center;">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>