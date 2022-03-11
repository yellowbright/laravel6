<!-- index.html -->
<html>
<body>

<head>
    <script src="history/jquery-1.10.1.min.js" type="text/javascript"></script>
    <!--    <script>console.log('done');-->
    <!--    </script>-->
    <!--    <script>$('body').css('background-color','red');-->
    <!--    </script>-->
    <!--    <link rel="stylesheet" type="text/css" href="http://localhost:8000/test" />-->
</head>


<div id="test">
    test
</div>
<div id="test1">
    test1
</div>



<script src="foo.js" defer></script>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        console.log('DOM fully loaded and parsed');
    });
    console.log('1111');
    $("#test").css("border","2px solid black");
    $("#test").css("width","20px");
    $("#test").css("height","20px");
    function a() {
        for (var i=0;i<100000;i++)
        {
            $("#test1").append("<div>Some appended text.</div>");
        }
        console.log('Appending done!');
    }
    a();
</script>
<style>
    #test {
        border: 2px solid black;
        width: 100px;
        height: 100px;
    }
</style>
</body>
</html>
