<!DOCTYPE html>
<html>
<head>
    <title>Integrating CKeditor in Laravel 5.3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
</head>
<body>

<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">Integrating CKeditor in Laravel 5.3</div>
        <div class="panel-body">
            {{ Form::open(array('url' => 'ckdata')) }}
            <textarea id="ckeditor" name="ckeditor" class="ckeditor"></textarea>
            <script type="text/javascript">
                var editor = CKEDITOR.replace( 'ckeditor' );
                CKFinder.setupCKEditor( editor, '/ckfinder/' );
            </script>
                <input type="submit" />
            {{ Form::close() }}
        </div>
    </div>
    <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
</div>

</body>
</html>