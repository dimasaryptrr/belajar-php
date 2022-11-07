-- database fakultas
CREATE DATABASE fakultas;


-- database jurusan
CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR (50) NOT NULL 
);


-- buat tabel mahasiswa
CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum ('Laki-Laki', 'perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan (id)
);
 
 -- input data jurusan
 insert into jurusan (kode, nama) values ('APBL', 'Administrasi Publik');
 insert into jurusan (kode, nama) values('PDTIK', 'Pendidikan Teknik Informatika');

 -- input data mahasiswa
 insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) values(2, '20011234567', 'Rafiif', 'Laki-Laki', 'Malang', '2001-10-25', 'Perum Karanglo Blok J');