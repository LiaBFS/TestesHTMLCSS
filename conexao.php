   function connecta_bd(){
        $servername = "mysql-aluno";
        $username = "root";
        $password = "aluno";
        $dbname = "webti";

        //criar conexão
        return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    }
    connecta_bd();

    function cadastra_usuario($nome,$email,$login,$senha){
        $con = conecta_bd();
        $stmt = $con->prepare("INSERT INTO usuarios (nome, login, senha, id)
                                             VALUES (:nome, :login, :senha, :id)");

        $stmt ->bindParam (':nome',$nome); 
        $stmt ->bindParam (':login',$login); 
        $stmt ->bindParam (':senha',$senha); 
        $stmt ->bindParam (':id',$id);
        return $stmt ->execute();

    }
    //exemplo cadastro
    cadastra_usuario("julia", "54321", "Julia B");

    function delete_usuario($id){
        $con = connecta_bd();
        $stmt = $con -> prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt -> bindParam(' :id', $id);
        return $stmt ->execute;
    }

    //exemplo de exclusão
    for($i = 1; $i<=10; $i++);

    function update_usuario ($id, $nome, $login, $senha){
        $con = connecta_bd();
        $stmt = $con ->prepare("UPDATE usuarios SET nome = :nome, login = :login, senha = :senha WHERE id = :id");
        $stmt ->bindParam(':id', $id);
        $stmt ->bindParam(':nome', $nome);
        $stmt ->bindParam(':login', $login);
        $stmt ->bindParam(':senha', $senha);
        return $stmt ->execute();
    }


    function get_usuario($id){
        $con = connecta_bd();
        $stmt = $con ->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt ->bindParam(':id',$id);
        $stmt ->execute();
        return $stmt ->fetch(PDO::FETCH_ASSOC);
    }

    function get_usuarios(){
        $con = connecta_bd();
        $stmt = $con ->prepare("SELECT * FROM usuarios");
        $stmt ->execute();

        return $stmt ->fetchAll(PDO::FETCH_ASSOC);

    }

    echo "<pre>";
    print_r(var_dump(get_usuario()));
    echo "</pre>";

?>
