<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recarga e Saldo do Cartão</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f7f7f7;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    #cartao-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      text-align: center;
      max-width: 400px;
      width: 100%;
      box-sizing: border-box;
    }

    #saldo {
      font-size: 24px;
      margin-bottom: 20px;
      color: #333;
    }

    .btn {
      background-color: #f48840;
      color: #fff;
      padding: 15px 30px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin: 10px;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #45a049;
    }

    #form-cartao {
      display: none;
      margin-top: 20px;
    }

    input {
      padding: 12px;
      margin: 8px 0;
      width: 100%;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    #btn-submit-cartao {
      background-color: #4caf50;
      color: #fff;
      padding: 15px 30px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    #btn-submit-cartao:hover {
      background-color: #45a049;
    }

    #opcoes-pix {
      display: none;
      margin-top: 20px;
    }

    .opcao-pix {
      margin: 5px;
    }

    #opcoes-pix .btn {
      width: 100%;
    }
  </style>
</head>
<body>

  <div id="cartao-container">
    <div id="saldo">Saldo Atual: R$<span id="saldo-valor">100,00</span></div>

    <button class="btn" onclick="exibirOpcoesPix()">Recarregar com Pix</button>
    <button class="btn" onclick="escolherMetodoPagamento('cartao')">Recarregar com Cartão</button>

    <div id="opcoes-pix">
      <div class="opcao-pix"><button class="btn" onclick="recarregar(10, 'pix')">R$10,00</button></div>
      <div class="opcao-pix"><button class="btn" onclick="recarregar(20, 'pix')">R$20,00</button></div>
      <div class="opcao-pix"><button class="btn" onclick="recarregar(50, 'pix')">R$50,00</button></div>
      <div class="opcao-pix"><button class="btn" onclick="recarregar(100, 'pix')">R$100,00</button></div>
    </div>

    <div id="form-cartao">
      <label for="numero-cartao">Número do Cartão:</label>
      <input type="text" id="numero-cartao" placeholder="XXXX-XXXX-XXXX-XXXX" required>

      <label for="nome-cartao">Nome no Cartão:</label>
      <input type="text" id="nome-cartao" placeholder="Nome Completo" required>

      <label for="validade-cartao">Validade:</label>
      <input type="text" id="validade-cartao" placeholder="MM/AA" required>

      <label for="cvv-cartao">CVV:</label>
      <input type="text" id="cvv-cartao" placeholder="CVV" required>

      <button id="btn-submit-cartao" onclick="recarregarCartao()">Recarregar</button>
    </div>
  </div>

  <script>
    function exibirOpcoesPix() {
      document.getElementById('opcoes-pix').style.display = 'block';
    }

    function escolherMetodoPagamento(metodo) {
      if (metodo === 'pix') {
        document.getElementById('opcoes-pix').style.display = 'block';
        document.getElementById('form-cartao').style.display = 'none';
      } else {
        document.getElementById('form-cartao').style.display = 'block';
        document.getElementById('opcoes-pix').style.display = 'none';
      }
    }

    function recarregar(valor, metodoPagamento) {
      // Aqui você faria uma requisição ao servidor para processar a recarga
      // e atualizar o saldo. Por enquanto, vamos apenas simular a atualização.
      let saldoAtual = parseFloat(document.getElementById('saldo-valor').innerText.replace('R$', ''));
      let novoSaldo = saldoAtual + valor;
      document.getElementById('saldo-valor').innerText = novoSaldo.toFixed(2);
      alert(`Recarga de R$${valor} via Pix realizada com sucesso! Novo saldo: R$${novoSaldo.toFixed(2)}`);
      document.getElementById('opcoes-pix').style.display = 'none';
    }

    function recarregarCartao() {
      // Aqui você faria uma requisição ao servidor para processar a recarga
      // e atualizar o saldo. Por enquanto, vamos apenas simular a atualização.
      let valor = parseFloat(prompt("Informe o valor da recarga:"));
      if (!isNaN(valor) && valor > 0) {
        let saldoAtual = parseFloat(document.getElementById('saldo-valor').innerText.replace('R$', ''));
        let novoSaldo = saldoAtual + valor;
        document.getElementById('saldo-valor').innerText = novoSaldo.toFixed(2);
        alert(`Recarga de R$${valor} via Cartão de Crédito realizada com sucesso! Novo saldo: R$${novoSaldo.toFixed(2)}`);
        document.getElementById('form-cartao').style.display = 'none';
      } else {
        alert("Por favor, insira um valor válido para a recarga.");
      }
    }
  </script>

</body>
</html>
