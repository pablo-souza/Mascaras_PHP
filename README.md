# Mascaras_PHP
Classe para mascaras PHP
--------------------------
//Exemplos
//Mascara personalizada:
$mascara = new Mascaras("14.99","R$ ##,##");
echo $mascara->gerarMasc()."\n";
//Mascara CPF:
$mascara = new Mascaras();
echo $mascara->mascCPF("11111111111")."\n";
//Mascara CNPJ:
$mascara = new Mascaras();
echo $mascara->mascCNPJ("03352758000187")."\n";
//Mascara CEP:
$mascara = new Mascaras();
echo $mascara->mascCEP("11100000")."\n";
//Mascara Telefone:
$mascara = new Mascaras();
echo "Celular com DD: ".$mascara->mascTelefone("99999999999")."\n";
$mascara = new Mascaras();
echo "Celular sem DD: ".$mascara->mascTelefone("999999999")."\n";
$mascara = new Mascaras();
echo "Fixo com DD: ".$mascara->mascTelefone("9911111111")."\n";
$mascara = new Mascaras();
echo "Fixo sem DD: ".$mascara->mascTelefone("11111111")."\n";
