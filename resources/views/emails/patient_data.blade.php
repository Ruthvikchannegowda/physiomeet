<!DOCTYPE html>
<html>
<head>
    <title>Patient Booking</title>
</head>
<body>
    <h2>New Patient Booking Details</h2>
    <p><strong>Name:</strong> {{ $patient->name }}</p>
    <p><strong>Email:</strong> {{ $patient->email }}</p>
    <p><strong>Phone Number:</strong> {{ $patient->phone_number }}</p>
    <p><strong>Gender:</strong> {{ $patient->gender }}</p>
    <p><strong>Medical Description:</strong> {{ $patient->medical_description }}</p>
</body>
</html>
