import * as THREE from 'three';
import { OrbitControls } from 'https://unpkg.com/three@0.119.1/examples/jsm/controls/OrbitControls.js';
import { GLTFLoader } from 'https://unpkg.com/three@0.119.1/examples/jsm/loaders/GLTFLoader.js';
import { Vector3 } from 'three';


function projects() {
    const canvas = document.querySelector('.projects')
    const renderer = new THREE.WebGLRenderer();

    renderer.setSize(canvas.clientWidth, canvas.clientHeight);
    renderer.setClearColor(0x000000);
    renderer.setPixelRatio(window.devicePixelRatio);

    renderer.setAnimationLoop( animate );
    canvas.appendChild(renderer.domElement);
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(100, window.innerWidth / window.innerHeight, 1, 1000);
    const texture = new THREE.TextureLoader().load('contact.jpg');
    const texture1 = new THREE.TextureLoader().load('form-contact-right.jpg');
    const images = [];
    const radius = 3; 
    const spiralHeight = 10;
    let current_index = 29;
    for (let i = 0; i < 30; i++) {
        const geometry = new THREE.PlaneGeometry(1.5, 1);
        if(i == 29){
            const material = new THREE.MeshBasicMaterial({ map: texture1, side: THREE.DoubleSide });
            const plane = new THREE.Mesh(geometry, material);
            const angle = i * 0.5; 
            const x = radius * Math.cos(angle);
            const y = (i / 30) * spiralHeight;
            const z = radius * Math.sin(angle) + 0.5;
            plane.position.set(x, y, z);
            images.push(plane);
            scene.add(plane);
        }else{
            const material = new THREE.MeshBasicMaterial({ map: texture, side: THREE.DoubleSide });
            const plane = new THREE.Mesh(geometry, material);
            const angle = i * 0.5; 
            const x = radius * Math.cos(angle);
            const y = (i / 30) * spiralHeight;
            const z = radius * Math.sin(angle) + (i === 29 ? 0.5 : 0);
            plane.position.set(x, y, z);
            images.push(plane);           
            scene.add(plane);
        }
    }

    camera.position.set(0, 10, 5);
    camera.lookAt(0,8,0);
    canvas.addEventListener('wheel', (event) => {
        current_index--;
        if(event.deltaY > 0){
            scene.rotation.y -= 0.1;
            scene.position.y += 0.065;

        }else{
            scene.rotation.y += 0.1;
            scene.position.y -= 0.065;

        }
        if (mesh) {

        }
        console.log(scene.position.y);

       
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
        mesh.position.set(0, 5, 0);
        mesh.rotation.x = 0;
        mesh.rotation.y = 90;
        mesh.color = 0xffffff;
        scene.add(mesh);

    })
    
    function animate() {
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

    renderer.setSize(canvas.clientWidth, canvas.clientHeight);
    renderer.setClearColor(0xffffff, 1);
    renderer.setPixelRatio(window.devicePixelRatio);

    renderer.setAnimationLoop( animate );
    canvas.appendChild(renderer.domElement);
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(100, window.innerWidth / window.innerHeight, 0.1, 1000);


    camera.position.z = 0;
    // camera.lookAt(0,8,0);

    const bgGeometry = new THREE.PlaneGeometry(0.01, 0.01); // Adjust size as needed
    const bgMaterial = new THREE.MeshBasicMaterial({ color: 0xffffff });
    const backgroundPlane = new THREE.Mesh(bgGeometry, bgMaterial);
    backgroundPlane.position.z = -1; // Position it behind the transparent plane
    scene.add(backgroundPlane);

  

    let mesh;

   


    const Ambient = new THREE.AmbientLight(0xffffff, 1);
    // spotLight.shadow.mapSize.width = 1024;
    // spotLight.shadow.mapSize.height = 1024;
    // spotLight.position.set(90, 50, 60);

    scene.add(Ambient);
  
//    const controls = new OrbitControls( camera, renderer.domElement );
//     controls.update();
    const loader = new GLTFLoader().setPath('/assets/js/models/');
    loader.load( 'scene.gltf', ( gltf ) => {
        mesh = gltf.scene;
        
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
        
        const cutScreen = new THREE.Mesh(cutoutScreen, cutoutMaterial);
        cutScreen.position.set(box.getCenter(new THREE.Vector3()).x- 0.0779, 
        box.getCenter(new THREE.Vector3()).y-0.33, 
        0); 

        cutScreen.position.z = -0.53; 
        
        scene.add(cutScreen);
        
        mesh.rotation.y = 91.11;

        scene.add(mesh);

    })
    camera.position.z = -0.43;

    window.addEventListener('wheel', function(e){
        // console.log(e.deltaY);
        // console.log(camera.position.z);
        if(e.deltaY > 0 && camera.position.z < 0){
            camera.position.z += 0.02;
            console.log(camera.position.z);
        }
        if(camera.position.z >= 0){
            // scene.rotateY -= 0.1;
        }
    }, {passive:false});

    // camera.position.x = 0.04;
    function animate() {
        if (mesh) {
            // mesh.rotation.y += 0.1; 
        }
        renderer.render(scene, camera);

    }
    animate();
}
iphoneScreen()