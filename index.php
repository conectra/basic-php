<html lang="pt-br">
    <head>
    <title>Teste PHP</title>
    </head>

    <body>
    <?php echo "<p>Olá Mundo</p>"; ?>

    <?php
    // exemplos de variáveis
    $name = "Guilherme";
    $name = 'Guilherme';
    $booleano = true;
    $age = 20;
    $age = 20.8;

    // apresentar na tela
    echo $name; // Guilherme
    echo "</br>";
    echo $age; // 20

    // conversão de tipos
    echo "</br>";
    $booleano = 'true';
    echo (bool)$booleano;

    // concatenação
    echo "<br>Nome: {$name}";
    echo '<br>Nome: {$name}';
    echo "<br>Nome: " . $name;
    echo '<br>Nome: ' . $name;

    echo "<br>Nome: {$name}; Idade: " . $age;

    // constantes
    define('PHP', 'Linguagem Open - Source');
    const HTML = 'Linguagem de marcação';
    echo '<br>' . PHP;
    echo '<br>' . HTML;

    // arrays
    $array = '';
    $array = [];

    // array simples
    $array = [1, 2, 3, 'Valor', []];
    // forma não recomendada
    // $array = array(1, 2, 3, 'Valor', array());

    // array assoc
    $array = [
        'teste' => 1,
        2,
        'teste2' => 1,
        3,
        'teste3' => 1,
    ];

    // array de produtos
    $arrayProdutos = [
        [
            'codigo' => 1,
            'codigoEmpresa' => 123,
            'nome' => 'Celular',
            'valor' => 123.99,
        ],
        [
            'codigo' => 2,
            'codigoEmpresa' => 123,
            'nome' => 'Celular 2',
            'valor' => 124.99,
        ],
    ];

    // pegar o código do primeiro produto
    echo $arrayProdutos[0]['codigo'];
    // apresentar o array na tela
    echo '<br>';
    var_dump($array);

    // converter um array para JSON
    echo '<br>' . json_encode($arrayProdutos);

    // converter um JSON para um objeto genérico (stdClass)
    echo '<br><br><br>';
    $retorno = '{"status":true,"message":"Consulta realizada com sucesso","count":12999}';
    $retornoStdObject = json_decode($retorno);
    var_dump($retornoStdObject);
    echo '<br>STATUS: ' . $retornoStdObject->status;

    // converter um JSON para array
    echo '<br><br><br>';
    $retornoArrayAssoc = json_decode($retorno, true);
    var_dump($retornoArrayAssoc);
    echo '<br>STATUS: ' . $retornoArrayAssoc['status'];

    // operações com as variáveis
    echo '<br><br><br>';
    $a = "5"; // string
    echo $a + 2; // 7, integer
    echo $a + '5 carros'; // 10, integer

    // exemplo de soma
    $a = 1;
    $a += 2; // $a = $a + 2;
    echo '<br>' . $a;

    // if com elseif
    $opcao = 3;
    if ($opcao === 1) {
        echo '<br>é 1';
    } elseif ($opcao === 2) {
        echo '<br>é 2';
    } else {
        echo '<br>é qualquer valor, exceto 1 e 2';
    }

    // if ternário
    // valida se a string foi preenchida
    $string = '';
    if ($string === '') {
        $foiPreenchido = false;
    } else {
        $foiPreenchido = true;
    }
    $foiPreenchido = ($string === '') ? false : true;

    // laço de repetição
    $ids = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    foreach($ids as $idAtual) {
        if ($idAtual === 20) continue;
        if ($idAtual === 80) break;

        echo "<br>$idAtual";
    }

    // exemplo de código JS no PHP
    echo '<script type="text/javascript">console.log("entrou aqui");</script>';
    ?>

    <?php
    // orientação a objetos
    include_once 'model/ModelProduto.php';

    // quando eu dou um new em uma classe, eu estou criando um novo objeto dessa classe
    $oModelProduto = new ModelProduto();
    $oModelProduto->setCodigo(1);
    $oModelProduto->setCodigoEmpresa(123);
    $oModelProduto->setNome('Celular');
    $oModelProduto->setValor(123.89);

    echo '<br><br>PRODUTO: ';
    echo '<br>Código: ' . $oModelProduto->getCodigo();
    echo '<br>Código Empresa: ' . $oModelProduto->getCodigoEmpresa();
    echo '<br>Nome: ' . $oModelProduto->getNome();
    echo '<br>Valor: ' . $oModelProduto->getValor();
    ?>

    </body>
</html>
