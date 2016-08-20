@extends('layout.master')

@section('conteudo')

	@foreach($ola as $values)

	<span style="color: red"> {!!$values['CEP']!!} </span>

	@endforeach

<html>
<title>
	Cadastro De CEP
</title>
<body>
	<p>Cadastro de CEP/Endereco</p>

	<form action="/inserirCep" method="post">
		{{csrf_field()}}
	  CEP:......... <input type="text" name="cep"><br>
	  Endereco:. <input type="text" name="endereco"><br>
	  Cidade:..... <input type="text" name="cidade"><br>
	  Estado:..... <input type="text" name="estado"><br>
	  <input type="submit" name= "cadastrar" value="Cadastrar/Atualizar">
	  <input type="submit" name= "pesquisar" value="Pesquisar">
	</form>
</body>	
</html>	

@endsection