<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina web</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet"  href="estile.css">
<body class="font-sans bg-gray-50">

    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <img src="https://images.pexels.com/photos/16339049/pexels-photo-16339049/free-photo-of-elegant-man-and-woman-in-front-of-a-prada-store.jpeg?auto=compress&cs=tinysrgb&w=600/120x50" class="h-12">
            </div>
            
            <nav class="hidden md:flex space-x-8">
                <a href="#inicio" class="text-gray-700 hover:text-black font-medium">Inicio</a>
                <a href="pagina1.html" class="Mujeres">Mujer</a>
                <a href="pagina2.html" class="Hombres">Hombre</a>
                <a href="usuario.php" class="Hombres">Usuario</a>
            </nav>
            
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <button id="cart-btn" class="text-gray-700 hover:text-black">
                        <i class="fas fa-shopping-bag text-xl"></i>
                        <span id="cart-count" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full h-5 w-5 flex items-center justify-center cart-notification hidden">0</span>
                    </button>
                </div>
                <button class="md:hidden text-gray-700">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="inicio" class="relative bg-gray-900 text-white">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Prada_milano.JPG/440px-Prada_milano.JPG"alt="Abrigo de lana beige para mujer con cinturón y detalles dorados" class="w-full h-80 object-cover">
        <div class="absolute inset-0 flex items-center justify-center text-center">
            <div class="max-w-2xl px-4">
               <i><h1 class="text-4xl md:text-5xl font-bold mb-4">Bienvenido a FacHion PraDa</h1></i>
                <p class="text-xl mb-8">Descubre prendas cuidadosamente seleccionadas para personas con estilo</p>
                <a href="#novedades" class="bg-white text-black px-8 py-3 font-medium hover:bg-gray-100 transition duration-300 inline-block">Ver colección</a>
            </div>
        </div>
    </section>



<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <defs>
    <symbol id="icon-cross" viewBox="0 0 32 32">
      <title>close</title>
      <path d="M31.7 25.7L22 16l9.7-9.7a1 1 0 0 0 0-1.4L27.1.3a1 1 0 0 0-1.4 0L16 10 6.3.3a1 1 0 0 0-1.4 0L.3 4.9a1 1 0 0 0 0 1.4L10 16 .3 25.7a1 1 0 0 0 0 1.4l4.6 4.6a1 1 0 0 0 1.4 0L16 22l9.7 9.7a1 1 0 0 0 1.4 0l4.6-4.6a1 1 0 0 0 0-1.4z" />
    </symbol>
  </defs>
</svg>
           
    <!-- About Section -->
    <section class="py-20 px-4">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0 md:pr-12">
                    <img src="https://theimpression.com/wp-content/uploads/2023/07/How-Fashion-Companies-Can-Invest-In-Capitalize-On-AI-Insights-article-the-impression-008.jpg" alt="Detalle de costura artesanal en prenda de alta calidad" class="rounded-lg shadow-xl">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">MANIFIESTO PRAVA</h2>
                    <p class="text-lg mb-6">FacHion PraDa desafía las convenciones con un estilo que fusiona el lujo tradicional con la energía raw de la calle.</p>
                    <p class="text-lg mb-8">Nuestras colecciones son declaraciones de identidad, creadas para quienes buscan trascender las tendencias con piezas icónicas que marcan época.</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="font-bold text-lg mb-2">Materiales Premium</h3>
                            <p>Algodones orgánicos, sedas naturales y lanas certificadas.</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="font-bold text-lg mb-2">Producción Ética</h3>
                            <p>Trabajamos con talleres que garantizan condiciones laborales justas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <center><i><h1 class="text-4xl md:text-5xl font-bold mb-4">FacHion PraDa</h1></i></center>
     <center><i><h4 class="text-4xl md:text-3xl font-bold mb-4"> ¿De qué forma está comprometida Prada con la sostenibilidad?</h4></i></center>
    
