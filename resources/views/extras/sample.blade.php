<!DOCTYPE html>
<html lang="en">
    <head>
        @include('extras.metatags')

        <title>Dashboard - @include('extras.domain')</title>

        <!-- Fonts -->
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        
    </head>
    <body>

        <div id="video-camera"></div>

        <script src="{{ asset('js/plugins/jquery.min.js') }}"></script>
        <script src="{{ asset('js/plugins/webcam.min.js') }}"></script>

        <script type="text/javascript">
            
        $(function() {
            // Set webcam settings
                Webcam.set({
                    // Live preview size
                    width: 320,
                    height: 240,

                    // Device capture size
                    dest_width: 320,
                    dest_height: 240,   

                    // Final cropped size
                    crop_width: 240,
                    crop_height: 240,

                    // Format and quality
                    image_format: 'jpeg',
                    jpeg_quality: 90,

                    // Mirror mode
                    flip_horiz: false
                });

                // Start webcam
                Webcam.attach('#video-camera');
        });

        </script>
    </body>
</html>






















