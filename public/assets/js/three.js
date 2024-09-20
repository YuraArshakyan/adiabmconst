import * as THREE from 'three';
import { OrbitControls } from 'https://unpkg.com/three@0.119.1/examples/jsm/controls/OrbitControls.js';


function projects() {
    // Инициализация сцены, камеры и рендера
    const canvas = document.querySelector('.projects')
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer();
    renderer.setSize(canvas.clientWidth, canvas.clientHeight);
    renderer.setAnimationLoop( animate );
    canvas.appendChild(renderer.domElement);

    // Массив текстур для изображений
    const texture = new THREE.TextureLoader().load('contact.jpg');;

    // Массив для хранения мешей изображений
    const images = [];
    const radius = 5; // Радиус спирали
    const spiralHeight = 15; // Высота спирали

    for (let i = 0; i < 30; i++) {
        // Создание плоскости для изображения
        const geometry = new THREE.PlaneGeometry(1.5, 1);
        const material = new THREE.MeshBasicMaterial({ map: texture, side: THREE.DoubleSide });
        const plane = new THREE.Mesh(geometry, material);
        
            // // Позиционирование изображения по спирали
            const angle = i * 0.4; // Угол между изображениями
            const x = radius * Math.cos(angle);
            const y = (i / 30) * spiralHeight; // Позиция по оси Y для создания высоты спирали
            const z = radius * Math.sin(angle);
    
            plane.position.set(x, y, z);
            plane.quaternion.copy(camera.quaternion);

            // plane.lookAt(0, 0, 0); // Повернуть изображение к центру
    
            images.push(plane);
            
        



        scene.add(plane);
    }

    // Установить камеру так, чтобы она смотрела на первое изображение
    const controls = new OrbitControls( camera, renderer.domElement );

    camera.position.set(0,0,radius*2);

    controls.update();

    camera.lookAt(images[0].position);

    // Анимация рендера
    function animate() {
        renderer.render(scene, camera);
    }

    animate();
}

projects();
