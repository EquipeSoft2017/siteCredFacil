<form action="simulador.php" method="POST">
Nome: <input type=text id=id_nome name=txt_nome required><br><br>
Email: <input type=text id=id_email name=txt_email required><br><br>
Telefone: <input type=text id=id_telefone name=txt_telefone required placeholder='(83) 95555-3333'"> <br><br>
Valor desejado: <input type=text id=id_valor name=txt_valor required><br><br>
Número de Parcelas:
<select id=id_parcela name=txt_parcela>
<option id=id_1 value=1>1</option>
<option id=id_2 value=2>2</option>
<option id=id_3 value=3>3</option>
<option id=id_4 value=4>4</option>
<option id=id_5 value=5>5</option>
<option id=id_6 value=6>6</option>
<option id=id_7 value=7>7</option>
<option id=id_8 value=8>8</option>
<option id=id_9 value=9>9</option>
<option id=id_10 value=10>10</option>
<option id=id_11 value=11>11</option>
<option id=id_12 value=12>12</option>
</select><BR><br>
Cartão de Crédito:
<select id=id_cartao name=txt_cartao>
<option id=id_visa value=Visa>Visa</option>
<option id=id_master value=MsterCard>MarterCard</option>
<option id=id_itau value=Itaucard>Itaucard</option>
<option id=id_hiper value=Hipercard>Hipercard</option>
<option id=id_dinners value=Dinners>Dinners</option>
<option id=id_rede value=Rede Card>Rede Card</option>
</select><BR><br>
<input type=submit value="Cadastrar">

</form>
