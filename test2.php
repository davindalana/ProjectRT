<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>360&deg; Image Gallery</title>
    <meta name="description" content="360&deg; Image Gallery - A-Frame">
    <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-event-set-component@5/dist/aframe-event-set-component.min.js"></script>
    <script src="https://unpkg.com/aframe-layout-component@5.3.0/dist/aframe-layout-component.min.js"></script>
    <script src="https://unpkg.com/aframe-template-component@3.2.1/dist/aframe-template-component.min.js"></script>
    <script src="https://unpkg.com/aframe-proxy-event-component@2.1.0/dist/aframe-proxy-event-component.min.js"></script>
</head>

<body>
    <a-scene>
        <a-assets>
            <img id="taman-slamet1" crossorigin="anonymous" src="Image/TamanSlamet1.JPG">
            <img id="taman-slamet2" crossorigin="anonymous" src="Image/TamanSlamet2.JPG">
            <img id="taman-slamet3" crossorigin="anonymous" src="Image/TamanSlamet3.JPG">
            <img id="taman-slamet4" crossorigin="anonymous" src="Image/TamanSlamet4.JPG">
            <img id="taman-tjerme1" crossorigin="anonymous" src="Image/TamanTjerme1.JPG">
            <img id="taman-tjerme2" crossorigin="anonymous" src="Image/TamanTjerme2.JPG">
            <img id="info-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828778.png">
        </a-assets>

        <a-sky id="image-360" src="#taman-slamet1"></a-sky>

        <!-- Object 1 to change sky to taman-slamet1 -->
        <a-box position="-1 1 -3" depth="0.5" height="0.5" width="0.5" color="blue" class="clickable"
            event-set__click="_target: #image-360; src: #taman-slamet1"
            event-set__mouseenter="color: lightblue"
            event-set__mouseleave="color: blue"></a-box>

        <!-- Object 2 to change sky to taman-tjerme1 -->
        <a-sphere position="1 1 -3" radius="0.5" color="red" class="clickable"
            event-set__click="_target: #image-360; src: #taman-tjerme1"
            event-set__mouseenter="color: pink"
            event-set__mouseleave="color: red"></a-sphere>

        <!-- Additional Object to navigate to taman-slamet2 (only visible in taman-slamet1) -->
        <a-cone id="to-slamet2" position="0 1 -2" radius-bottom="0.5" radius-top="0.1" height="1" color="green"
            class="clickable" visible="false"
            event-set__click="_target: #image-360; src: #taman-slamet2"
            event-set__mouseenter="color: lightgreen"
            event-set__mouseleave="color: green"></a-cone>

        <!-- Camera and Cursor -->
        <a-entity id="camera" camera position="0 1.6 0" look-controls>
            <a-cursor id="cursor"
                animation__click="property: scale; startEvents: click; from: 0.1 0.1 0.1; to: 1 1 1; dur: 150"
                animation__fusing="property: fusing; startEvents: fusing; from: 1 1 1; to: 0.1 0.1 0.1; dur: 1500"
                event-set__mouseenter="_event: mouseenter; color: springgreen"
                event-set__mouseleave="_event: mouseleave; color: white"
                raycaster="objects: .clickable"
                color="white"></a-cursor>
        </a-entity>

        <!-- Custom Script to Toggle Visibility -->
        <script>
            AFRAME.registerComponent('toggle-object', {
                init: function () {
                    var skyEl = document.querySelector('#image-360');
                    var objectEl = document.querySelector('#to-slamet2');
                    var self = this;

                    // Function to check and toggle visibility
                    self.checkSkySrc = function () {
                        var currentSrc = skyEl.getAttribute('src');
                        if (currentSrc === '#taman-slamet1') {
                            objectEl.setAttribute('visible', 'true');
                        } else {
                            objectEl.setAttribute('visible', 'false');
                        }
                    };

                    // Initial check
                    self.checkSkySrc();

                    // Listen for changes to the sky's 'src' attribute
                    skyEl.addEventListener('attributechanged', function (evt) {
                        if (evt.detail.name === 'src') {
                            self.checkSkySrc();
                        }
                    });
                }
            });

            // Attach the component to an entity
            document.querySelector('a-scene').setAttribute('toggle-object', '');
        </script>

    </a-scene>
</body>

</html>