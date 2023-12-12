<!DOCTYPE html>
<html>
<head>
    <title>Desmos Calculator</title>
    <link rel="stylesheet" href="api.css"> <!-- Link to your api.css file -->
</head>
<body>
    <h1>Desmos Calculator</h1>
    <div id="calculator"></div>

    <script src="https://www.desmos.com/api/v1.8/calculator.js?apiKey=dcb31709b452b1cf9dc26972add0fda6"></script>
    <script>
        function initCalculator() {
            var elt = document.getElementById('calculator');
            var calculator = Desmos.GraphingCalculator(elt);
        }
        initCalculator();
    </script>
</body>
</html>
