<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"], input[type="email"], input[type="tel"], input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h2>Room RoomReservation</h2>
<form action="{{ route('RoomReservation.store') }}" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="age">Age:</label>
    <input type="date" id="age" name="age" required>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required  placeholder="123-456-7890">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <input type="submit" value="Submit">
</form>

</body>
</html>
