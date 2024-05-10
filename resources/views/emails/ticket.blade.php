<!DOCTYPE html>
<html>
<head>
    <title>Ticket Bestelling</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        p {
            margin: 10px 0;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Beste {{ $name }},</h2>
        
        <p>Bedankt voor je bestelling! 
            <br>
        Hier zijn de details:</p>
        
        <p>Concert: {{ $concert->title }}</p>
        <p>Datum: {{ $concert->date }}</p>
        <p>Locatie: {{ $concert->venue }}</p>
        <p>Plaats: {{ $concert->city }}</p>
        <p>Naam: {{ $name }}</p>
        <p>E-mail: {{ $email }}</p>
    </div>
</body>
</html>
