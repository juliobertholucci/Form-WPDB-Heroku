







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Àrea de Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4117b8be6f.js" crossorigin="anonymous"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" >

    
			function fMasc(objeto,mascara) {
				obj=objeto
				masc=mascara
				setTimeout("fMascEx()",1)
			}
			function fMascEx() {
				obj.value=masc(obj.value)
			}
			function mTel(tel) {
				tel=tel.replace(/\D/g,"")
				tel=tel.replace(/^(\d)/,"($1")
				tel=tel.replace(/(.{3})(\d)/,"$1)$2")
				if(tel.length == 9) {
					tel=tel.replace(/(.{1})$/,"-$1")
				} else if (tel.length == 10) {
					tel=tel.replace(/(.{2})$/,"-$1")
				} else if (tel.length == 11) {
					tel=tel.replace(/(.{3})$/,"-$1")
				} else if (tel.length == 12) {
					tel=tel.replace(/(.{4})$/,"-$1")
				} else if (tel.length > 12) {
					tel=tel.replace(/(.{4})$/,"-$1")
				}
				return tel;
			}
			function mCNPJ(cnpj){
				cnpj=cnpj.replace(/\D/g,"")
				cnpj=cnpj.replace(/^(\d{2})(\d)/,"$1.$2")
				cnpj=cnpj.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
				cnpj=cnpj.replace(/\.(\d{3})(\d)/,".$1/$2")
				cnpj=cnpj.replace(/(\d{4})(\d)/,"$1-$2")
				return cnpj
			}
			function mCPF(cpf){
				cpf=cpf.replace(/\D/g,"")
				cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
				cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
				cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
				return cpf
			}
			function mCEP(cep){
				cep=cep.replace(/\D/g,"")
				cep=cep.replace(/^(\d{2})(\d)/,"$1.$2")
				cep=cep.replace(/\.(\d{3})(\d)/,".$1-$2")
				return cep
			}
			function mNum(num){
				num=num.replace(/\D/g,"")
				return num
			}


      function funcs(){

        confirm();
        QTDsenha();

      }


      function confirm(){
        var btn =  document.getElementById("btd");
        var email = document.getElementById("em1").value
        var confemail = document.getElementById("em2").value
        var psw = document.getElementById("s1").value
        var conpsw = document.getElementById("s2").value
        if(email != confemail  || psw != conpsw ) {
          document.getElementById("p1").innerHTML = "Email ou Senha Incorretos, Revise-os";
          document.getElementById("p1").style.color = "red";
          btn.classList.add("disabled");
        }

        else{

          document.getElementById("p1").innerHTML = "Email e Senha Corretos";
          document.getElementById("p1").style.color = "green";
          btn.classList.remove("disabled");
          btn.classList.add("active");

        }

      }
	
      
     
    
            function QTDsenha(){
      var senha = document.getElementById('s1');
        if(senha.value.length < 6){
            document.getElementById("ps").innerHTML = "Senha deve conter mais de 6 dígitos!";
            document.getElementById("ps").style.color = "red";
            btn.classList.add("disabled");
            return false;
        }

        else{

          document.getElementById("ps").innerHTML = "";
          btn.classList.remove("disabled");
          btn.classList.add("active");

        }
}



    </script>


    <style>

    .back{

      width:60px;
      height:60px;
      bottom:0;
      right:0;
      position:fixed;
      background-color:none;
      margin:5px;

    }

    

    html *
    {
      
      font-family: 'Oxygen', sans-serif;
      font-weight:bold;
    }

    .principal{

    width:100%;
    height:auto;
    background-color: #ebe7e0;



    }

    .title{

        width:100%;
        height:5vh;
        text-align:center;
        

    }

    body{margin:0;padding:0;}

    

    .marg{

      width:80%;
      margin:0 auto;

    }
    .icon{

      font-size:50px;color:black;

    }

    .icon:hover{

      cursor: pointer;
      color:#343635;
      

    }

    @media screen and (max-width: 900px) {
            .marg {
                width:95%;
            }
            #btd{

            width: 100%;

            }

            .icon{
              font-size:35px;

            }

            .back{

              width: 40px;
              height:40px;
              margin:3px;

            }

        }


    </style>