<pre><p>FacHion PraDa es más que una marca...es un movimiento que redefine la moda contemporánea. 
Iniciativas de Sostenibilidad de Prada
Préstamos de Sostenibilidad: Prada ha firmado un préstamo de sostenibilidad que vincula sus finanzas a objetivos ambientales, como alcanzar emisiones netas de carbono cero para 2050 y eliminar el plástico de un solo uso para 2030.
Uso de Materiales Reciclados: La marca ha introducido el nailon reciclado, conocido como Econyl, en su producción. Este material se obtiene de plásticos recuperados del mar y desechos industriales, lo que reduce el impacto ambiental de la producción de nailon.
Compromiso con la Energía Renovable: Prada ha firmado acuerdos para utilizar energía 100% renovable en sus instalaciones italianas, lo que incluye la modernización de sistemas de iluminación y calefacción para mejorar la eficiencia energética.
Diversidad e Inclusión: Además de sus compromisos ambientales, Prada ha establecido un Consejo Asesor de Diversidad e Inclusión, reconociendo que la sostenibilidad también implica un compromiso social y ético.
Educación y Conciencia: La marca organiza conferencias y eventos para discutir la sostenibilidad y cómo puede contribuir a un futuro mejor, fomentando un diálogo abierto sobre sus prácticas y objetivos.
</p></pre>

<!--imagen-->
<div style="text-align:center;">
    
    <center><img src="https://tse2.mm.bing.net/th/id/OIP.3aqRxY_p2qlg0-XomOqfhwAAAA?w=417&h=626&rs=1&pid=ImgDetMain&o=7&rm=3" alt="description"></center>
</div>
   

      <!-- Blog Section -->
    <section id="blog" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Tendencias de Moda</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <article class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition duration-300">
                    <img src="https://tse3.mm.bing.net/th/id/OIP.Umegl3OxjsrenHe5MpVV5AHaJR?w=500&h=626&rs=1&pid=ImgDetMain&o=7&rm=3/800x500" alt="Tendencias de otoño/invierno 2023 mostrando abrigos largos, botas y accesorios en tonos tierra" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <center><span class="text-sm text-gray-500">15 Septiembre 2024</span></center>
                        <h3 class="font-bold text-xl my-2">Tendencias Otoño/Invierno 2023</h3>
                        <p class="text-gray-700 mb-4">Descubre las prendas y accesorios que dominarán esta temporada fría, desde abrigos oversize hasta botas de combate.</p>
                    </div>
                </article>
                
                <!-- Blog Post 2 -->
                <article class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition duration-300">
                    <img src="https://imagescdn.simons.ca/images/5103-8773-19-A1_3/la-chemise-fleurs-aquarelle-b-coupe-moderne-b.jpg?__=6/800x500" alt="Conjuntos urbanos modernos para hombre combinando jeans, camisas y chaquetas casuales" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <center><span class="text-sm text-gray-500">5 Septiembre 2025</span></center>
                        <h3 class="font-bold text-xl my-2">Estilo Urbano para Hombre</h3>
                        <p class="text-gray-700 mb-4">Cómo combinar prendas básicas para crear looks urbanos modernos y versátiles para el día a día.</p>
                    </div>
                </article>
                
                <!-- Blog Post 3 -->
                <article class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition duration-300">
                    <img src="https://tse1.explicit.bing.net/th/id/OIP.VYyCOBdvzMuR14jjGJ9TGAHaKG?rs=1&pid=ImgDetMain&o=7&rm=3/800x500" alt="Accesorios de moda incluyendo bolsos, bufandas y joyería minimalista sobre fondo neutro" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <center><span class="text-sm text-gray-500">28 Agosto 2025</span></center>
                        <h3 class="font-bold text-xl my-2">Accesorios que Transforman</h3>
                        <p class="text-gray-700 mb-4">Los accesorios correctos pueden elevar cualquier outfit. Conoce las piezas clave de esta temporada.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

 <!--Video-->
   <video width="640" height="360" controls>
    <source src="https://youtu.be/d8t946x5Q_E.mp4" type="video/mp4">
    Tu navegador no soporta la etiqueta de video.
