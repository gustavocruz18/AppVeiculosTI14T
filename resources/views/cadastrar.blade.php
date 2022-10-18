@extends('padrao')
@section('content')
<div class="formularioContato">
        
        <form action="#" method="post" enctype="multipart/form-data">

            <label>
                <span><i class="icon icon-user-1"></i> Nome do veiculo</span>
                <input type="text" name="nome" required="">
            </label>
            
            <label>
                <span><i class="icon icon-email"></i> E-mail</span>
                <input type="text" name="email" class="fade_8S">
            </label>

            <label>
                <span><i class="icon icon-flag"></i>Descrição do veiculo</span>
                <input type="text" name="assunto" required="">
            </label>
            
            <label>
                <span><i class="icon icon-comment"></i> fale um pouco do veiculo</span>
                 <textarea name="mensagem" rows="3" required=""></textarea> 
            </label>
           
            <input type="hidden" name="acao" value="enviar" />
            <button class="btn-envia" title="Enviar"><b class="icon icon-paper-plane-o"> Enviar</b></button>

        
        </form>

    </div><!--Formulario Contato-->

@endsection