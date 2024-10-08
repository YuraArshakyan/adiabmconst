import * as THREE from 'three';
import { OrbitControls } from 'https://unpkg.com/three@0.119.1/examples/jsm/controls/OrbitControls.js';
import { GLTFLoader } from 'https://unpkg.com/three@0.119.1/examples/jsm/loaders/GLTFLoader.js';
import { Vector3 } from 'three';


function projects() {
    const canvas = document.querySelector('.projects')


    canvas.addEventListener('wheel', function(e){
        e.preventDefault();
    }, {passive:false});

    const renderer = new THREE.WebGLRenderer( { alpha: true } );

    renderer.setSize(canvas.clientWidth, canvas.clientHeight);
    let color = 0x000000;
    renderer.setClearColor(color, 0);
    setInterval(() => {
        color = 0x000000;
        rerenderBG();
    }, 4000);
    renderer.setClearColor(color, 0);

    function rerenderBG(){
        renderer.setClearColor(color, 0);
    }
    renderer.setPixelRatio(window.devicePixelRatio);

    renderer.setAnimationLoop( animate );
    canvas.appendChild(renderer.domElement);


    console.log(canvas.clientWidth);


    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(100, canvas.clientWidth / canvas.clientHeight, 1, 1000);


    const video = document.createElement('video');
    video.src = 'first.mov'; // Replace with your video path
    video.load();
    video.loop = true;
    video.muted = true; // Required for autoplay on most browsers
    video.play();





    const texture = new THREE.VideoTexture(video);

    const texture1 = new THREE.TextureLoader().load('form-contact-right.jpg');
    const images = [];
    const radius = 3; 
    const spiralHeight = 1;
    let current_index = 4;
    for (let i = 0; i < 5; i++) {
        const geometry = new THREE.PlaneGeometry(1.5, 1);
        {
            const material = new THREE.MeshBasicMaterial({ map: texture, side: THREE.OneS });
            const plane = new THREE.Mesh(geometry, material);

            const angle = (i / 4) * (Math.PI * 2); // Full circle in radians
            const x = radius * Math.cos(angle);
            const z = radius * Math.sin(angle);
            const y = 0; // Set y position if needed

            plane.position.set(x, y, z);
            images.push(plane);           
            scene.add(plane);
        }
    }

    camera.position.set(0, 0, 5);
    camera.lookAt(0,0,0);
    canvas.addEventListener('wheel', (event) => {
        current_index--;
        if(event.deltaY > 0){
            scene.rotation.y -= 0.1;
            // scene.position.y += 0.065;

        }else{
            scene.rotation.y += 0.1;
            // scene.position.y -= 0.065;

        }
        if (mesh) {

        }

       
    })

    let disabledScroll = false;  
    window.addEventListener('wheel', function(e){
        if(scrollY >= 3403 && scene.position.y < 9){
            disabledScroll = true;
        }else{
            disabledScroll = false;  
        }
        if(disabledScroll == true){
            // e.preventDefault();
        }
    }, {passive:false});
    
    let mesh;
    const groundGeometry = new THREE.PlaneGeometry(20, 20, 32, 32);
    groundGeometry.rotateX(-Math.PI / 2);
    const groundMaterial = new THREE.MeshStandardMaterial({
        color: 0x555555,
        side: THREE.DoubleSide
    });


    const spotLight = new THREE.SpotLight(0xffffff, 3, 0, 1);
    spotLight.position.set(1, -3, 15);
    scene.add(spotLight);

    const loader = new GLTFLoader().setPath('/assets/js/models/');
    loader.load( 'abmstl.gltf', ( gltf ) => {
        mesh = gltf.scene;
        mesh.position.set(0, 0, 0);
        mesh.rotation.x = 0;
        mesh.rotation.y = 90;
        mesh.color = 0xffffff;
        scene.add(mesh);

    })
    
    function animate() {
        scene.rotation.y -= 0.001;
        images.forEach(plane => {
            plane.lookAt(camera.position);
        });
        
        if (mesh) {
        }
        renderer.render(scene, camera);
    }
    animate();
}
projects();







































