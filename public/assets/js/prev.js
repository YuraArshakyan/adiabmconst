import * as THREE from 'three';
import { OrbitControls } from 'https://unpkg.com/three@0.119.1/examples/jsm/controls/OrbitControls.js';
import { GLTFLoader } from 'https://unpkg.com/three@0.119.1/examples/jsm/loaders/GLTFLoader.js';
// import { Vector3 } from 'three';


function projects() {
    
    
    const canvas = document.querySelector('.projects')
    const renderer = new THREE.WebGLRenderer();
    // renderer.outputColorSpace = THREE.SRGBColorSpace;

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
        // console.log(window.scrollY);
        current_index--;
        if(event.deltaY > 0){
            scene.rotation.y -= 0.1;
            scene.position.y += 0.065;

            // console.log((current_index/30)*10);
        }else{
            scene.rotation.y += 0.1;
            scene.position.y -= 0.065;
            // scene.position.y += (current_index/30)*10 -3;
            // scene.position.x -= canvas.scrollY/10000;
        }
        if (mesh) {
            // mesh.position.y -= 0.05;
            // const distance = 0; // Adjust this value for how far the mesh should be from the camera
            // const direction = new THREE.Vector3();
            // camera.getWorldDirection(direction);
            // mesh.position.copy(scene.position).add(direction.multiplyScalar(distance));
        }
        console.log(scene.position.y);
        // camera.position.set(images[current_index].position.x, images[current_index].position.y, 5);
        // camera.lookAt(images[current_index].position);
       
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
    // const groundMesh = new THREE.Mesh(groundGeometry, groundMaterial);
    // scene.add(groundMesh);

    const spotLight = new THREE.SpotLight(0xffffff, 3, 0, 1);
    spotLight.position.set(1, -3, 15);
    scene.add(spotLight);

    const loader = new GLTFLoader().setPath('/assets/js/models/');
    loader.load( 'abmstl.gltf', ( gltf ) => {
        mesh = gltf.scene;
        // const mesh = gltf.scene;
        mesh.position.set(0, 5, 0);
        // mesh.lookAt(0,-100,0)
        mesh.rotation.x = 0;
        mesh.rotation.y = 90;
        mesh.color = 0xffffff;
        scene.add(mesh);

    })
    
    // camera.lookAt(new THREE.Vector3(0,0,10));
    function animate() {
        images.forEach(plane => {
            plane.lookAt(camera.position);
        });
        
        if (mesh) {
            // mesh.position.y += 0.01;
            // const distance = 0; // Adjust this value for how far the mesh should be from the camera
            // const direction = new THREE.Vector3();
            // camera.getWorldDirection(direction);
            // mesh.position.copy(scene.position).add(direction.multiplyScalar(distance));
        }
        // scene.rotation.y += 0.01
        // mesh.rotation.y += 0.1;
        // requestAnimationFrame(animate);
        renderer.render(scene, camera);
    }
    // const controls = new OrbitControls( camera, renderer.domElement );
    // controls.update();
    animate();
    // const loader = new GLTFLoader().setPath('/assets/js/models/');
        
    // loader.load( 'scene.gltf', ( gltf ) => {
    //     gltf.animations; // Array<THREE.AnimationClip>
    //     gltf.scene; // THREE.Group
    //     gltf.scenes; // Array<THREE.Group>
    //     gltf.cameras; // Array<THREE.Camera>
    //     gltf.asset; // Object
    //     const ex = gltf; 
    //     // const mesh = gltf.scene;
    //     // mesh.position.set(0, 1.05, -1);
    //     scene.add(ex);

    // })
    
    // const texture = new THREE.TextureLoader().load('contact.jpg');
    // const texture1 = new THREE.TextureLoader().load('form-contact-right.jpg');

    // const images = [];
    // const radius = 3; 
    // const spiralHeight = 10; 

    // let current_index = 29;


    // for (let i = 0; i < 30; i++) {
    //     const geometry = new THREE.PlaneGeometry(1.5, 1);
    //     if(i == 29){
    //         const material = new THREE.MeshBasicMaterial({ map: texture1, side: THREE.DoubleSide });
    //         const plane = new THREE.Mesh(geometry, material);
    //         const angle = i * 0.5; 
    //         const x = radius * Math.cos(angle);
    //         const y = (i / 30) * spiralHeight;
    //         const z = radius * Math.sin(angle) + 0.5;
    //         plane.position.set(x, y, z);
    //         images.push(plane);
    //         scene.add(plane);
    //     }else{
    //         const material = new THREE.MeshBasicMaterial({ map: texture, side: THREE.DoubleSide });
    //         const plane = new THREE.Mesh(geometry, material);
    //         const angle = i * 0.5; 
    //         const x = radius * Math.cos(angle);
    //         const y = (i / 30) * spiralHeight;
    //         const z = radius * Math.sin(angle) + (i === 29 ? 0.5 : 0);
    //         plane.position.set(x, y, z);
    //         images.push(plane);           
    //         scene.add(plane);
    //     }
    // }



    // camera.position.set(images[29].position.x,images[29].position.y, 1);

    // console.log(images[29].position.y);
    // console.warn(images[28].position.y);
    // console.log(images[27].position.y);
    // console.log(images[26].position.y);
    // console.log(images[25].position.y);
    // console.log(images[24].position.y);
    // camera.rotation.y = Math.cos(-500); 
    // camera.rotation.y = Math.cos(Math.PI+2); 

    // camera.position.set(0, 10, 5);
    // camera.lookAt(0,8,0);


    // const controls = new OrbitControls( camera, renderer.domElement );
    // controls.update();
    // camera.lookAt(new THREE.Vector3(0,0,10));


    // canvas.addEventListener('wheel', (event) => {
    //     // console.log(window.scrollY);
    //     current_index--;
    //     if(event.deltaY > 0){
    //         scene.rotation.y -= 0.1;
    //         scene.position.y += 0.065;

    //         // console.log((current_index/30)*10);
    //     }else{
    //         scene.rotation.y += 0.1;
    //         scene.position.y -= 0.065;
    //         // scene.position.y += (current_index/30)*10 -3;
    //         // scene.position.x -= canvas.scrollY/10000;
    //     }
        
        
    //     // camera.position.set(images[current_index].position.x, images[current_index].position.y, 5);
    //     // camera.lookAt(images[current_index].position);
       
    // })
    


    
}

projects();
