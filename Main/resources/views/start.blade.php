@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Running Services</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/start.css') }}">
</head>
<body>
    <div class="grid">

        <div class="tile nutrition" onclick="window.location.href='/search-nutrition-form';">
            <h2>Nutrition</h2>
            <p>Manage your nutrition entries</p>
            <p>(REST)</p>
        </div>

        <div class="tile training" onclick="window.location.href='/make-running-schedule-view';">
            <h2>Training</h2>
            <p>Generate and view running schedules</p>
            <p>(Fetch)</p>
        </div>

        <div class="tile history" onclick="window.location.href='/running-history';">
            <h2>Running History</h2>
            <p>view Running activities</p>
            <p>(SOAP)</p>
        </div>
        
        <div class="tile graphql" onclick="window.location.href='/social-running-tracker';">
            <h2>Social Running Tracker</h2>
            <p>Track and connect with fellow runners</p>
            <p>(GraphQL)</p>
        </div>

        <div class="tile safety-alert" onclick="window.location.href='/websocket';">
            <h2>Safety Alert</h2>
            <p>Activate safety alerts during your run</p>
            <p>(WebSocket)</p>
        </div>
        
        <div class="tile sensors" onclick="window.location.href='/sensors';">
            <h2>Running Sensors</h2>
            <p>Overview of multiple running sensors</p>
            <p>(MQTT)</p>
        </div>

        <div class="tile weather" onclick="window.location.href='/weather-service';">
            <h2>Weather Service</h2>
            <p>Check your local weather conditions</p>
            <p>(gRPC)</p>
        </div>

    </div>

</body>
</html>
@include('footer')

