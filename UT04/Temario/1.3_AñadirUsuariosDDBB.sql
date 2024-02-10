-- 1.- Seleccionamos la base de datos Proyecto
use proyecto;
-- 2.- Creamos la tabla usuarios
create table usuarios(
usuario varchar(20) primary key,
pass varchar(64) not null
);
-- 3.- Creamos un par de usuarios de prueba, vamos a utilizar sha256
-- Para guardar las contraseñas, en realidad guardamos el hash.
insert into usuarios select 'gestor' , sha2('Secreto1!',256);
insert into usuarios select 'admin' , sha2('_gabi_G14',256);