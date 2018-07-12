<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Telegram & Laravel</title>
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script>
            $(document).ready(function () {
                var mensagens = "/get-updates";
                $.get(mensagens, function (data) {
                    $.each(data, function (i, item) {
                        $(".mensagens").append("<div>" + item.message.text + "</div><hr>");
                    });
                });
            });
        </script>

        <!-- Bootstrap core CSS -->
        {!! Html::style('css/bootstrap.min.css') !!}

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    {!! Form::open(['url' => '/send-message', 'class' => 'form-signin']) !!}
                    <h2 class="form-signin-heading">Enviar a mensagem</h2>
                    <label for="inputText" class="sr-only">Message</label>
                    <textarea name="message" type="text" id="inputText" class="form-control" placeholder="Message" required autofocus></textarea>
                    <br />
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
                    {!! Form::close() !!}
                    <br />

                    <h2 class="form-signin-heading">Mensagems</h2>
                    <br />
                    <div class="panel panel-primary">

                        <div class="panel-heading"> <h3 class="panel-title">Mensagens</h3> </div>
                        <div class="panel-body">
                            <div class="mensagens"></div>
                        </div>

                    </div>

                </div>
            </div>


        </div> <!-- /container -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        {!! Html::script('/js/bootstrap.min.js') !!}
    </body>
</html>
