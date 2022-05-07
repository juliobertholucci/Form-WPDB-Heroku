





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4117b8be6f.js" crossorigin="anonymous"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Formulário</title>

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
	
    


    </script>


    <style>

    html *
    {
        
        font-family: 'Oxygen', sans-serif;
        font-weight:bold;
    }

    .principal{

        width:100%;
        max-height: 100vh;
        
       

    }


    @media screen and (max-width: 900px) {
            .floor {
                height:6vh;
            }

        }

    body{margin:0;padding:0;}


    .box {
           text-align:center;
           height:auto;
           border: 2px solid #996633;
           margin: 0 auto;
           width:40%;
           
       }
        @media screen and (max-width: 900px) {
            .box {
                width: 95%;
                margin:0 auto;
            }

        }

    .texttop{

        margin:0 auto;
        width:90%;
        height:8vh;

    }


    .font{

        font-family: 'Oxygen', sans-serif;

    }

    .floor{

        width:90%;
        margin:0 auto;
        background-color: #996633;
        height:8vh;
        border-radius:10px;
        padding-top:10px;
        border:1px solid black;

    }

    </style>

    

</head>



<body>
    

    <div class="principal">




        
       <div class= "texttop font "><h1 style="text-align:center; margin-top:10px;">Cadastre-se para começar a utilizar nossa aplicação!</h1>
            
        </div>
       <hr>

        <br>
        

        <div class="box mt-5">

        
        <h5  class="mt-3 font">Informe o CPF para iniciar o cadastro</h5>

        

        <div class="p-2 mb-3 mt-3">
        <form method="POST" action="page.php"  >
        <input type="text" class="form-control text-center" name="cpf" onkeydown="javascript: fMasc( this, mCPF );" required>
        <br>
        <input type="submit" value="Enviar" name="botao1"  class="btn btn-outline-dark  font"/>
        <br>
        <br>
        </form>
        <div class="floor">

        <p class="font"> <i class="fa-solid fa-shield"></i> Dados Seguros </p>

        </div>
        

        </div>


        </div>
        
        




    </div>



</body>
</html>


