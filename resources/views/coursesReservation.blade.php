<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Reservation Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: auto;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h2>Course Reservation Form</h2>

<form action="{{ route('coursesReservation.store') }}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name" required>

    <label for="phone">Phone Number</label>
    <input type="tel" id="phone" name="phone" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="course">Select a Course</label>
    <select id="course" name="course" required>
        <option value="">--Please choose a course--</option>
        <option value="course1">CODING </option>
        <option value="course2">MEDIA </option>
        <option value="course3">BUISNESS </option>
        <option value="course4">ENGLISH </option>
        <option value="course4">SOFT SKILLS </option>
        <option value="course4">GRAPHICS </option>
    </select>

    <button type="submit">Reserve Course</button>
</form>

</body>
</html>