<?php

class participacao extends controller {

    public function index_action($pagina = 1) {

        //list all records
        $_SESSION['pagina'] = $pagina;

        $this->smarty->assign('paginador', $this->mostraGrid());

       
        $this->smarty->assign('title', 'Participações');
        //call the smarty
        $this->smarty->display('participacao/index.tpl');
    }

    public function add() {
        //list all records
        $model_cliente = new clienteModel();
        $cliente_res = $model_cliente->getCliente(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listcliente', $cliente_res);

        //list all records
        $model_evento = new eventoModel();
        $evento_res = $model_evento->getEvento(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listevento', $evento_res);

        $this->smarty->assign('title', 'Nova Participação');
        $this->smarty->display('participacao/new.tpl');
    }

    public function save() {

        $modelparticipacao = new participacaoModel();
        $dados['id_cliente'] = $_POST['cliente'];
        $dados['id_evento'] = $_POST['evento'];
        $dados['data_hora'] = date("Y-m-d H:i:s");

        $exists = $this->estoque($dados['id_cliente'], $dados['id_evento']);
        if (!$exists) {
            $id_participacao = $modelparticipacao->setParticipacao($dados);
            $resparticipacao = $modelparticipacao->getParticipacao('p.codigo=' . $id_participacao);
            $this->smarty->assign('registro', $resparticipacao[0]);
            $this->smarty->assign('id', $id_participacao);
            $this->smarty->display('participacao/newmoredetails.tpl');
        }
    }

    public function update() {
        $id = $this->getParam('id');

        $modelparticipacao = new participacaoModel();
        $dados['codigo'] = $id;
        $dados['id_cliente'] = $_POST['cliente'];
        $dados['id_evento'] = $_POST['evento'];
        $dados['data_hora'] = $_POST['datahora'];
        $modelparticipacao->updParticipacao($dados);

        header('Location: /participacao');
    }

    public function detalhes() {
        $id = $this->getParam('id');
        $modelparticipacao = new participacaoModel();
        $resparticipacao = $modelparticipacao->getParticipacao('p.codigo=' . $id);
        $this->smarty->assign('registro', $resparticipacao[0]);

        //list all records
        $model_arquivo = new arquivoModel();
        $arquivo_res = $model_arquivo->getArquivo(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listarquivo', $arquivo_res);


        //list all records
        $model_foto = new fotoModel();
        $foto_res = $model_foto->getFoto(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listfoto', $foto_res);



        $this->smarty->assign('title', 'Detalhes dos Participações');
        //call the smarty
        $this->smarty->display('participacao/detail.tpl');
    }

    public function edit() {

        //die();
        $id = $this->getParam('id');

        //list all records
        $modelparticipacao = new participacaoModel();
        $resparticipacao = $modelparticipacao->getParticipacao('p.codigo=' . $id);
        $this->smarty->assign('registro', $resparticipacao[0]);

        //list all records
        $model_cliente = new clienteModel();
        $cliente_res = $model_cliente->getCliente(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listcliente', $cliente_res);

        //list all records
        $model_evento = new eventoModel();
        $evento_res = $model_evento->getEvento(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listevento', $evento_res);

        //list all records
        $model_arquivo = new arquivoModel();
        $arquivo_res = $model_arquivo->getArquivo(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listarquivo', $arquivo_res);


        //list all records
        $model_foto = new fotoModel();
        $foto_res = $model_foto->getFoto(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listfoto', $foto_res);



        $this->smarty->assign('title', 'Detalhes dos Participações');
        //call the smarty
        $this->smarty->display('participacao/edit.tpl');
    }

    public function delete() {

        $id = $this->getParam('id');
        $modelparticipacao = new participacaoModel();
        $dados['codigo'] = $id;
        
        //update qtd_total do produto
        $participacao_res = $modelparticipacao->getParticipacao('p.codigo='.$id);        
        $resultado = $modelparticipacao->getQuantidade('p.codigo='.$id);
                
        foreach ($resultado as $value) {

                $data['qtd_total'] = $value['qtdtotal'] + $value['qtd'];
                $data['codigo'] = $value['id_produto'];
                $model_produto = new produtoModel();
                $resultado = $model_produto->updProduto($data);
        }
        
        //apaga a participacao
        $modelparticipacao->delParticipacao($dados);

        
        //apaga os arquivos
        $modelarquivo = new arquivoModel();
        $target_file_arquivo = $modelarquivo->getArquivo('id_evento_cliente=' . $id); //Full table Scan :( or :)   
        $dados['id_evento_cliente'] = $id;
        if (file_exists($target_file_arquivo[0]['caminho_arquivo'])) {

            echo( unlink($target_file_arquivo[0]['caminho_arquivo']));
        }
        $modelarquivo->delArquivo($dados);


        //apaga as fotos
        $modelfoto = new fotoModel();
        $dados['id_evento_cliente'] = $id;
        $target_foto = $modelfoto->getFoto('id_evento_cliente=' . $id); //Full table Scan :( or :)   
        if (file_exists($target_foto[0]['caminho_foto'])) {
            echo( unlink($target_foto[0]['caminho_foto']));
        }
        $modelfoto->delFoto($dados);


        header('Location: /participacao');
    }

    public function uploadFile() {

        if (($_FILES["fileToUpload"]['name']['size'] == '')) {
            header('Location: /participacao');
            return;
        }

        $target_dir = "files/arquivo/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);


        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 50000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $dados['id_evento_cliente'] = $this->getParam('id_evento_cliente');
                $dados['caminho_arquivo'] = $target_file;
                $model = new model();
                $model->insert("arquivo", $dados);
                header('Location: /participacao');
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    public function uploadfoto() {
        $id = $_POST['id_evento_cliente'];
        $filepath = "files/fotos/" . date("YmdHis") . ".png";
        $imagem = str_replace('data:image/png;base64,', '', $_POST['imagem']);
        $this->base64_to_jpeg($imagem, $filepath);
        echo json_encode(array('imagem' => 1));
        $data['id_evento_cliente'] = $id;
        $data['caminho_foto'] = $filepath;
        $model = new model();
        $model->insert("foto", $data);
    }

    public function base64_to_jpeg($base64_string, $output_file) {
        $ifp = fopen($output_file, "wb");
        fwrite($ifp, base64_decode($base64_string));
        fclose($ifps);
        return ($output_file);
    }

    public function estoque($id_cliente, $id_evento) {


        $modelparticipacao = new participacaoModel();
        $verificaseexiste = $modelparticipacao->getParticipacao("id_evento = $id_evento AND id_cliente = $id_cliente");


        if ($verificaseexiste) {
            $this->smarty->assign('paginador', $this->mostraGrid());
            $this->smarty->assign('error', 'O cliente já participa deste evento!');
            $this->smarty->display('participacao/index.tpl');

            return true;
        } else {


            //list all records
            $model_produtoevento = new produtoeventoModel();
            $produtoevento_res = $model_produtoevento->getProdutoEvento('ep.id_evento=' . $id_evento); //Full table Scan :( or :)   


            foreach ($produtoevento_res as $value) {

                $data['qtd_total'] = $value['qtdtotal'] - $value['qtd'];
                $data['codigo'] = $value['id_produto'];
                $model_produto = new produtoModel();
                $resultado = $model_produto->updProduto($data);
            }

            return false;
        }
    }
    
     public function mostraGrid(){
        $total_reg = "10"; // número de registros por página
        $pagina = $_SESSION['pagina'];
        if (!$pagina) {
            $pc = "1";
        } else {
            $pc = $pagina;
        }
        
        $inicio = $pc - 1;
        $inicio = $inicio * $total_reg;
        
        //list all records
        $model_participacoes = new participacaoModel();
        $participacoes_res = $model_participacoes->getParticipacaoLimit(null,$inicio,$total_reg); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listparticipacao', $participacoes_res);
        
        
        $query_total = $model_participacoes->getCountParticipacao();
        
        $total_registros = $query_total[0]['total']; //pega o valor
        $html = $this->paginador($pc, $total_registros, 'participacao');
        return $html;
    }
    
    public function paginacao() {
        $this->index_action($this->getParam('pagina'));
    }
    
 

}

?>