// @deno-types="npm:@types/express@4.17.15"
import express from "npm:express@4.18.2";

const app = express();

app.get("/api", (req, res) => {
  res.status(200).send("Bem-vindo a API do servidor Denojs!");
});

app.listen(3000, () => {
  console.log("Servidor escutando na porta 3000")
});
