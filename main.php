<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>chatApplication</title>
    <link rel="sylesheet" href="css/main.css">

    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <div class=" chat-textarea col-md-4 col-md-offset-4">
        <div class="row">
            <div class="form-group">


                <textarea class="form-control" rows="25" id="message2"></textarea>

            </div>
        </div>
        <div class="row">
            <form action="file.php " class="" >
                <div class="input-group">
                    <input type="text" class="form-control" id="message1" placeholder="Text">
                    <div class="input-group-btn">
                        <button class="btn  btn-primary" action="ma" id="Send" type="button" onclick="sendToArea();">Send</button>

                        <br>
                        <button class ="btn btn-primary" id="read " type="button" onclick=";"


                        <!--<button class="btn btn-primary" id = SendFile type="button ">SendFile</button>-->

                        <script>

                            function sendToArea() {




                                var message1 = document.getElementById('message1');
                                var message2 = document.getElementById('message2');


                                if(document.getElementById('message1').value !="" ){
                                    message2.value=message1.value;
                                    clearTextBox();

                                }else{
                                    alert("Nothing To Copy");
                                }
                                }





                            function clearTextBox() {
                                document.getElementById('message1').value = "";

                            }


                        </script>












                    </div>

                </div>

            </form>

        </div>


    </div>

</div>
</body>
</html>