<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CKFinder 3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
</head>
<body>
<button id="popup-1-button">Open popup 1</button>
<button id="popup-2-button">Open popup 2</button>
<div id="output"></div>
<script>
    window.CKFinder = {
        _popupOptions: {
            'popup-1-config': { // Config ID for first popup
                chooseFiles: true,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var file = evt.data.files.first();
                        var output = document.getElementById( 'output' );
                        output.innerHTML = 'Selected in popup 1: ' + file.get( 'name' ) + '<br>URL: ' + file.getUrl();
                    } );
                }
            },
            'popup-2-config': { // Config ID for second popup
                chooseFiles: true,
                skin: 'jquery-mobile',
                swatch: 'b',
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var file = evt.data.files.first();
                        var output = document.getElementById( 'output' );
                        output.innerHTML = 'Selected in popup 2: ' + file.get( 'name' ) + '<br>URL: ' + file.getUrl();
                    } );
                }
            }
        }
    };

    var popupWindowOptions = [
        'location=no',
        'menubar=no',
        'toolbar=no',
        'dependent=yes',
        'minimizable=no',
        'modal=yes',
        'alwaysRaised=yes',
        'resizable=yes',
        'scrollbars=yes',
        'width=800',
        'height=600'
    ].join( ',' );

    document.getElementById( 'popup-1-button' ).onclick = function() {
        // Note that config ID is passed in configId parameter
        window.open( '/ckfinder/ckfinder.html?popup=1&configId=popup-1-config', 'CKFinderPopup1', popupWindowOptions );
    };

    document.getElementById( 'popup-2-button' ).onclick = function() {
        window.open( '/ckfinder/ckfinder.html?popup=1&configId=popup-2-config', 'CKFinderPopup2', popupWindowOptions );
    }
</script>
</body>
</html>