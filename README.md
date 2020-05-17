# Mascaras_PHP
Classe para mascaras PHP
--------------------------
//Exemplos<br>
//Mascara personalizada:<br>
$mascara = new Mascaras("14.99","R$ ##,##");<br>
echo $mascara->gerarMasc()."\n";<br>
//Mascara CPF:<br>
$mascara = new Mascaras();<br>
echo $mascara->mascCPF("11111111111")."\n";<br>
//Mascara CNPJ:<br>
$mascara = new Mascaras();<br>
echo $mascara->mascCNPJ("03352758000187")."\n";<br>
//Mascara CEP:<br>
$mascara = new Mascaras();<br>
echo $mascara->mascCEP("11100000")."\n";<br>
//Mascara Telefone:<br>
$mascara = new Mascaras();<br>
echo "Celular com DD: ".$mascara->mascTelefone("99999999999")."\n";<br>
$mascara = new Mascaras();<br>
echo "Celular sem DD: ".$mascara->mascTelefone("999999999")."\n";<br>
$mascara = new Mascaras();<br>
echo "Fixo com DD: ".$mascara->mascTelefone("9911111111")."\n";<br>
$mascara = new Mascaras();<br>
echo "Fixo sem DD: ".$mascara->mascTelefone("11111111")."\n";<br>
