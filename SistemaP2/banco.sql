
DROP DATABASE IF EXISTS agendamento;
CREATE DATABASE agendamento CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE agendamento;

CREATE TABLE pacientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    data_nascimento DATE NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE medicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    crm VARCHAR(20) NOT NULL UNIQUE,
    especialidade VARCHAR(60) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE atendentes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    matricula VARCHAR(20) NOT NULL UNIQUE,
    turno VARCHAR(20) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- Dados de exemplo (opcional)
INSERT INTO pacientes (nome, cpf, data_nascimento, telefone, email) VALUES
('Maria Souza', '111.111.111-11', '1990-05-12', '(18) 99999-0001', 'maria@email.com'),
('João Lima', '222.222.222-22', '1985-11-30', '(18) 99999-0002', 'joao@email.com');

INSERT INTO medicos (nome, crm, especialidade, telefone, email) VALUES
('Dr. Carlos Mendes', 'CRM-SP 123456', 'Clínico Geral', '(18) 3222-0001', 'carlos@clinica.com'),
('Dra. Ana Paula', 'CRM-SP 654321', 'Pediatria', '(18) 3222-0002', 'ana@clinica.com');

INSERT INTO atendentes (nome, matricula, turno, telefone, email) VALUES
('Paula Ribeiro', 'AT-001', 'Manhã', '(18) 99999-0003', 'paula@clinica.com');
