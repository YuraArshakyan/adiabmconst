import * as THREE from 'three';
import { OrbitControls } from 'https://unpkg.com/three@0.119.1/examples/jsm/controls/OrbitControls.js';
import { Vector3 } from 'three';


function projects() {
    const canvas = document.querySelector('.projects')
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer();
    renderer.setSize(canvas.clientWidth, canvas.clientHeight);
    renderer.setAnimationLoop( animate );
    canvas.appendChild(renderer.domElement);

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



    // camera.position.set(images[29].position.x,images[29].position.y, 1);

    // console.log(images[29].position.y);
    // console.warn(images[28].position.y);
    // console.log(images[27].position.y);
    // console.log(images[26].position.y);
    // console.log(images[25].position.y);
    // console.log(images[24].position.y);
    // camera.rotation.y = Math.cos(-500); 
    // camera.rotation.y = Math.cos(Math.PI+2); 

    camera.position.set(images[current_index].position.x, images[current_index].position.y, 5);
    camera.lookAt(images[current_index].position);


    // const controls = new OrbitControls( camera, renderer.domElement );
    // controls.update();
    // camera.lookAt(new THREE.Vector3(0,0,10));


    canvas.addEventListener('wheel', (event) => {
        // console.log(window.scrollY);
        current_index--;
        if(event.deltaY > 0){
            scene.rotation.y -= 0.1;
            scene.position.y += 0.06;

            // console.log((current_index/30)*10);
        }else{
            scene.rotation.y += 0.1;
            scene.position.y -= 0.06;
            // scene.position.y += (current_index/30)*10 -3;
            // scene.position.x -= canvas.scrollY/10000;
        }
        
        
        // camera.position.set(images[current_index].position.x, images[current_index].position.y, 5);
        // camera.lookAt(images[current_index].position);
       
    })
    


    function animate() {
        // scene.rotation.y -= 0.01;
        // scene.position.y += 0.001;
        // 
        // camera.position.y -= 0.005;
        
        images.forEach(plane => {
            plane.lookAt(camera.position);
        });
        renderer.render(scene, camera);
    }

    animate();
}

projects();
