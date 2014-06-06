<!DOCTYPE HTML>
<html>
<head><title>Pouar's Class Project Site</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="doc.css" /></head>
<body style="">
        <script src="three.min.js">
        </script>
        <script>
            window.requestAnimFrame = (function(callback){
                return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                window.oRequestAnimationFrame ||
                window.msRequestAnimationFrame ||
                function(callback){
                    window.setTimeout(callback, 1000 / 60);
                };
            })();
            
            function animate(lastTime, angularSpeed, three){
                // update
                var date = new Date();
                var time = date.getTime();
                var timeDiff = time - lastTime;
                var angleChange = angularSpeed * timeDiff * 2 * Math.PI / 1000;
                three.plane.rotation.y += angleChange;
                three.plane2.rotation.y += angleChange;
                lastTime = time;
                
                // render
                three.renderer.render(three.scene, three.camera);
                
                // request new frame
                requestAnimFrame(function(){
                    animate(lastTime, angularSpeed, three);
                });
            }
            
            window.onload = function(){
                var angularSpeed = 0.2; // revolutions per second
                var lastTime = 0;
                
                var renderer = new THREE.WebGLRenderer();
                renderer.setSize(window.innerWidth, window.innerHeight);
                document.body.appendChild(renderer.domElement);
                
                // camera
                var camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 1, 900);
        camera.position.z = 600;
        camera.position.y = -50;
                
                // scene
                var scene = new THREE.Scene();
		scene.add(camera);

        // material
        var material = new THREE.MeshBasicMaterial({
            map: THREE.ImageUtils.loadTexture("marioskatehq4x.png")
        });
	material.map.needsUpdate = true; //ADDED
                
                // plane
                
 		var plane = new THREE.Mesh(new THREE.PlaneGeometry(400, 400), material);
                plane.overdraw = true;
                scene.add(plane);
 		var plane2 = new THREE.Mesh(new THREE.PlaneGeometry(400, 400), material);
                plane2.overdraw = true;
                scene.add(plane2);
                
                // create wrapper object that contains three.js objects
                var three = {
                    renderer: renderer,
                    camera: camera,
                    scene: scene,
                    plane: plane,
                    plane2: plane2
                };
		three.plane2.rotation.y = 1 * Math.PI;
                
                /*
                 * wait for texture image to load before
                 * starting the animation
                 */
                var textureImg = new Image();
                textureImg.onload = function(){
                    animate(lastTime, angularSpeed, three, this);
                };
                textureImg.src = "marioskatehq4x.png";
            };
        </script>
</body>
</html>
