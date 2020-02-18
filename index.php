<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Você pode tirar a sua CNH?</title>
</head>
<body>
    <form method="post" action="verifica.php">
    <label>Digite seu nome</label>
    <input type="text" id="txtNome" name="txtNome"/>
    <label>Digite o seu cpf</label>
    <input type="text" id="txtCpf" name="txtCpf"/>
    <label>Digite o ano de nascimento</label>
    <input type="text" id="txtAno" name="txtAno"/>
    <select name="slCategoria" id="slCategoria">
        <option value="1">A</option>
        <option value="2">B</option>
        <option value="3">C</option>
        <option value="4">D</option>
        <option value="5">E</option>
    </select>
    <input type="submit" value="Verificar">

</form>
</body>
</html>