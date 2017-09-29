<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
	</head>
	<body>
		<div class="line outside">
			<div class="line inside">
				<table>
					<tbody>
						<tr>
							<td>
								<img src="{{asset('assets/images/tsemanatech-464x243.png')}}" class="logo semanatech">
							</td>
							<td>
								<img src="{{asset('images/fat.png')}}" class="logo fat">
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<p class="p0 ft0">CERTIFICADO DE PARTICIPAÇÃO<p>
								<P class="p1 ft1">A Faculdade Anísio Teixeira certifica que</P>
								<P class="p2 ft2">Felipe Sousa Melo da Silva</P>
								<P class="p3 ft2">Santos Xavier</P>
								<P class="p4 ft4">participou do minicurso <SPAN class="ft3">Introdução ao Cloud Computer </SPAN>na IV Semana Tech, evento promovido pelos cursos de Redes de Computadores e Sistemas para Internet nos dias 00/00/0000 e 00/00/000 perfazendo um total de 00 horas de carga horária.</P>

							</td>
						</tr>
						<tr>
							<td colspan="2">
								<p class="assinatura"><img src="{{asset('images/assinatura.png')}}"></p>
								<P class="p5 ft5">JAMYLLE SANTANA DA FONSECA</P>
								<P class="p6 ft6">COORDENADORA DOS CURSOS DE REDES DE COMPUTADORES E SISTEMAS PARA INTERNET</P>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		
		
		<style>
			.line{
    			border-color: #ccd4d7;
				border-style: solid;
			}
			.line.outside{	
    			border-width: 8px;
				border-radius: 30px;
				padding: 10px;
				margin: 10px
			}
			.line.inside{
    			border-width: 4px;
				border-radius: 15px;
				padding: 10px 100px;
			}
			.logo{
				height: 100px;
			}
			.logo.fat{
				float: right;
			}
			.logo.semanatech{
				float: left;
			}
			table{
				width: 100%;
			}
			.assinatura{
				text-align: center;
			}
			
			
			.ft0{font: 40px 'Arial';color: #968d8d;line-height: 45px;}
			.ft1{font: 19px 'Arial';color: #968d8d;line-height: 22px;}
			.ft2{font: 50px 'Arial';color: #cbd2d9;line-height: 57px;}
			.ft3{font: bold 19px 'Arial';color: #968d8d;line-height: 30px;}
			.ft4{font: 19px 'Arial';color: #968d8d;line-height: 30px;}
			.ft5{font: 17px 'Arial';color: #968d8d;line-height: 19px;}
			.ft6{font: 17px 'Arial';color: #968d8d;line-height: 22px;}

			.p0{text-align: center;margin-top: 0px;margin-bottom: 0px;}
			.p1{text-align: center;margin-top: 46px;margin-bottom: 0px;}
			.p2{text-align: center;margin-top: 13px;margin-bottom: 0px;}
			.p3{text-align: center;margin-top: 8px;margin-bottom: 0px;}
			.p4{text-align: center;margin-top: 21px;margin-bottom: 0px;}
			.p5{text-align: center;margin-top: 0px;margin-bottom: 0px;}
			.p6{text-align: center;margin-top: 4px;margin-bottom: 0px;text-indent: 6px;}
		</style>
	</body>
</html>