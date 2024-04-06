<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Super Pizza</title>
</head>
<body>
    <?php include("cabecalho.php") ?>
    <?php include("menu.php") ?>
     <main class="bg-light row pe-3 ps-3">
        <div class="row">
            <h2 class="mt-4 h1">Entre em contato</h2>
            <hr>
        </div>
        <div class="col-4">
            <div class="row">
            <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  <label for="exampleFormControlInput1" class="form-label">Nome</label>
  <input type="nome" class="form-control" id="exampleFormControlInput1" placeholder="nome completo">
  <label for="exampleFormControlInput1" class="form-label">Assunto</label>
  <input type="assunto" class="form-control" id="exampleFormControlInput1" placeholder="Sobre">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3 text-end">
<button type="button" class="btn btn-primary ">Enviar</button>
</div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
            <div class="mb-3 text-end">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1546.9683513562172!2d-47.330182842649556!3d-22.75307426564498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8998174c896b9%3A0x739b7f99b3323574!2sSenac%20Americana!5e0!3m2!1sen!2sbr!4v1712019585566!5m2!1sen!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        </div>
     </main>
    <?php include("rodape.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>