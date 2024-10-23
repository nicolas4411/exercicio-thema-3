<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Média</title>
</head>
<body>
    <h2>Verificação de Média</h2>
    <form method="post" action="">
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" id="nota1" required><br>
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" id="nota2" required><br>
        <label for="nome">nome:</label>
        <input type="text" name="nome" id="nome" required><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nome = $_POST['nome'];
            
            
            $soma = $nota1 + $nota2;
            $media = ($nota1 + $nota2) /2; 
    
          
        }
        
        echo "A media dos valores é: $media  <br>";
        echo "A soma dos valores é $soma <br>";
        echo "Nome do aluno: $nome";
    }
     
    ?>
    
</body>
</html>
