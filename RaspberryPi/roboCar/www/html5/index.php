<!DOCTYPE html>
 
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="text/html; charset=ISO-8859-1"
        http-equiv="content-type">
    <script type="application/javascript">
        var centreX = 100; var centreY = 100;
        var radius = 75;
        var rotateAngle = 36 * Math.PI / 180;
        var startAngle = 0 * Math.PI / 180;
        var endAngle = 36 * Math.PI / 180;
        var counter = 0;
        var animFlag;
        var colours = ["teal", "red", "green", "blue", "yellow", "violet", "orange", "grey", "navy blue", "purple"];
 
        function init() {
            var canvas = document.getElementById("canvas");
            if (canvas.getContext) {
                var ctx = canvas.getContext("2d");
                ctx.lineWidth = 3.0;
                ctx.fillStyle = "orange";
                ctx.fillRect(200, 100, 75, 20);
                ctx.fillStyle = "black";
                ctx.font = "15px verdana";
                ctx.fillText("Rotate", 215, 114);
                drawWheel();
            }
        }
 
        function drawWheel() {
            var canvas = document.getElementById("canvas");
            if (canvas.getContext) {
                var ctx = canvas.getContext("2d");
                for (i = 0; i < 10; i++) {
                    ctx.fillStyle = colours[i];
                    ctx.translate(centreX, centreY);
                    ctx.rotate(rotateAngle);
                    ctx.translate(-centreX, -centreY);
                    ctx.beginPath();
                    ctx.moveTo(centreX, centreY);
                    ctx.lineTo(centreX + radius, centreY);
                    ctx.arc(centreX, centreY, radius, startAngle, endAngle, false);
                    ctx.closePath();
                    ctx.fill();
                }
            }
        }
 
        function rotateWheel(rnd) {
            var canvas = document.getElementById("canvas");
            if (canvas.getContext) {
                var ctx = canvas.getContext("2d");
                ctx.translate(centreX, centreY);
                ctx.rotate(rotateAngle);
                ctx.translate(-centreX, -centreY);
                drawWheel();
                counter++;
                if (counter > rnd) {
                    counter = 0;
                    clearInterval(animFlag);
                }
            }
        }
 
        function mouseClick(event) {
            var x = event.clientX;
            var y = event.clientY;
            var rnd = Math.ceil(Math.random() * 100);
            if ((x > 200) && (x < 275) && (y > 100) && (y < 120))
                animFlag = setInterval(function () { rotateWheel(rnd) }, 25);
        }
        window.addEventListener("click", mouseClick, false);
 
    </script>
    <title>Animation - Moving Banner</title>
</head>
<body onload="init();">
    <canvas id="canvas" width="600" height="500"></canvas>
    <br>
</body>
</html>
