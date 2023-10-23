<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doações e Recebimentos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .modal-content {
            background-color: white;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #ccc;
            width: 80%;
            max-width: 700px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-row {
            display: flex;
            justify-content: space-between;
        }
        .half-width {
            width: 48%; /* Define o tamanho para ocupar metade do modal */
        }
        .btn {
            background-color: #243A73;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #1A2957;
        }
        /* Responsiveness */
        @media screen and (max-width: 600px) {
            .modal-content {
                width: 90%;
            }
            .half-width {
                width: 100%; /* Retorna ao tamanho completo em telas menores */
            }
        }
    </style>
</head>
<body>

<h2>Doações e Recebimentos</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Abrir Cadastro</button>

<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" id="closeBtn">&times;</span>
    <h3>Cadastrar Doação ou Recebimento</h3>
    <form action="#" method="POST">
    @csrf
        <div class="form-row">
            <div class="form-group half-width">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group half-width">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group half-width">
                <label for="donation">Doação ou Necessidade:</label>
                <input type="text" id="donation" name="donation" class="form-control" required>
            </div>
            <div class="form-group half-width">
                <label for="quantity">Quantidade:</label>
                <input type="number" id="quantity" name="quantity" class="form-control" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group half-width">
                <label for="city">Cidade:</label>
                <input type="text" id="city" name="city" class="form-control" required>
            </div>
            <div class="form-group half-width">
                <label for="state">Estado:</label>
                <input type="text" id="state" name="state" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="delivery">Local de Entrega:</label>
            <input type="text" id="delivery" name="delivery" class="form-control" required>
        </div>
        <div class="form-group full-width">
            <label for="message">Detalhes:</label>
            <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn">Cadastrar</button>
    </form>
  </div>
</div>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementById("closeBtn");

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
