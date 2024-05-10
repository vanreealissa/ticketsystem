<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                background-color: #ffff;
                color: black;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size: 1.2rem;
                padding: 2rem;
            }
        </style>
        <title>Ticketsysteem | 23G</title>
        
    </head>
    <body>
        <h1 style="text-align: center;">Koop de beste tickets</h1>
        <p style="text-align: center;">Ticketsysteem voor de 23G</p>
        
        <div style="text-align: center;">
        @foreach ($concert as $concertItem)
            <div style="margin-bottom: 20px; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9; display: inline-block;">
                <h2>{{ $concertItem->title }}</h2>
                <p><strong>Subtitle:</strong> {{ $concertItem->subtitle }}</p>
                <p><strong>Genre:</strong> {{ $concertItem->genre }}</p>
                <p><strong>Date:</strong> {{ $concertItem->date }}</p>
                <p><strong>Venue:</strong> {{ $concertItem->venue }}</p>
                <p><strong>City:</strong> {{ $concertItem->city }}</p>
                <button onclick="openPopup('{{ $concertItem->id }}', '{{ $concertItem->title }} - {{ $concertItem->venue }} - {{ $concertItem->date }}')">Order Tickets</button>
            </div>
        @endforeach
        </div>

        <div id="popupForm" style="display: none;">
    <form id="orderForm" action="{{ route('tickets.store') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required><br>
        <label for="concert">Concert:</label>
        <input type="text" id="concert" name="concert" value="" readonly><br>
        <input type="hidden" id="concertId" name="concert_id">
        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Bestel nu
            </button>
            <button type="button" onclick="closePopup()">Cancel</button>
        </div>                
    </form>
</div>

<script>
    function openPopup(concertId, concertDetails) {
        document.getElementById('concertId').value = concertId;
        document.getElementById('concert').value = concertDetails;
        document.getElementById('popupForm').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('popupForm').style.display = 'none';
    }
</script>


    
