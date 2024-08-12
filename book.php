<!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color:#3b141c;
  }

  .book-a-table {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
  }

  .book-a-table label {
    display: block;
    margin-bottom: 10px;
  }

  .book-a-table input[type="text"],
  .book-a-table input[type="email"],
  .book-a-table input[type="date"],
  .book-a-table input[type="time"] {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .book-a-table textarea {
    height: 100px;
  }

  .book-a-table button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
  }
</style>
</head>
<body>

<form class="book-a-table" action="book01.php" method="post">
  <h2>Book a Table</h2>
  <p>Reserve a table at our coffee shop.</p>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" placeholder="Your Name">
  <br><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" placeholder="Your Email">
  <br><br>
  <label for="phone">Phone Number:</label>
  <input type="text" id="phone" name="phone" placeholder="Your Phone Number">
  <br><br>
  <label for="date">Date:</label>
  <input type="date" id="date" name="date">
  <br><br>
  <label for="time">Time:</label>
  <input type="time" id="time" name="time">
  <br><br>
  <label for="guests">Number of Guests:</label>
  <input type="text" id="guests" name="guests" placeholder="Number of Guests">
  <br><br>
  <label for="requests">Special Requests:</label>
  <textarea id="requests" name="requests" placeholder="Any special requests..."></textarea>
  <br><br>
  <button type="submit" name="submit">Book Table</button>
</form>

</body>
</html>