<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #333;
        }
    
        label {
            display: block;
            margin-top: 10px;
        }
        input, select {
            width: 45%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }
      
        table {
            width: 45%;
            margin-top: 15px;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Add Booking</h1>
    <a href="index.php">Return to main page</a> | <a href="booking.php">Return to the Booking listing</a>

    <form action="process_booking.php" method="post">
        <label for="room_name">Room name:</label>
        <select name="room_name" id="room_name">
            <option value="Kellie D 1">Kellie D 1</option>
            <option value="Room B 2">Room B 2</option>
            <option value="Room C 3">Room C 3</option>
        </select>

        <label for="customer">Customer:</label>
        <select name="customer" id="customer">
            <option value="1 Garrison Jordandd">1 Garrison Jordandd</option>
            <option value="2 Jane Doe">2 Jane Doe</option>
            <option value="3 John Smith">3 John Smith</option>
        </select>

        <label for="check_in">Check In:</label>
        <input type="date" name="check_in" id="check_in">

        <label for="check_out">Check Out:</label>
        <input type="date" name="check_out" id="check_out">

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone" value="(012) 345 6789">

        <label for="extras">Extras:</label>
        <input type="text" name="extras" id="extras">

        <button type="submit">Book</button>
    </form>

    <h2>Search for room availability</h2>
    <form action="search_availability.php" method="get">
        <label for="from_date">From Date:</label>
        <input type="date" name="from_date" id="from_date">

        <label for="to_date">To Date:</label>
        <input type="date" name="to_date" id="to_date">

        <button type="submit">Search</button>
    </form>

    <table>
        <tr>
            <th>Room#</th>
            <th>Room name</th>
            <th>Room type</th>
            <th>Beds</th>
        </tr>
        <!-- Sample row (this should be dynamically filled) -->
        <tr>
            <td>101</td>
            <td>Kellie D 1</td>
            <td>Single</td>
            <td>1</td>
        </tr>
    </table>
</div>

</body>
</html>
