import * as THREE from 'three';
import { OrbitControls } from 'https://unpkg.com/three@0.119.1/examples/jsm/controls/OrbitControls.js';
import { GLTFLoader } from 'https://unpkg.com/three@0.119.1/examples/jsm/loaders/GLTFLoader.js';
import { Vector3 } from 'three';


function projects() {
    const canvas = document.querySelector('.projects')


    canvas.addEventListener('scroll', function(e){
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
    canvas.addEventListener('scroll', (event) => {
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
    window.addEventListener('scroll', function(e){
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