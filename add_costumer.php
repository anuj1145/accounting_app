<?php

include("includes/db24.php");

?>
<html>

<head>
  <title>Deal24</title>

  <style>
    .header {
      padding-top: 10px;
      padding-left: 10px;
      height: 70px;
      width: auto;
      background: #222;

    }

    .navbar {
      padding-top: 5px;
      padding-left: 50px;
      height: 25px;
      width: auto;
      background: #4caf50;
    }

    .left_content {
      float: left;
      padding: 10px;
      margin-top: 5px;
      height: auto;
      width: 83%;
      background: #fff;
      border: 1px solid black;
    }

    table,
    td {
      padding: 10px;
      border: 1px solid black;
      border-collapse: collapse;

    }

    .right_content {
      float: right;
      margin-top: 5px;
      height: 500px;
      width: 15%;
      background: #fff;
      border: 1px solid black;
    }

    nav {

      width: 10%;
      background-color: #f1f1f1;
      text-decoration: none;
      text-align: center;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 100%;
      background-color: #f1f1f1;
    }

    li a {
      display: block;
      color: #000;
      padding: 8px 16px;
      text-decoration: none;
    }

    li a:hover {
      background-color: #555;
      color: white;
    }

    .footer {
      margin-top: 5px;
      padding-top: 3px;
      float: left;
      height: 30px;
      width: 100%;
      background: #222;
    }

    .footer_text {
      color: #fff;
    }
  </style>

<body>
  <div class="header"><img src="images/logo10.png" height="40" width="120"></div>
  <div class="navbar"><a href="add_costumer.php"><img src="images/add1.png" height="24" width="70"></a></div>

  <div class="left_content">

    <div align="center" style="margin-top:0px;">
      <form method="post" id="form_user" action="">
        <div style="font-size:30px; font-style:bolder;padding-bottom:20px;padding-top:20px;">
        <h5 id="success_message" style="color:green;"></h5>
          Register customer
        </div>
        <table>
          <tr>
            <td><b>Name</b></td>
            <td>
              <input type="text" name="customer_name" id="customer_name" />
            </td>
          </tr>
          <tr>
            <td><b>Contact No.</b></td>
            <td>
              <input type="text" name="mob" id="mob" />
            </td>
          </tr>

          <tr>
            <td><b>Customer Address</b></td>
            <td>
              <input type="text" name="user_add" id="user_add" />
            </td>
          </tr>
          <tr>
            <td><b>City</b></td>
            <td><input type="text" name="village" id="village"></td>
          </tr>

          <td colspan="2" align="center"><input type="button" id="submit" name="insert_costumer" value="Submit" style="background:#4caf50;
	border:none;color:#fff;font-size:20px;border-radius:4px;" /></td>

          </tr>

        </table>
      </form>

    </div>


  </div>
  <div class="right_content">
    <ul>
      <li><a href="index.php">Dashboard</a></li>
      <li><a href="all_costumer.php">All Customers</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#about">About</a></li>
    </ul>

  </div>
  <div class="footer">
    <div align="center" class="footer_text">&copy: copyright 2023 by Deal24</div>
  </div>

</body>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
  $(document).ready(function() {
    $('#submit').click(function() {
      let data = {
        "user_name": $('#customer_name').val(),
        "user_mob": $('#mob').val(),
        "user_city": $('#village').val(),
        "user_add": $('#user_add').val()
      }
      $.ajax({
        type: 'post',
        url: 'http://localhost/accounting_system/api/',
        data: JSON.stringify(data),
        contentType: 'application/json',
        success: function () {
          $("#form_user").trigger("reset"); //reset form
                $('#success_message').fadeIn().html("You are registered successfully");
                setTimeout(function() {
                    $('#success_message').fadeOut("slow");
                }, 2000 );
        }
      });
    });
  });
</script>

</html>
