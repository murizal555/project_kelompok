<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Form Booking Hotel - Syarif</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
  <script type="text/javascript" src="https://repo.rachmat.id/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.js"></script>

  <script type="text/javascript">
    $(function() {
      $("#datepicker1, #datepicker2").datepicker();
    });
  </script>
  <style type="text/css">
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
    }

    body::before {
      content: '';
      width: 100%;
      height: 150%;
      position: fixed;
      top: 0;
      left: 0;

      z-index: -1;
    }

    body {
      position: relative;
      z-index: 1;
      width: 100%;
      height: 1000%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-image: src="public/images/gallery1.png";
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .container {
      width: 450px;
      height: 845px;
      max-height: 100%;
      max-width: 90%;
      background: #E8ECF0;
      box-shadow: 0px 30px 20px rgba(0, 0, 0, 0.2);
      border-radius: 10px;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      z-index: 1;
    }

    form {
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .input-group {
      display: flex;
      width: 100%;
      height: 80px;
      flex-direction: column;
      justify-content: center;
      padding: 10px;
      text-align: center;
    }

    .check-in,
    check-out,
    .room {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    input {
      width: 100%;
      height: 100px;
      box-shadow: 4px 10px 20px rgba(14, 13, 13, 0.08);
      border-radius: 5px;
      border: none;
      padding: 20px;
      outline: none;
      font-size: 21px;

    }

    label {
      font-size: 17px;
      align-items: center;
      padding: 5px 0;
      color: rgba(0, 0, 0, 0.5);
    }

    .properties {
      background-color: #FF455B;
      max-width: 60%;
      color: white;
      padding: 20px;
      border-radius: 10px;
      margin-top: -10px;
      text-align: center;
      font-size: 22px;
    }
  </style>

</head>

<body>
  <div class="container">
    <form action="{{route('booking.store')}}" method="POST">
      @csrf
      <h1 style="text-align: center;">Hotel Booking</h1><br>
      <div class="input-group">
        <label for="Nama">Nama</label>
        <input type="text" id="" name="nm">
      </div>
      <div class="check-in">
        <div class="input-group">
          <label for="check-in">Check-in</label>
          <input type="date" id="" name="check_in">
        </div>
        <div class="check-out">
          <div class="input-group">
            <label for="check-out">Check-out</label>
            <input type="date" id="" name="check_out">
          </div>
        </div>
      </div>
      <div class="room">
        <div class="input-group">
          <label for="room">Room</label>
          <input type="number" id="room" min="1" name="room"><br>
        </div>
      </div>
      <div class="input-group">
        <label for="fasilitas">fasilitas</label>
        <input type="text" id="adults" min="50" name="fasilitas">
      </div>
      <br />
      <div class="input-group">
        <label for="fasilitas">E-mail</label>
        <input type="email" id="adults" min="50" name="fasilitas">
      </div>
      <br>
      <div class="input-group">
        <label for="fasilitas">No_Telpon</label>
        <input type="tel" pattern="^\d{12}$" required>

      </div>
      <br>
      <div class="input-group">
        <label for="fasilitas">Jumalah tamu</label>
        <input type="text" id="adults" min="50" name="fasilitas">
      </div>
  </div>
  <div class="flex">
    <a href="/home" class="btn btn-primary">Cencel</a>
    <button type="submit">Submit</button>
    <!-- <input type="submit" class="submit-btn" value="Submit" /> -->
  </div>
  </div>
  </form>
  </div>
</body>

</html>