function iphoneScreen() {
    const canvas = document.querySelector('.iponemodel')
    const renderer = new THREE.WebGLRenderer({alpha: true});
    let group;
    renderer.setSize(canvas.clientWidth, canvas.clientHeight);
    renderer.setClearColor(0x000000, 0);
    renderer.setPixelRatio(window.devicePixelRatio);

    renderer.setAnimationLoop( animate );
    canvas.appendChild(renderer.domElement);
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(100, canvas.clientWidth / canvas.clientHeight, 0.1, 1000);


    // camera.position.z = 0;
    camera.lookAt(0,0,0);

    const bgGeometry = new THREE.PlaneGeometry(0.01, 0.01); // Adjust size as needed
    const bgMaterial = new THREE.MeshBasicMaterial({ color: 0xffffff });
    const backgroundPlane = new THREE.Mesh(bgGeometry, bgMaterial);
    backgroundPlane.position.z = -1; // Position it behind the transparent plane
    scene.add(backgroundPlane);

  

    let mesh;
    let cutScreen;
   

    const Ambient = new THREE.SpotLight(0xffffff, 2)
    // const Ambient = new THREE.AmbientLight(0xffffff, 45);
    Ambient.shadow.mapSize.width = 1024;
    Ambient.shadow.mapSize.height = 1024;
    Ambient.position.set(90, 50, 60);

    scene.add(Ambient);
  
//    const controls = new OrbitControls( camera, renderer.domElement );
//     controls.update();
    const loader = new GLTFLoader().setPath('/assets/js/models/');
    loader.load( 'Sketchfab_Scene1.gltf', ( gltf ) => {
        mesh = gltf.scene;
        
        mesh.position.z = -0.5433;


        const box = new THREE.Box3().setFromObject(mesh);

        const size = box.getSize(new THREE.Vector3());

        const desiredWidth = size.x * 0.898; 
        const desiredHeight = size.y * 0.96;
    
        const borderRadius = 0.037; // Adjust for rounded corners
        const shape = new THREE.Shape();
        shape.absarc(borderRadius, borderRadius, borderRadius, Math.PI, Math.PI * 1.5, false); // Top-left corner
        shape.lineTo(desiredWidth - borderRadius, 0);
        shape.absarc(desiredWidth - borderRadius, borderRadius, borderRadius, Math.PI * 1.5, 0, false); // Top-right corner
        shape.lineTo(desiredWidth, desiredHeight - borderRadius);
        shape.absarc(desiredWidth - borderRadius, desiredHeight - borderRadius, borderRadius, 0, Math.PI / 2, false); // Bottom-right corner
        shape.lineTo(borderRadius, desiredHeight);
        shape.absarc(borderRadius, desiredHeight - borderRadius, borderRadius, Math.PI / 2, Math.PI, false); // Bottom-left corner
        shape.lineTo(0, borderRadius);
        shape.absarc(borderRadius, borderRadius, borderRadius, Math.PI, Math.PI * 1.5, false); // Top-left corner close
    
        const cutoutScreen = new THREE.ShapeGeometry(shape);
        const cutoutMaterial = new THREE.MeshBasicMaterial({
            color: 0x000000, 
            opacity: 0.0, 
        });
        
        cutScreen = new THREE.Mesh(cutoutScreen, cutoutMaterial);
        cutScreen.geometry.center();
      

        cutScreen.position.set(box.getCenter(new THREE.Vector3()).x+0.0801, 
        box.getCenter(new THREE.Vector3()).y, 
        0); 

        cutScreen.position.z = -0.53; 
        
        
        mesh.rotation.y = 91.11;

        scene.add(mesh);

        group = new THREE.Group();
        group.add(cutScreen);
        group.add(mesh);
        scene.add(group);

        
    })
    camera.position.z = 0;
    camera.position.x = 0;

    // window.addEventListener('wheel', function(e){
    //     if(e.deltaY > 0 && camera.position.z < 0){
    //         // camera.position.z += 0.01;
    //     }
    //     else if(e.deltaY < 0 && camera.position.z >= -0.429){
    //         // camera.position.z -= 0.01;
    //         // scene.rotateY -= 0.1;
    //     }
    // }, {passive:false});

    // // camera.position.x = 0.04;
    function animate() {
        // camera.rotation.y += 0.01;
        if (mesh) {
            // scene.rotation.y += 0.1;
        }
        
        renderer.render(scene, camera);

    }
    animate();
}
iphoneScreen()