<!doctype html>
<html lang="pt-br">
    <head>
        <title>CKEditor</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <div id="dvCentro">
            <textarea id="txtArtigo" name="txtArtigo"></textarea>
        </div>
        <script src="ckeditor/ckeditor.js"></script>
        <script>
                CKEDITOR.replace( 'txtArtigo' );
        </script>
    </body>
</html>