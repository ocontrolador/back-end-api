import express from "express"; // Importa o framework Express para criar a aplicação web
import multer from "multer"; // Importa o Multer para lidar com uploads de arquivos
import { listarPosts, postarNovoPost, uploadImagem } from "../controllers/postsController.js"; // Importa as funções controladoras para lidar com a lógica dos posts

// Cria uma instância do middleware Multer
const upload = multer({ dest: "./uploads" });

// Define as rotas usando o objeto Express app
const routes = (app) => {
  // Permite que o servidor interprete corpos de requisições no formato JSON
  app.use(express.json());

  // Rota para recuperar uma lista de todos os posts
  app.get("/", listarPosts); // Chama a função controladora apropriada

  // Rota para criar um novo post
  app.post("/", postarNovoPost); // Chama a função controladora para criação de posts

  // Rota para upload de imagens (assumindo uma única imagem chamada "imagem")
  app.post("/upload", upload.single("imagem"), uploadImagem); // Chama a função controladora para processamento da imagem
};

export default routes;
