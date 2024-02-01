<!DOCTYPE html>
<html>

<head>
    <title>JavaScript Inactivity Detection</title>
    <style>
        #inactivity-status {
            position: fixed;
            top: 10px;
            right: 10px;
            padding: 10px;
            background-color: #f00;
            color: #fff;
            display: none;
        }
    </style>
</head>

<body>
    <div id="inactivity-status">User is inactive</div>

    <script>
        var inactivityTimer;
        var inactivityStatus = document.getElementById('inactivity-status');

        function resetInactivityTimer() {
            clearTimeout(inactivityTimer);
            inactivityTimer = setTimeout(function() {
                inactivityStatus.style.display = 'block';
            }, 2000); // 5000 milliseconds (5 seconds) of inactivity
        }

        document.addEventListener('mousemove', resetInactivityTimer);
        document.addEventListener('touchmove', resetInactivityTimer);

        // Initial setup
        resetInactivityTimer();
    </script>
</body>

</html>