</head>
<body>
    
<div class="principal">

      <div class="marg">
        <br>

        <div class="title "><h4 class="font">Dados da Empresa</h4></div>
        <br>

        <form method="POST" action="functions.php">
        <div class="input-group mb-3">
        <span class="input-group-text font bg-dark text-white" >CNPJ</span>
        <input type="text" name="cnpj" class="form-control  font" onkeydown="javascript: fMasc( this, mCNPJ );" placeholder="CNPJ" required>
      </div>



      <div class="mb-3">
        <label  class="form-label font">Nome</label>
        <input type="text" class="form-control"  placeholder="Nome" name="nome" required>
      </div>

      <hr>

      <div class="mb-3">
        <label  class="form-label font">Optante pelo Simples?</label>
        <select class="form-control font" name="simples" required>
        <option ></option>
        <option value=”S”>Sim</option>
        <option value=”N”>Não</option>
       
        </select>
        
      </div>


      <div class="mb-3">
        <label  class="form-label font">Empregados</label>
        <select class="form-control font" name="empregados" required>
        <option ></option>
        <option value=”0a5”>0 a 5</option>
        <option value=”6a10”>6 a 10</option>
        <option value=”11a25”>11 a 25</option>
        <option value=”26a50”>26 a 50</option>
        <option value=”51a100”>51 a 100</option>
        <option value=”101a250”>101 a 250</option>
        <option value=”251a500”>251 a 500</option>
        <option value=”500+”>Acima de 500</option>
        <option value=”IDK”>Não sei informar</option>
        
       
        </select>
        <br/>
        <p>O sistema será utilizado por quantas pessoas?</p>
        <select class="form-control font" name="sistema" required>
        <option ></option>
        <option value=”-2”>Até 2</option>
        <option value=”3a5”>3 a 5</option>
        <option value=”6a10”>6 a 10</option>
        <option value=”11a15”>11 a 15</option>
        <option value=”16a25”>16 a 25</option>
        <option value=”26a35”>26 a 35</option>
        <option value=”36a50”>36 a 50</option>
        <option value=”51a75”>51 a 75</option>
        <option value=”76a100”>76 a 100</option>
        <option value=”100+”>Acima de 100</option>
        <option value=”IDK”>Não sei Informar</option>
        
       
        </select>
        
      </div>

      <hr>


      <div class="mb-3 font">
        <label  class="form-label font"><h5 class="font">Porte Fiscal</h5></label>
        <br/>
        <br/>
        
        <select class="form-control font" name="portefiscal" required>
        <option ></option>
        <option value=”Microempresa”>Microempresa</option>
        <option value=”EPequenoP”>Empresa de Pequeno Porte</option>
        <option value=”EMedioP”>Empresa de Médio Porte</option>
        <option value=”EGrandeP”>Empresa de Grande Porte</option>
       
        </select>
        <br/>
        <p>Principal Atividade:</p>
        <select class="form-control font" name="atividade" required> 
        <option ></option>
        <option value=”Academia”>Academia</option>
        <option value=”Treinamento”>Treinamento</option>
        <option value=”Pesquisa”>Pesquisa</option>
        <option value=”ONG”>ONG</option>
        <option value=”Comercio”>Comércio</option>
        <option value=”Educacao”>Educação</option>
        <option value=”Saude”>Saúde</option>
        <option value=”Outros”>Outros</option>
        <option value=”IDK”>Não sabe/Não pode informar</option>
        </select>
        
      </div>

      <hr>

      <div class="mb-3 font">
        <label  class="form-label">Site</label>
        <input type="text" class="form-control font"  placeholder="Site" name="site" required>
      </div>

      <hr>
      <br/>
      <div class="title "><h4 class="font">Endereço</h4></div>
      <br/>
      <hr>


      <div class="input-group mb-3 row " style="width:99.8%; margin:0 auto;">
      <span class="input-group-text col-md-2 font" style="border-radius:0px; background-color: #996633; color:white;">CEP/Cidade</span>
      <input type="text" class="form-control col-md-4 font" name="cep" placeholder="CEP" onkeydown="javascript: fMasc( this, mCEP );" required>
      <input type="text" class="form-control col-md-4 font" name="cidade" placeholder="Cidade" required>
      <button class="btn btn-dark col-md-2 font" style="border-radius:0px;" type="submit">  <i class="fa-solid fa-magnifying-glass-location fa-xl"></i> </button>
      </div>
      
      <hr/>
      <div class="mb-3">
        <label  class="form-label font">Rua:</label>
        <input type="text" class="form-control"  placeholder="Rua" name="rua" required>
      </div>

      
      <hr/>
      <div class="mb-3">
        <label  class="form-label font">Bairro:</label>
        <input type="text" class="form-control"  placeholder="Bairro" name="bairro" required>
      </div>

      
      <hr/>
      <div class="mb-3">
        <label  class="form-label">Numero:</label>
        <input type="text" class="form-control"  placeholder="Numero " name="numero" required>
      </div>

      
      <hr/>
      <div class="mb-3">
        <label  class="form-label">Complemento:</label>
        <input type="text" class="form-control" placeholder="complemento" name="complemento" required>
      </div>

      
      <hr/>
      <br/>
      <div class="title "><h4 class="font">Dados do Usuário</h4></div>
      <br/>
      <hr/>
      

      <div class="mb-3">
        <label  class="form-label">Nome de Usuário <mark style="color:red; background-color: #ebe7e0;">(login)</mark>:</label>
        <input type="text" class="form-control"  placeholder="Nome (login) " name="usuario" required>
        
      </div>


      <hr/>

      <div class="mb-3">
        <label  class="form-label">Nome Completo:</label>
        <input type="text" class="form-control"  placeholder="Nome Completo " name="nomecompleto" required>
        
      </div>

      <hr/>

      <div class="mb-3">
        <label  class="form-label"> Whatsapp:</label>
        <input type="tel" onkeydown="javascript: fMasc( this, mTel );" class="form-control"  placeholder="(DDD)XXXX-XXXX" name="telefone" required>
        
        <p style="color:red; margin-top:10px;">(informações poderão ser enviadas)</p>
      </div>


      <div class="mb-3">
        <label  class="form-label"> Email: </label>
        <input id="em1" type="email" class="form-control"  placeholder="Email" name="email" required onblur="confirm()">
        
      </div>


      <hr/>

      <div class="mb-3">
        <label  class="form-label"> Confirme o Email:</label>
        <input id="em2" type="email" class="form-control"  placeholder="Confirme o email" required onblur="confirm()"  >
        
        
        
        
      </div>

      <hr/>

        <div class="mb-3">
        <label  class="form-label">Senha:</label>
        <input type="password" id="s1" class="form-control"  placeholder="Senha" name="senha" required onblur="funcs()">
        <p id ="ps"></p>
        </div>


        <hr/>

        <div class="mb-3">
        <label  class="form-label">Confirme a Senha:</label>
        <input type="password" id="s2" class="form-control"  placeholder="Senha" required onblur="confirm()">
        
        </div>

      <hr/>
      <br/>
      <div class="title "><h4 class="font">Perfil </h4></div>
      <br/>
      <hr/>

      <select class="form-control font" name="perfil" required>
        <option ></option>
        <option value="S">Sys Admin</option>
        <option value="D">Dono</option>
        <option value="F">Funcionário</option>
        <option value="P">Professor</option>
        <option value="A">Aluno</option>
       
      </select>

       

      <div class="form-check">
      <input class="form-check-input" type="checkbox"  name="option1" value="something" required>
      <label class="form-check-label">Li e concordo com o <a href="">termo de adesão</a></label>
    </div>
        <br/>
        <p id="p1" style="font-weight:bold;"></p>
       <input type="submit" name="botao2" id="btd" class="btn btn-outline-dark">
      <br/>
      <br/>
      </div>

        <a class="back" href="#top"><i class="fa-solid fa-angles-up icon"></i></a>

      </form>

</div>

</body>
</html>
