<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="/img/iconhappycut.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/show_text.css">
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://superal.github.io/canvas2image/canvas2image.js"></script>
    <div class="specific">
        <div class="paper">
            <div class="paper-content">
                <div class="paper-head">
                    <div class="paper-items">
                        <b>Diary : <?php echo $_POST['Diary']?></b>
                    </div>
                    <div class="paper-items">
                        <b> by : <?php echo $_POST['name']?></b>
                    </div>
                    <div class="paper-items">
                        <b> Date : <?php echo $_POST['Date']?></b>
                    </div>
                    <div class="paper-items-text">
                        <b><?php echo $_POST['Story']?></b>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <button type="button" class="btn btn-default">Take a Screenshot!</button> -->
    <div class="home" align='center'>
    <a href="https://howsyourdaygoing.azurewebsites.net/#Home">Home</a></div>
    <!-- <script>
        document.querySelector('button').addEventListener('click', function() {
            html2canvas(document.querySelector('.specific'), {
                onrendered: function(canvas) {
                    // document.body.appendChild(canvas);
                    return Canvas2Image.saveAsPNG(canvas);
                }
            });
        });
    </script> -->
</body>

</html>