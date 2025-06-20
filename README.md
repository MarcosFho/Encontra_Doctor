
# 🩺 Encontra Doctor Online

Este projeto é um escopo detalhado de um sistema de agendamento de consultas médicas e exames, com **front-end em React Vite, HTML, CSS e JavaScript** e **back-end será desenvolvido em Java Spring Boot + MySQL**. Foi desenvolvido como trabalho acadêmico e visa facilitar a conexão entre pacientes e médicos, promovendo praticidade, organização e segurança.

---

## 📋 Descrição

A aplicação permite que pacientes busquem médicos por filtros (especialidade, localização, preço, avaliação e convênios) e agendem consultas online. Médicos podem gerenciar seus horários, aceitar consultas, destacar seus perfis e receber avaliações dos pacientes.

Há integração com farmácias e laboratórios parceiros, notificações automáticas, histórico de consultas e funcionalidades administrativas. O sistema também está de acordo com a LGPD (Lei Geral de Proteção de Dados).

---

## 🚀 Tecnologias Utilizadas

### Front-end:
- React.js
- Vite
- HTML5, CSS3, JavaScript
- React Router DOM
- Axios

### Back-end:
- Java 17
- Spring Boot
- Spring Data JPA (Hibernate)
- MySQL
- Maven
- Spring Security (autenticação/autorização)
- JWT Token
- dotenv

---

## 📁 Estrutura do Projeto

```
Encontra-Doctor/
├── backend/             # Back-end Java (Spring Boot)
│   ├── src/
│   └── pom.xml
├── frontend/            # Front-end React + Vite
│   ├── src/
│   └── vite.config.js
└── README.md
```

---

## 🖥️ Como rodar o projeto

### ✅ Pré-requisitos

- Node.js (versão 18+)
- npm ou yarn
- MySQL 8+
- Java 17 ou superior
- Maven

---

### 1. Clonar o repositório

```bash
git clone https://github.com/MarcosFho/Encontra_Doctor.git
cd encontra-doctor
```

---

### 2. Configurar o banco de dados

- Crie um banco de dados no MySQL:

```sql
CREATE DATABASE encontra_doctor;
```

- Crie um arquivo `.env` dentro de `/backend` com as variáveis:

```env
DB_URL=jdbc:mysql://localhost:3306/encontra_doctor
DB_USERNAME=root
DB_PASSWORD=sua_senha_aqui
JWT_SECRET=sua_chave_secreta
```

> A estrutura de tabelas será criada automaticamente pelo Hibernate (DDL auto-update).

---

### 3. Rodar o back-end

```bash
cd backend
mvn spring-boot:run
```

O servidor estará disponível em:  
📍 http://localhost:8080

---

### 4. Rodar o front-end

```bash
cd ../frontend
npm install
npm run dev
```

A aplicação estará em:  
📍 http://localhost:5173

---

## 🛠️ Funcionalidades

- Cadastro de médicos e pacientes
- Autenticação com JWT
- Agendamento de consultas com confirmação automática
- Busca com filtros (especialidade, localização, preço, avaliação)
- Avaliação de médicos
- Destaque para médicos patrocinados
- Integração com farmácias e laboratórios
- Notificações e lembretes
- Histórico de consultas
- Painel administrativo (consultas, métricas e receitas)
- LGPD: proteção e privacidade de dados

---

## 📚 Como usar

1. Crie uma conta como paciente ou médico
2. Se paciente, busque médicos por filtros e agende consultas
3. Se médico, cadastre disponibilidade, convênios e visualize agendamentos
4. Receba notificações e avalie os atendimentos
5. Acompanhe o histórico e gerencie seus dados

---

## 📦 Organização do Código

- **/frontend**: Componentes organizados por rotas e telas
- **/backend**: Padrão MVC com camadas de controller, service e repository
- Separação clara entre lógica de negócio e apresentação
- Pronto para escalar e integrar novas funcionalidades

---

## 📖 Licença

Este projeto foi desenvolvido como trabalho acadêmico para a disciplina de Projetos Integrados I, pela Universidade de Uberaba.
