CREATE DATABASE todolist;

CREATE TABLE todo (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode INTEGER NOT NULL,
    todo VARCHAR (255) NOT NULL 
);


-- menambahkan data --
insert into todo (kode, todo) values ('$kode', '$todo');

-- data yang ditambahkan --
insert into todo (1, beli sepatu) values ('$kode', '$todo');
insert into todo (2, beli makan) values ('$kode', '$todo');
insert into todo (3, tugas mbkm) values ('$kode', '$todo');