</video>


    <!-- Featured Products -->
    <section id="novedades" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Nuestra coleccion</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden product-hover transition duration-300">
                    <div class="relative">
                        <img src="https://tse2.mm.bing.net/th/id/OIP.NnObgmwyVSqd7yIV7-uNkAAAAA?w=400&h=500&rs=1&pid=ImgDetMain&o=7&rm=3/600x800" alt="Abrigo de lana beige para mujer con cinturón y detalles dorados" class="w-full h-80 object-cover">
                        <div class="absolute top-3 left-3 bg-white px-2 py-1 rounded text-sm font-medium">Nuevo</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Abrigo Clásico Beige</h3>
                        <p class="text-gray-600 text-sm mb-2">Mujer</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold">$89.99</span>
                            <button class="add-to-cart text-sm bg-black text-white px-3 py-1 rounded hover:bg-gray-800 transition" data-id="1" data-name="Abrigo Clásico Beige" data-price="89.99">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden product-hover transition duration-300">
                    <img src="https://tse2.mm.bing.net/th/id/OIP.6xpgCZgwNFeFWFAxt86gewHaJ4?rs=1&pid=ImgDetMain&o=7&rm=3/600x800" alt="Chaqueta de cuero negra para hombre con cremallera frontal y corte ajustado" class="w-full h-80 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Chaqueta de Cuero</h3>
                        <p class="text-gray-600 text-sm mb-2">Hombre</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold">$129.99</span>
                            <button class="add-to-cart text-sm bg-black text-white px-3 py-1 rounded hover:bg-gray-800 transition" data-id="2" data-name="Chaqueta de Cuero" data-price="129.99">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden product-hover transition duration-300">
                    <div class="relative">
                        <img src="https://tse4.mm.bing.net/th/id/OIP.EDfyqojEwpOnhfq4I2d0ngHaLH?w=1200&h=1800&rs=1&pid=ImgDetMain&o=7&rm=3/600x800" alt="Vestido negro elegante para fiesta con escote en V y detalles de encaje" class="w-full h-80 object-cover">
                        <div class="absolute top-3 left-3 bg-red-500 text-white px-2 py-1 rounded text-sm font-medium">Oferta</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Vestido Elegante Negro</h3>
                        <p class="text-gray-600 text-sm mb-2">Mujer</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="font-bold">$59.99</span>
                                <span class="text-sm text-gray-500 line-through ml-2">$79.99</span>
                            </div>
                            <button class="add-to-cart text-sm bg-black text-white px-3 py-1 rounded hover:bg-gray-800 transition" data-id="3" data-name="Vestido Elegante Negro" data-price="59.99">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden product-hover transition duration-300">
                    <img src="https://tse2.mm.bing.net/th/id/OIP.ERx_GEpAVUAzZpZiZrBVbQHaJQ?rs=1&pid=ImgDetMain&o=7&rm=3/600x800" alt="Jeans azules ajustados para mujer con roturas modernas y corte de tiro alto" class="w-full h-80 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Jeans</h3>
                        <p class="text-gray-600 text-sm mb-2">Mujer</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold">$49.99</span>
                            <button class="add-to-cart text-sm bg-black text-white px-3 py-1 rounded hover:bg-gray-800 transition" data-id="4" data-name="Jeans Ajustados" data-price="49.99">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Featured Products 2-->
    <section id="novedades" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product 5 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden product-hover transition duration-300">
                    <div class="relative">
                        <img src="https://tse2.mm.bing.net/th/id/OIP.rPGWqYP4iRnjzCpjEoBvxAHaJQ?rs=1&pid=ImgDetMain&o=7&rm=3/600x800" alt="Camiseta de algodon negra" class="w-full h-80 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Camiseta de Botones </h3>
                        <p class="text-gray-600 text-sm mb-2">Hombre</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold">$80.99</span>
                            <button class="add-to-cart text-sm bg-black text-white px-3 py-1 rounded hover:bg-gray-800 transition" data-id="1" data-name="Camiseta de algodon negra" data-price="80.99">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
                </div>
                 <!-- Product 6-->
                <div class="bg-gray-50 rounded-lg overflow-hidden product-hover transition duration-300">
                    <div class="relative">
                        <img src="https://tse4.mm.bing.net/th/id/OIP.dOEP5huOyrt1g2vdiRfWHQHaJQ?rs=1&pid=ImgDetMain&o=7&rm=3600x800" alt="Falda negra" class="w-full h-80 object-cover">
                        <div class="absolute top-3 left-3 bg-red-500 text-white px-2 py-1 rounded text-sm font-medium">Oferta</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Falda Negra</h3>
                        <p class="text-gray-600 text-sm mb-2">Mujer</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="font-bold">$30.99</span>
                                <span class="text-sm text-gray-500 line-through ml-2">$50.99</span>
                            </div>
                            <button class="add-to-cart text-sm bg-black text-white px-3 py-1 rounded hover:bg-gray-800 transition" data-id="3" data-name="Vestido Elegante Negro" data-price="59.99">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product 7 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden product-hover transition duration-300">
                    <img src="https://tse1.mm.bing.net/th/id/OIP.ECpj3-m_s1Qiq9Jrw0M6SQHaJQ?rs=1&pid=ImgDetMain&o=7&rm=3/600x800" alt="Chaqueta de cuero negra para hombre con cremallera frontal y corte ajustado" class="w-full h-80 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Camiseta Blanca</h3>
                        <p class="text-gray-600 text-sm mb-2">Hombre</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold">$200.99</span>
                            <button class="add-to-cart text-sm bg-black text-white px-3 py-1 rounded hover:bg-gray-800 transition" data-id="2" data-name="Chaqueta de Cuero" data-price="129.99">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
                </div>
                
               
                
                <!-- Product  -->
                <div class="bg-gray-50 rounded-lg overflow-hidden product-hover transition duration-300">
                    <img src="https://tse2.mm.bing.net/th/id/OIP.tVQh6XX2K5EE_iZ0bAsuvgHaHa?w=600&h=600&rs=1&pid=ImgDetMain&o=7&rm=3/600x800" alt="Jeans azules ajustados para mujer con roturas modernas y corte de tiro alto" class="w-full h-80 object-cover">
                     <div class="absolute top-3 left-3 bg-white px-2 py-1 rounded text-sm font-medium">Nuevo</div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Chamrra de Mesclilla</h3>
                        <p class="text-gray-600 text-sm mb-2">Hombre</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold">$90.99</span>
                            <button class="add-to-cart text-sm bg-black text-white px-3 py-1 rounded hover:bg-gray-800 transition" data-id="4" data-name="Jeans Ajustados" data-price="49.99">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- Featured Products 4-->
    <section id="novedades" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden product-hover transition duration-300">
                    <div class="relative">
                        <img src="https://tse3.mm.bing.net/th/id/OIP.HDGQIlTxIXyxeyxTy7k9hAHaIX?rs=1&pid=ImgDetMain&o=7&rm=3/600x800" alt="Abrigo de lana beige para mujer con cinturón y detalles dorados" class="w-full h-80 object-cover">
                        <div class="absolute top-3 left-3 bg-white px-2 py-1 rounded text-sm font-medium">Nuevo</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Top blanco para hombre</h3>
                        <p class="text-gray-600 text-sm mb-2">Hombre</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold">$89.99</span>
                            <button class="add-to-cart text-sm bg-black text-white px-3 py-1 rounded hover:bg-gray-800 transition" data-id="1" data-name="Abrigo Clásico Beige" data-price="89.99">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden product-hover transition duration-300">
                    <img src="https://th.bing.com/th/id/R.6ab8fb09094ff24198b93aa0650ae565?rik=WU7E8JQvEE47ng&pid=ImgRaw&r=0/600x800" alt="Chaqueta de cuero negra para hombre con cremallera frontal y corte ajustado" class="w-full h-80 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Top de hombre</h3>
                        <p class="text-gray-600 text-sm mb-2">Hombre</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold">$58.99</span>
                            <button class="add-to-cart text-sm bg-black text-white px-3 py-1 rounded hover:bg-gray-800 transition" data-id="2" data-name="Chaqueta de Cuero" data-price="129.99">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden product-hover transition duration-300">
                    <div class="relative">
                        <img src="https://tse2.mm.bing.net/th/id/OIP.nefppPQG6KNO5rb2NyDU6gHaJQ?rs=1&pid=ImgDetMain&o=7&rm=3/600x800" alt="Vestido negro elegante para fiesta con escote en V y detalles de encaje" class="w-full h-80 object-cover">
                        <div class="absolute top-3 left-3 bg-red-500 text-white px-2 py-1 rounded text-sm font-medium">Oferta</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Top de tela ligera </h3>
                        <p class="text-gray-600 text-sm mb-2">Mujer</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="font-bold">$59.99</span>
                                <span class="text-sm text-gray-500 line-through ml-2">$79.99</span>
                            </div>
                            <button class="add-to-cart text-sm bg-black text-white px-3 py-1 rounded hover:bg-gray-800 transition" data-id="3" data-name="Vestido Elegante Negro" data-price="59.99">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden product-hover transition duration-300">
                    <img src="https://tse3.mm.bing.net/th/id/OIP.n-G6AiGz1fAotMwpPQYYXgHaJQ?rs=1&pid=ImgDetMain&o=7&rm=3/600x800" alt="Jeans azules ajustados para mujer con roturas modernas y corte de tiro alto" class="w-full h-80 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Top</h3>
                        <p class="text-gray-600 text-sm mb-2">Mujer</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold">$60.99</span>
                            <button class="add-to-cart text-sm bg-black text-white px-3 py-1 rounded hover:bg-gray-800 transition" data-id="4" data-name="Jeans Ajustados" data-price="49.99">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </section>
  <!-- Featured Products 5-->
    <section id="novedades" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden product-hover transition duration-300">
                    <div class="relative">
                        <img src="https://tse4.mm.bing.net/th/id/OIP.6v3IM7kGGn65br-JtauuVAHaL3?w=1598&h=2560&rs=1&pid=ImgDetMain&o=7&rm=3/600x800" alt="Abrigo de lana beige para mujer con cinturón y detalles dorados" class="w-full h-80 object-cover">
                        <div class="absolute top-3 left-3 bg-white px-2 py-1 rounded text-sm font-medium">Nuevo</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Top negro</h3>
                        <p class="text-gray-600 text-sm mb-2">Mujer</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold">$90.99</span>
                            <button class="add-to-cart text-sm bg-black text-white px-3 py-1 rounded hover:bg-gray-800 transition" data-id="1" data-name="Abrigo Clásico Beige" data-price="89.99">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden product-hover transition duration-300">
                    <img src="https://tse4.mm.bing.net/th/id/OIP.txzvmHbANPE4GMs0F6kf9wAAAA?rs=1&pid=ImgDetMain&o=7&rm=3/600x800" alt="Chaqueta de cuero negra para hombre con cremallera frontal y corte ajustado" class="w-full h-80 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Chaqueta negra</h3>
                        <p class="text-gray-600 text-sm mb-2">Hombre</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold">$200.99</span>
                            <button class="add-to-cart text-sm bg-black text-white px-3 py-1 rounded hover:bg-gray-800 transition" data-id="2" data-name="Chaqueta de Cuero" data-price="129.99">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden product-hover transition duration-300">
                    <div class="relative">
                        <img src="https://cdnimg.emmiol.com/E/ACDL133TO/2fcb09e52e35245f245bee818e84b644.jpg?resize=350x350/600x800" alt="Vestido negro elegante para fiesta con escote en V y detalles de encaje" class="w-full h-80 object-cover">
                        <div class="absolute top-3 left-3 bg-red-500 text-white px-2 py-1 rounded text-sm font-medium">Oferta</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Sueter negro</h3>
                        <p class="text-gray-600 text-sm mb-2">Hombre</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="font-bold">$500.99</span>
                                <span class="text-sm text-gray-500 line-through ml-2">$79.99</span>
                            </div>
                            <button class="add-to-cart text-sm bg-black text-white px-3 py-1 rounded hover:bg-gray-800 transition" data-id="3" data-name="Vestido Elegante Negro" data-price="59.99">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden product-hover transition duration-300">
                    <img src="https://tse2.mm.bing.net/th/id/OIP.DCtjZ2kSxFMz2BieQvQSkQHaHa?w=736&h=736&rs=1&pid=ImgDetMain&o=7&rm=3/600x800" alt="Jeans azules ajustados para mujer con roturas modernas y corte de tiro alto" class="w-full h-80 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-1">Chaleco tegido</h3>
                        <p class="text-gray-600 text-sm mb-2">Hombre</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold">$700.99</span>
                            <button class="add-to-cart text-sm bg-black text-white px-3 py-1 rounded hover:bg-gray-800 transition" data-id="4" data-name="Jeans Ajustados" data-price="49.99">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
  <!-- Testimonials -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Lo que dicen nuestros clientes</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <img src="https://th.bing.com/th/id/R.e04c6ab0a86674a9e389e5da83212897?rik=NlvyAYV8dS6JCQ&pid=ImgRaw&r=0/80x80" alt="Retrato de mujer sonriente con cabello castaño y blusa blanca" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Ana Martínez</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-700">"El abrigo que compré superó todas mis expectativas. La calidad es increíble y recibí muchos cumplidos. Definitivamente volveré a comprar aquí."</p>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <img src="https://tse1.explicit.bing.net/th/id/OIP.CsTwRsaBqgnlQpzsVFWIAgHaHa?rs=1&pid=ImgDetMain&o=7&rm=3/80x80" alt="Retrato de hombre con gafas y barba corta, vistiendo camisa azul" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Carlos López</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-700">"La chaqueta de cuero es exactamente como en las fotos. El envío fue rápido y el servicio al cliente muy atento. Recomiendo esta tienda."</p>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <img src="https://tse4.mm.bing.net/th/id/OIP.-mKFhHmAxX8VhLQ59Aw-_wHaLG?rs=1&pid=ImgDetMain&o=7&rm=3/80x80" alt="Retrato de mujer joven con pelo rubio rizado sonriendo a la cámara" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Sofía García</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-700">"Me encanta la variedad de estilos que ofrecen. Compré varios vestidos y todos tienen una calidad excepcional. El proceso de compra fue muy sencillo."</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-black text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Column 1 -->
                <div>
                    <h3 class="font-bold text-lg mb-4">ÉLÉGANCE</h3>
                    <p class="text-gray-400">Tienda de moda premium comprometida con la calidad, el estilo y la satisfacción del cliente.</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#"><i class="fab fa-facebook-f text-gray-400 hover:text-white"></i></a>
                        <a href="#"><i class="fab fa-instagram text-gray-400 hover:text-white"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p text-gray-400 hover:text-white"></i></a>
                        <a href="#"><i class="fab fa-twitter text-gray-400 hover:text-white"></i></a>
                    </div>
                </div>
                
                <!-- Column 2 -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Comprar</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Novedades</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Mujer</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Hombre</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Accesorios</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Ofertas</a></li>
                    </ul>
                </div>
                
                <!-- Column 3 -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Ayuda</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Contacto</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQs</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Envíos y Devoluciones</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Guía de Talles</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Política de Privacidad</a></li>
                    </ul>
                </div>
                
                <!-- Column 4 -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Contacto</h3>
                    <address class="text-gray-400 not-italic">
                        <p class="mb-2">Calle Moda, 123</p>
                        <p class="mb-2">Madrid, España</p>
                        <p class="mb-2">Tel: +34 123 456 789</p>
                        <p class="mb-2">Email: info@elegance.com</p>
                    </address>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2023 ÉLÉGANCE. Todos los derechos reservados.</p>
                <p class="mt-2 text-sm">Diseñado con pasión por la moda y el buen gusto.</p>
            </div>
        </div>
    </footer>

    <!-- Shopping Cart Sidebar -->
    <div id="cart-sidebar" class="fixed inset-y-0 right-0 w-full md:w-1/3 lg:w-1/4 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50">
        <div class="p-4 h-full flex flex-col">
            <div class="flex justify-between items-center border-b pb-4">
                <h3 class="font-bold text-lg">Tu Carrito</h3>
                <button id="close-cart" class="text-gray-500 hover:text-black">
                    <i class="fas fa-times"></i>
                </button>
            </div>


            <div id="cart-items" class="flex-grow overflow-y-auto py-4">
                <!-- Cart items will be added here dynamically -->
                <p class="text-gray-500 text-center py-8">Tu carrito está vacío</p>
            </div>
            
            <div class="border-t pt-4">
                <div class="flex justify-between font-bold mb-4">
                    <span>Total:</span>
                    <span id="cart-total">$0.00</span>
                </div>
                <button id="finalizar-compra" class="w-full bg-black text-white py-3 font-medium hover:bg-gray-800 transition">Finalizar Compra</button>
                <!-- Purchase Modal -->
