create database T197Tienda;

use T197Tienda; 

create table producto(
    idproducto int primary key auto_increment,
    nombreproducto varchar(255) not null default '',
    descripcionproducto varchar(1024) not null default '',
    precioproducto decimal (20,10) not null default 0,
    inventarioproducto int not null default 0,
    urlproducto varchar(2048) not null default 'imgs/nofoto.png',
    activo int not null default 0

);


insert into producto 
    (nombreproducto, descripcionproducto, precioproducto, inventarioproducto, urlproducto, activo) 
    values('Apple iPhone XR (128 GB) - Space Grey', 'El iPhone XR tiene una pantalla Liquid Retina de 6.1 pulgadas y está disponible en seis colores increíbles. El avanzado sistema Face ID te permite desbloquear el iPhone e iniciar sesión en apps de forma segura con sólo una mirada. El chip A12 Bionic usa el aprendizaje automático en tiempo real para llevar aún más allá todo lo que puedes hacer con tus fotos, juegos, realidad aumentada y más. El sistema de cámara única de 12 MP con Iluminación de Retrato, bokeh mejorado y Control de Profundidad te permite tomar retratos con calidad de estudio. Además, es resistente al agua.', 16000, 18, 'imgs/iphone1.png', 1);
