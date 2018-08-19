<?php	

	include_once("conexaobanco.php");
	$html = '<table border=1';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>AREA ATUAÇÃO</th>';
	$html .= '<th>NOME</th>';
	$html .= '<th>CPF</th>';
	$html .= '<th>CNPJ</th>';
	$html .= '<th>CREA</th>';
	$html .= '<th>TELEFONE</th>';
	$html .= '<th>EMAIL</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$result_cadastros = "SELECT * FROM USUARIO_CADASTRADO";
	$resultado_decadastro = mysqli_query($conn, $result_cadastros);
	while($row_cadastros = mysqli_fetch_assoc($resul_cadastro)){
		$html .= '<tr><td>'.$row_cadastros['AREA_ATUACAO'] . "</td>";
		$html .= '<td>'.$row_cadastros['NOME'] . "</td>";
		$html .= '<td>'.$row_cadastros['CPF'] . "</td>";
		$html .= '<td>'.$row_cadastros['CNPJ'] . "</td>";
		$html .= '<td>'.$row_cadastros['CREA'] . "</td></tr>";
		$html .= '<td>'.$row_cadastros['TELEFONE'] . "</td></tr>";
		$html .= '<td>'.$row_cadastros['EMAIL'] . "</td></tr>";		
	}
	
	$html .= '</tbody>';
	$html .= '</table';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;"> Relatório de Profissionais cadastrados</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_clientes_cadastrados.pdf", 
		array(
			"Attachment" => true //Para realizar o download  true,false para visualizar
		)
	);
?>