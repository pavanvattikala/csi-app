<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title></title>
  <style>
    * {
      box-sizing: border-box;
    }
  </style>
</head>

<body style="background-color: #f4f4f4; font-family: Roboto, arial, sans-serif">
  <div style="background-color: #35b8e8; height: 140px;">
  </div>
  <div style="max-width: 550px; background-color: white; margin: -80px auto 0 auto; padding: 20px 60px 80px 60px;">
    <div style="  font-size: 30px; font-weight: 300; margin-top: 20px; text-align: center;"> Slot Confirmed!</div>
    <br />
    <p>Congratulations {{ $data['name'] }}! <br> Your Slot has been confirmed. Please close this page and go back</p>
    <p>Your ID is {{ $data['id'] }}</p>
    <p class="text-danger">Note it down for futer use</p>
    <div class=" box-sizing: border-box; width: 100%;">
      <br />
      <br />
      <div style="font-size: 18px; text-align: center">
        IOTOMATIC
      </div>

      <div class="container">
        <center>
            <a href="/" class="btn bg-primary" style="background-color: #35b8e8">Home</a>
        </center>
      </div>

    </div>
  </div>
</body>

</html>