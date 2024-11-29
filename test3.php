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
            <img id="taman-tjerme3" crossorigin="anonymous" src="Image/TamanTjerme3.JPG">
            <img id="trunojoyo-park1" crossorigin="anonymous" src="Image/TrunojoyoPark1.JPG">
            <img id="trunojoyo-park2" crossorigin="anonymous" src="Image/TrunojoyoPark2.JPG">
            <img id="trunojoyo-park3" crossorigin="anonymous" src="Image/TrunojoyoPark3.JPG">
            <img id="merbabu-park1" crossorigin="anonymous" src="Image/MerbabuPark1.JPG">
            <img id="merbabu-park2" crossorigin="anonymous" src="Image/MerbabuPark2.JPG">
            <img id="merbabu-park3" crossorigin="anonymous" src="Image/MerbabuPark3.JPG">
            <img id="merbabu-park4" crossorigin="anonymous" src="Image/MerbabuPark4.JPG">
            <img id="info-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828778.png">
        </a-assets>

        <!-- Sky 1 with taman-tjerme1 at position 0 -->
        <a-entity id="sky1"
            geometry="primitive: sphere; radius: 5000; segmentsWidth: 64; segmentsHeight: 64"
            material="shader: flat; src: #taman-tjerme1; side: back"
            position="0 0 0"
            scale="-1 1 1"
            rotation="0 270 0 ">
        </a-entity>

        <a-entity id="sky2"
            geometry="primitive: sphere; radius: 5000; segmentsWidth: 64; segmentsHeight: 64"
            material="shader: flat; src: #taman-tjerme2; side: back"
            position="10000 0 0"
            scale="-1 1 1"
            rotation="0 240 0 ">
        </a-entity>

        <a-entity id="sky3"
            geometry="primitive: sphere; radius: 5000; segmentsWidth: 64; segmentsHeight: 64"
            material="shader: flat; src: #taman-tjerme3; side: back"
            position="20000 0 0"
            scale="-1 1 1"
            rotation="0 270 0 ">
        </a-entity>

        <a-entity id="sky4"
            geometry="primitive: sphere; radius: 5000; segmentsWidth: 64; segmentsHeight: 64"
            material="shader: flat; src: #taman-slamet1; side: back"
            position="30000 0 0"
            scale="-1 1 1"
            rotation="0 0 0 ">
        </a-entity>

        <a-entity id="sky5"
            geometry="primitive: sphere; radius: 5000; segmentsWidth: 64; segmentsHeight: 64"
            material="shader: flat; src: #taman-slamet2; side: back"
            position="40000 0 0"
            scale="-1 1 1">
        </a-entity>

        <a-entity id="sky6"
            geometry="primitive: sphere; radius: 5000; segmentsWidth: 64; segmentsHeight: 64"
            material="shader: flat; src: #taman-slamet3; side: back"
            position="50000 0 0"
            scale="-1 1 1">
        </a-entity>

        <a-entity id="sky7"
            geometry="primitive: sphere; radius: 5000; segmentsWidth: 64; segmentsHeight: 64"
            material="shader: flat; src: #taman-slamet4; side: back"
            position="60000 0 0"
            scale="-1 1 1">
        </a-entity>

        <a-entity id="sky8"
            geometry="primitive: sphere; radius: 5000; segmentsWidth: 64; segmentsHeight: 64"
            material="shader: flat; src: #trunojoyo-park1; side: back"
            position="0 10000 0"
            scale="-1 1 1">
        </a-entity>

        <a-entity id="sky9"
            geometry="primitive: sphere; radius: 5000; segmentsWidth: 64; segmentsHeight: 64"
            material="shader: flat; src: #trunojoyo-park2; side: back"
            position="0 20000 0"
            scale="-1 1 1">
        </a-entity>

        <a-entity id="sky10"
            geometry="primitive: sphere; radius: 5000; segmentsWidth: 64; segmentsHeight: 64"
            material="shader: flat; src: #trunojoyo-park3; side: back"
            position="0 30000 0"
            scale="-1 1 1">
        </a-entity>

        <a-entity id="sky11"
            geometry="primitive: sphere; radius: 5000; segmentsWidth: 64; segmentsHeight: 64"
            material="shader: flat; src: #merbabu-park1; side: back"
            position="0 40000 0"
            scale="-1 1 1">
        </a-entity>

        <a-entity id="sky12"
            geometry="primitive: sphere; radius: 5000; segmentsWidth: 64; segmentsHeight: 64"
            material="shader: flat; src: #merbabu-park2; side: back"
            position="0 50000 0"
            scale="-1 1 1">
        </a-entity>

        <a-entity id="sky13"
            geometry="primitive: sphere; radius: 5000; segmentsWidth: 64; segmentsHeight: 64"
            material="shader: flat; src: #merbabu-park3; side: back"
            position="0 60000 0"
            scale="-1 1 1">
        </a-entity>

        <a-entity id="sky14"
            geometry="primitive: sphere; radius: 5000; segmentsWidth: 64; segmentsHeight: 64"
            material="shader: flat; src: #merbabu-park4; side: back"
            position="0 70000 0"
            scale="-1 1 1">
        </a-entity>


        <!-- Navigation objects to move between skies -->
        <!-- Taman Tjerme -->
        <a-text value="Selamat Datang di Virtual Tour Taman Kota Malang" position="15 3 0" color="magenta" width="25" align="center" wrap-count="23" rotation="0 -90 0" font="exo2bold"></a-text>

        <a-plane color="transparant" position="3 -0.5 -1" width="0.75" height="0.75" src="Image/3.png" rotation="0 270 0" class="clickable"
            event-set__click="_target: #camera; position: 30000 0 0"></a-plane>

        <a-plane color="transparant" position="3 -0.5 0" width="0.75" height="0.75" src="Image/4.png" rotation="0 270 0" class="clickable"
            event-set__click="_target: #camera; position: 0 10000 0"></a-plane>

        <a-plane color="transparant" position="3 -0.5 1" width="0.75" height="0.75" src="Image/2.png" rotation="0 270 0" class="clickable"
            event-set__click="_target: #camera; position: 0 40000 0">
        </a-plane>

        <a-image color="transparant" position="-4 -4 -8" width="3" height="3" src="Image/arrow.png" rotation="90 0 270" class="clickable"
            event-set__click="_target: #camera; position: 10000 0 0">
        </a-image>

        <a-image color="transparant" position="15 3 -17" width="3" height="3" src="Image/info.png" rotation="0 325 0" class="clickable"
            event-set__click="_target: #popupPlane1; visible: true">
        </a-image>
        <a-plane
            id="popupPlane1"
            visible="false"
            position="0 2 -5"
            width="4"
            height="2"
            color="#ffffff"
            material="opacity: 0.9; shader: flat">
            <a-text
                value="Taman Tjerme, atau Taman Cerme, terletak di Jalan Cerme, Kelurahan Oro-Oro Dowo, Kota Malang. Taman ini dikelilingi berbagai tanaman hias yang tertata rapi. Suasananya yang asri membuatnya cocok untuk bersantai. Taman ini menjadi tempat yang menyegarkan di tengah kota Malang."
                align="center"
                color="#000000"
                position="0 0 0.1"
                width="3.5"
               
                >
            </a-text>
            <a-plane
                id="closeButton1"
                position="1.8 0.8 0.1"
                width="0.5"
                height="0.3"
                color="#ff0000"
                class="clickable"
                text="value: X; align: center; color: #ffffff; width: 2"
                event-set__click="_target: #popupPlane1; visible: false">
            </a-plane>
        </a-plane>

        <!-- Taman Tjerme 2 -->
        <a-image color="transparant" position="9990 -4 5" width="3" height="3" src="Image/arrow.png" rotation="90 0 140" class="clickable"
            event-set__click="_target: #camera; position: 0 0 0">
        </a-image>

        <a-image color="transparant" position="10003 -4 -15" width="3" height="3" src="Image/arrow.png" rotation="90 0 270" class="clickable"
            event-set__click="_target: #camera; position: 20000 0 0">
        </a-image>

        <!-- Taman Tjerme 2 -->
        <a-image color="transparant" position="20005 -4 10" width="3" height="3" src="Image/arrow.png" rotation="90 0 70" class="clickable"
            event-set__click="_target: #camera; position: 10000 0 0">
        </a-image>

        <!-- Taman Slamet -->
        <a-text value="Selamat Datang di Virtual Tour Taman Kota Malang" position="30000 3 -15" color="magenta" width="25" align="center" wrap-count="23" rotation="0 0 0" font="exo2bold"></a-text>

        <a-plane color="transparant" position="29999 -.5 -3" width="0.75" height="0.75" src="Image/1.png" class="clickable"
            event-set__click="_target: #camera; position: 0 0 0"></a-plane>

        <a-plane color="transparant" position="30000 -.5 -3" width="0.75" height="0.75" src="Image/4.png" class="clickable"
            event-set__click="_target: #camera; position: 0 10000 0"></a-plane>

        <a-plane color="transparant" position="30001 -.5 -3" width="0.75" height="0.75" src="Image/2.png" class="clickable"
            event-set__click="_target: #camera; position: 0 40000 0"></a-plane>

        <a-image color="transparant" position="29985 -5 -3" width="3" height="3" src="Image/arrow.png" rotation="90 0 180" class="clickable"
            event-set__click="_target: #camera; position: 40000 0 0">
        </a-image>

        <a-image color="transparant" position="29985 3 -15" width="3" height="3" src="Image/info.png" rotation="0 45 0" class="clickable"
            event-set__click="_target: #popupPlane2; visible: true">
        </a-image>
        <a-plane
            id="popupPlane2"
            visible="false"
            position="29995 1 -1"
            width="5"
            height="3"
            color="#ffffff"
            rotation="0 90 0"
            material="opacity: 0.9; shader: flat">
            <a-text
                value="Taman Slamet adalah ruang terbuka hijau yang terletak di Jalan Taman Slamet No. 8, Gading Kasri, Kecamatan Klojen, Kota Malang. Dikelilingi pepohonan rindang dan tanaman hias yang tertata rapi, taman ini menawarkan suasana sejuk. Tempat ini cocok untuk bersantai atau berolahraga ringan. Taman Slamet menjadi pilihan populer bagi warga Malang yang ingin menikmati udara segar di tengah kota."
                align="center"
                color="#000000"
                position="0 0 0.1"
                width="3.5"
                
                >
                
            </a-text>
            <a-plane
                id="closeButton2"
                position="2.2 1.3 0.1"
                width="0.5"
                height="0.3"
                color="#ff0000"
                class="clickable"
                text="value: X; align: center; color: #ffffff; width: 2"
                event-set__click="_target: #popupPlane2; visible: false">
            </a-plane>
        </a-plane>

        <!-- Taman Slamet 2 -->
        <a-image color="transparant" position="40000 -5 10" width="3" height="3" src="Image/arrow.png" rotation="90 0 90" class="clickable"
            event-set__click="_target: #camera; position: 30000 0 0">
        </a-image>

        <a-image color="transparant" position="40000 -5 -10" width="3" height="3" src="Image/arrow.png" rotation="90 0 270" class="clickable"
            event-set__click="_target: #camera; position: 50000 0 0">
        </a-image>

        <!-- Taman Slamet 3 -->
        <a-image color="transparant" position="49995 -5 10" width="3" height="3" src="Image/arrow.png" rotation="90 0 90" class="clickable"
            event-set__click="_target: #camera; position: 40000 0 0">
        </a-image>

        <a-image color="transparant" position="50000 -5 -10" width="3" height="3" src="Image/arrow.png" rotation="90 0 270" class="clickable"
            event-set__click="_target: #camera; position: 60000 0 0">
        </a-image>

        <!-- Taman Slamet 4 -->
        <a-image color="transparant" position="60000 -5 10" width="3" height="3" src="Image/arrow.png" rotation="90 0 90" class="clickable"
            event-set__click="_target: #camera; position: 50000 0 0">
        </a-image>

        <!-- Trunojoyo Park -->
        <a-text value="Selamat Datang di Virtual Tour Taman Kota Malang" position="0 10003 -15" color="magenta" width="25" align="center" wrap-count="23" rotation="0 0 0" font="exo2bold"></a-text>

        <a-plane color="transparant" position="-1 9999.5 -3" width="0.75" height="0.75" src="Image/1.png" class="clickable"
            event-set__click="_target: #camera; position: 0 0 0"></a-plane>

        <a-plane color="transparant" position="0 9999.5 -3" width="0.75" height="0.75" src="Image/3.png" class="clickable"
            event-set__click="_target: #camera; position: 30000 0 0"></a-plane>

        <a-plane color="transparant" position="1 9999.5 -3" width="0.75" height="0.75" src="Image/2.png" class="clickable"
            event-set__click="_target: #camera; position: 0 40000 0"></a-plane>

        <a-image color="transparant" position="10 9995 0" width="3" height="3" src="Image/arrow.png" rotation="90 0 0" class="clickable"
            event-set__click="_target: #camera; position: 0 20000 0">
        </a-image>

        <a-image color="transparant" position="-15 10003 -15" width="3" height="3" src="Image/info.png" rotation="0 45 0" class="clickable"
            event-set__click="_target: #popupPlane3; visible: true">
        </a-image>

        <a-plane
            id="popupPlane3"
            visible="false"
            position="-5 10000 -1"
            width="5"
            height="3"
            color="#ffffff"
            rotation="0 90 0"
            material="opacity: 0.9; shader: flat">
            <a-text
                value="Taman Trunojoyo, terletak di Jalan Trunojoyo, Kecamatan Klojen, Kota Malang, adalah ruang terbuka hijau yang menawarkan suasana asri dengan pepohonan rindang dan berbagai fasilitas rekreasi. Berada di seberang Stasiun Kota Baru Malang, taman ini mudah diakses. Fasilitasnya meliputi area bermain anak, jogging track, dan tempat duduk yang nyaman. Taman ini menjadi pilihan populer bagi warga untuk bersantai dan berolahraga."
                align="center"
                color="#000000"
                position="0 0 0.1"
                width="3.5"
        
                >
            </a-text>
            <a-plane
                id="closeButton3"
                position="2.2 1.3 0.1"
                width="0.5"
                height="0.3"
                color="#ff0000"
                class="clickable"
                text="value: X; align: center; color: #ffffff; width: 2"
                event-set__click="_target: #popupPlane3; visible: false">
            </a-plane>
        </a-plane>

        <!-- Trunojoyo Park 2 -->
        <a-image color="transparant" position="-10 19995 0" width="3" height="3" src="Image/arrow.png" rotation="90 0 180" class="clickable"
            event-set__click="_target: #camera; position: 0 10000 0">
        </a-image>

        <a-image color="transparant" position="10 19995 0" width="3" height="3" src="Image/arrow.png" rotation="90 0 0" class="clickable"
            event-set__click="_target: #camera; position: 0 30000 0">
        </a-image>

        <!-- Trunojoyo Park 3 -->
        <a-image color="transparant" position="10 29995 0" width="3" height="3" src="Image/arrow.png" rotation="90 0 0" class="clickable"
            event-set__click="_target: #camera; position: 0 20000 0">
        </a-image>

        <!-- Merbabu Park -->
        <a-text value="Selamat Datang di Virtual Tour Taman Kota Malang" position="0 40003 -15" color="magenta" width="25" align="center" wrap-count="23" rotation="0 0 0" font="exo2bold"></a-text>

        <a-plane color="transparant" position="-1 39999.5 -3" width="0.75" height="0.75" src="Image/1.png" class="clickable"
            event-set__click="_target: #camera; position: 0 0 0"></a-plane>

        <a-plane color="transparant" position="0 39999.5 -3" width="0.75" height="0.75" src="Image/3.png" class="clickable"
            event-set__click="_target: #camera; position: 30000 0 0"></a-plane>

        <a-plane color="transparant" position="1 39999.5 -3" width="0.75" height="0.75" src="Image/4.png" class="clickable"
            event-set__click="_target: #camera; position: 0 10000 0"></a-plane>

        <a-image color="transparant" position="-10 39995 0" width="3" height="3" src="Image/arrow.png" rotation="90 0 180" class="clickable"
            event-set__click="_target: #camera; position: 0 50000 0">
        </a-image>

        <a-image color="transparant" position="-15 40003 -15" width="3" height="3" src="Image/info.png" rotation="0 45 0" class="clickable"
            event-set__click="_target: #popupPlane4; visible: true">
        </a-image>

        <a-plane
            id="popupPlane4"
            visible="false"
            position="-5 40000 -1"
            width="5"
            height="3"
            color="#ffffff"
            rotation="0 90 0"
            material="opacity: 0.9; shader: flat">
            <a-text
                value="Taman Merbabu, atau Merbabu Family Park, adalah ruang terbuka hijau seluas 3.924 meter persegi yang terletak di Jalan Merbabu, Kelurahan Oro-Oro Dowo, Kecamatan Klojen, Kota Malang. Diresmikan pada 14 Juni 2014, taman ini merupakan hasil kerja sama antara pemerintah kota dan pihak swasta. Dengan berbagai fasilitas seperti area bermain anak, jogging track, dan taman bunga, taman ini menjadi tempat ideal untuk rekreasi keluarga. Suasananya yang asri dan sejuk menjadikannya tempat yang nyaman untuk bersantai."
                align="center"
                color="#000000"
                position="0 0 0.1"
                width="3.5"
                
                >
                
            </a-text>
            <a-plane
                id="closeButton4"
                position="2.2 1.3 0.1"
                width="0.5"
                height="0.3"
                color="#ff0000"
                class="clickable"
                text="value: X; align: center; color: #ffffff; width: 2"
                event-set__click="_target: #popupPlane4; visible: false">
            </a-plane>
        </a-plane>

        <!-- Merbabu Park 2 -->
        <a-image color="transparant" position="0 49995 -10" width="3" height="3" src="Image/arrow.png" rotation="90 0 270" class="clickable"
            event-set__click="_target: #camera; position: 0 40000 0">
        </a-image>

        <a-image color="transparant" position="0 49995 10" width="3" height="3" src="Image/arrow.png" rotation="90 0 90" class="clickable"
            event-set__click="_target: #camera; position: 0 60000 0">
        </a-image>

        <!-- Merbabu Park 3 -->
        <a-image color="transparant" position="10 59995 0" width="3" height="3" src="Image/arrow.png" rotation="90 0 0" class="clickable"
            event-set__click="_target: #camera; position: 0 50000 0">
        </a-image>

        <a-image color="transparant" position="-10 59995 0" width="3" height="3" src="Image/arrow.png" rotation="90 0 180" class="clickable"
            event-set__click="_target: #camera; position: 0 70000 0">
        </a-image>

        <!-- Merbabu Park 4 -->
        <a-image color="transparant" position="8 69995 -5" width="3" height="3" src="Image/arrow.png" rotation="90 0 300" class="clickable"
            event-set__click="_target: #camera; position: 0 60000 0">
        </a-image>



        <!-- Camera entity -->
        <a-entity id="camera" camera position="0 0 0" look-controls>
            <a-cursor id="cursor"
                animation__click="property: scale; startEvents: click; from: 0.1 0.1 0.1; to: 1 1 1; dur: 150"
                animation__fusing="property: fusing; startEvents: fusing; from: 1 1 1; to: 0.1 0.1 0.1; dur: 1500"
                event-set__mouseenter="_event: mouseenter; color: springgreen"
                event-set__mouseleave="_event: mouseleave; color: white"
                raycaster="objects: .clickable"
                color="white"></a-cursor>
        </a-entity>

    </a-scene>
</body>

</html>