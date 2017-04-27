<?php
 require_once('classes/class.lessiondetail.php');
 require_once('classes/class.lession.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
       
        $ldl = LessionDetail::getByLessionId($id);
    }

?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">


    <!--    <script src="editor.js"></script>-->
    <!--    Slide-->
    <link rel="stylesheet" href="css/slide.css">
    


</head>

<body>
    <div class="workspace">
        <div id="slider">
            <div class="content" style="max-width:800px">
            <?php
            foreach($ldl as $key => $value) {
                ?>
                <img alt='<?php echo $value->pattern ?>' src="<?php echo $value->img ?>" class="mySlides">
            <?php } ?>
            </div>
            <div class="center">
                <div class="section">
                    <button id="prev" class="left" onclick="plusDivs(-1)">❮ Prev</button>
                    <span id="numslide">1/12</span>
                    <button id="next" class="right" onclick="plusDivs(1)">Next ❯</button>
                </div>
            </div>
        </div>
        <pre id="editor"></pre>

        <script src="js/aceeditor/ace.js" type="text/javascript" charset="utf-8"></script>
        <script>


        </script>
    </div>
    <div class="preview">
        <div id="view"></div>
    </div>
    <script src="js/slider.js"></script>
    <script>
        showDivs(slideIndex);
        var view = document.getElementById('view');
        //    code.onkeyup = function (event) {
        //        view.innerHTML = code.value;
        //        currentDiv();
        //    };
        var editor = ace.edit("editor");
        editor.setTheme("ace/theme/twilight");
        editor.session.setMode("ace/mode/html");
        editor.$blockScrolling = Infinity;
        editor.getSession().on('change', function() {

            // Get the value from the editor and place it into the texrarea.
            var text = editor.getSession().getValue();
            view.innerHTML = text;
            //alert(text);
        });

    </script>
    
</body>

</html>
