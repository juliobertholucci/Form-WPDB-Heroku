<?php

global $wpdb;




$tabela_nome = $wpdb->prefix . 'tblempresa';
$tabela_nome2 = $wpdb->prefix . 'tblusuario1';
$tabela_nome3 = $wpdb->prefix . 'tblempresausuario';


try{

    if(!empty ($_POST['botao2'])){

        if(!empty($_POST['cnpj']) AND !empty($_POST['nome']) AND !empty($_POST['simples']) AND !empty($_POST['empregados']) AND !empty($_POST['sistema']) AND !empty($_POST['portefiscal']) AND !empty($_POST['site']) 
        AND !empty($_POST['cep']) AND !empty($_POST['cidade']) AND !empty($_POST['rua']) AND !empty($_POST['bairro']) AND !empty($_POST['numero']) AND !empty($_POST['complemento']) AND !empty($_POST['atividade']) 
        AND !empty($_POST['usuario']) AND !empty($_POST['nomecompleto']) AND !empty($_POST['telefone']) AND !empty($_POST['email']) AND !empty($_POST['senha']) AND !empty($_POST['perfil']) ){
        
        
        $cnpj = sanitize_text_field( $_POST['cnpj']);
        $nome = sanitize_text_field( $_POST['nome']);
        $simples = sanitize_text_field($_POST['simples']);
        $empregados = sanitize_text_field($_POST['empregados']);
        $sistema = sanitize_text_field($_POST['sistema']);
        $portefiscal = sanitize_text_field($_POST['portefiscal']);
        $site = sanitize_text_field($_POST['site']);
        $cep = sanitize_text_field($_POST['cep']);
        $cidade = sanitize_text_field($_POST['cidade']);
        $rua = sanitize_text_field($_POST['rua']);
        $bairro = sanitize_text_field($_POST['bairro']);
        $numero = sanitize_text_field($_POST['numero']);
        $complemento = sanitize_text_field($_POST['complemento']);
        $atividade  = sanitize_text_field($_POST['atividade']);
        $usuario = sanitize_text_field($_POST['usuario']);
        $nomecompleto = sanitize_text_field($_POST['nomecompleto']);
        $telefone = sanitize_text_field($_POST['telefone']);
        $email = sanitize_email($_POST['email']);
        $senha = sanitize_text_field($_POST['senha']);
        $perfil = sanitize_text_field($_POST['perfil']);
       	
        $hash = md5($senha);

        $wpdb->insert($tabela_nome, array(

            'cnpj' => $cnpj,
            'nome'=>$nome,
            'simples'=>$simples,
            'empregados' => $empregados,
            'sistema'=>$sistema,
            'portefiscal'=>$portefiscal,
            'site' => $site,
            'cep'=>$cep,
            'cidade'=>$cidade,
            'rua' => $rua,
            'bairro'=>$bairro,
            'numero'=>$numero,
            'complemento'=>$complemento,
            'atividade' => $atividade
        
        ));


        $wpdb->insert($tabela_nome2, array(

            'usuario' => $usuario,
            'nomecompleto'=>$nomecompleto,
            'email'=>$email,
            'senha' => $hash,
            'telefone'=>$telefone
            
            

        ));
        

       $wpdb->insert($tabela_nome3, array(
            'perfil' => $perfil
            
            
            
            
            

        ));
        

        
     }


    }else{
        $apagar_empresa = $wpdb ->delete($tabela_nome, array('idEmpresa' => NULL));
        $apagar_user = $wpdb ->delete($tabela_nome2, array('idUsuario' => NULL));
        
        

    }

    




}catch (Exception $e)  
{
   
   echo "Excecao: ";
   echo $e->getMessage();
}




?>