<div id="purchase-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
    <div class="flex items-center justify-center h-full">
        <div class="bg-white rounded-lg p-6 w-11/12 md:w-1/3">
            <h3 class="font-bold text-lg mb-4">Finalizar Compra</h3>
                <form id="purchase-form" method="POST" action="process.php">
    <div class="mb-4">
        <label for="first-name" class="block text-sm font-medium text-gray-700">Nombre</label>
        <input type="text" id="first-name" name="first-name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
    </div>
    <div class="mb-4">
        <label for="last-name" class="block text-sm font-medium text-gray-700">Apellido</label>
        <input type="text" id="last-name" name="last-name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
    </div>
    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
    </div>
    <div class="mb-4">
        <label for="card-number" class="block text-sm font-medium text-gray-700">Número de Tarjeta</label>
        <input type="text" id="card-number" name="card-number" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
    </div>
    <div class="flex justify-between">
        <button type="submit" class="bg-black text-white px-4 py-2 rounded">Confirmar Compra</button>
    </div>
      <div class="flex justify-between">
        <button type="button" id="close-purchase-modal" class="text-gray-500 hover:text-black">Cancelar</button>
    </div>
    
</form>

        </div>
    </div>
</div>
                <a href="#" class="block text-center text-sm text-gray-500 hover:text-black mt-2">Seguir comprando</a>
            </div>
        </div>
    </div>

    <!-- Overlay for cart -->
    <div id="cart-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

    <!-- JavaScript -->
    <script>

        // Mobile menu toggle (placeholder functionality)
        document.querySelector('.fa-bars').addEventListener('click', function() {
            alert('Menú móvil se abriría aquí. Esto sería implementado en una versión completa.');
        });
        
        // Shopping Cart Functionality
