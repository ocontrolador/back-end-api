import express from "express";

const posts = [
  {
    id: 1,
    descricao: "Uma foto teste",
    imagem: "https://placecats.com/millie/300/150",
  },
  {
    id: 2,
    descricao: "Gato curioso olhando pela janela",
    imagem: "https://placekitten.com/400/200",
  },
  {
    id: 3,
    descricao: "Gatinho dormindo em uma caixa",
    imagem: "https://picsum.photos/id/237/300/200",
  },
  {
    id: 4,
    descricao: "Gato brincando com um novelo de lã",
    imagem: "https://source.unsplash.com/random/300x200/?cat,yarn",
  },
  {
    id: 5,
    descricao: "Gato preto em um beco escuro",
    imagem: "https://unsplash.com/photos/2305850/download",
  },
  {
    id: 6,
    descricao: "Gato laranja tomando sol",
    imagem: "https://loremflickr.com/320/240/kitten",
  },
];

const app = express();

app.use(express.json());

app.listen(3000, () => {
  console.log("Servidor escutando na porta 3000")
});

function buscaPostId(id) {
  return posts.findIndex((post) => post.id === Number(id));
}

// Rotas
app.get("/posts", (req, res) => {
  res.status(200).json(posts);
});

app.get("/posts/:id", (req, res) => {
  const index = buscaPostId(req.params.id);
  res.status(200).json(posts[index]);
});