let cart = [];
const cartBtn = document.getElementById('cart-btn');
const cartCount = document.getElementById('cart-count');
const cartSidebar = document.getElementById('cart-sidebar');
const cartOverlay = document.getElementById('cart-overlay');
const closeCart = document.getElementById('close-cart');
const cartItemsContainer = document.getElementById('cart-items');
const cartTotal = document.getElementById('cart-total');
const finalizarCompraBtn = document.getElementById('finalizar-compra');
        
        // Toggle Cart
cartBtn.addEventListener('click', function() {
    cartSidebar.classList.remove('translate-x-full');
    cartOverlay.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
});
        
        // Add to cart functionality
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const name = this.getAttribute('data-name');
                const price = parseFloat(this.getAttribute('data-price'));
                
                // Check if item already in cart
                const existingItem = cart.find(item => item.id === id);
                
                if (existingItem) {
                    existingItem.quantity += 1;
                } else {
                    cart.push({
                        id,
                        name,
                        price,
                        quantity: 1
                    });
                }
                
                updateCart();
                
                // Show notification
                cartCount.textContent = cart.reduce((acc, item) => acc + item.quantity, 0);
                cartCount.classList.remove('hidden');
                
                // Trigger animation
                cartCount.classList.remove('cart-notification');
                void cartCount.offsetWidth; // Trigger reflow
                cartCount.classList.add('cart-notification');
            });
        });
    closeCart.addEventListener('click', function() {
    cartSidebar.classList.add('translate-x-full');
    cartOverlay.classList.add('hidden');
    document.body.style.overflow = '';
});
// Show purchase modal when clicking "Finalizar Compra"
finalizarCompraBtn.addEventListener('click', function() {
    if (cart.length === 0) {
        alert('Tu carrito está vacío. Agrega productos antes de finalizar la compra.');
    } else {
        showPurchaseModal(); // Muestra el formulario de compra
    }
});
        function updateCart() {
            // Update count
            const totalItems = cart.reduce((acc, item) => acc + item.quantity, 0);
            cartCount.textContent = totalItems;
            
            if (totalItems === 0) {
                cartCount.classList.add('hidden');
                cartItemsContainer.innerHTML = '<p class="text-gray-500 text-center py-8">Tu carrito está vacío</p>';
            } else {
                cartCount.classList.remove('hidden');
                
                
                // Update cart items display
                cartItemsContainer.innerHTML = '';
                
                cart.forEach(item => {
                    const itemElement = document.createElement('div');
                    itemElement.className = 'flex justify-between items-center py-4 border-b';
                    itemElement.innerHTML = `
                        <div class="flex-1">
                            <h4 class="font-medium">${item.name}</h4>
                            <p class="text-gray-600 text-sm">$${item.price.toFixed(2)} x ${item.quantity}</p>
                        </div>
                        <div>
                            <span class="font-medium">$${(item.price * item.quantity).toFixed(2)}</span>
                            <button class="remove-item ml-2 text-red-500 hover:text-red-700" data-id="${item.id}">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    `;
                    cartItemsContainer.appendChild(itemElement);
                });
                
                // Add event listeners to remove buttons
                document.querySelectorAll('.remove-item').forEach(button => {
                    button.addEventListener('click', function() {
                        const itemId = this.getAttribute('data-id');
                        cart = cart.filter(item => item.id !== itemId);
                        updateCart();
                    });
                });
            }
            
            // Update total
            const total = cart.reduce((acc, item) => acc + (item.price * item.quantity), 0);
            cartTotal.textContent = `$${total.toFixed(2)}`;
        }
        
        // Newsletter form submission
        const newsletterForm = document.querySelector('form');
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            if (email) {
                alert(`Gracias por suscribirte con ${email}. Pronto recibirás nuestras novedades.`);
                this.reset();
            } else {
                alert('Por favor ingresa un email válido.');
            }
        });

// Show purchase modal when clicking "Finalizar Compra"
finalizarCompraBtn.addEventListener('click', function() {
    if (cart.length === 0) {
        alert('Tu carrito está vacío. Agrega productos antes de finalizar la compra.');
    } else {
        document.getElementById('purchase-modal').classList.remove('hidden');
    }
});

// Close purchase modal
document.getElementById('close-purchase-modal').addEventListener('click', function() {
    document.getElementById('purchase-modal').classList.add('hidden');
});

// Handle purchase form submission
document.getElementById('purchase-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const firstName = document.getElementById('first-name').value;
    const lastName = document.getElementById('last-name').value;
    const email = document.getElementById('email').value;
    const cardNumber = document.getElementById('card-number').value;

    // Aquí puedes procesar la compra, enviar los datos a un servidor, etc.
    alert(`Gracias por tu compra, ${firstName} ${lastName}!`);
    
    // Limpiar el carrito y cerrar el modal
    cart = [];
    updateCart();
    document.getElementById('purchase-modal').classList.add('hidden');
});
    </script>
</body>



</html>

