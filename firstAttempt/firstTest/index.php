<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>YistyShoes</title>
</head>
<body>
  <h1>YistiShoes</h1>
  <p>Some text here.</p>
  <form method="GET" id="formTest">
    <input name="personName" type="text" value="name" id="txtDBField1">
    <input name="personLastname" type="text" value="lastname" id="txtDBField1">
    <div>
      <button type="submit" onclick="submitForm('php/write.php')"  id="btnGuardar">Guardar DB</button>
      <button type="submit" onclick="submitForm('php/read.php')" id="btnLeer">Leer DB</button>
    </div>
    <div>
      <span id="lblAviso">Leído con éxito...</span>
    </div>
  </form>
  <script src="./js/main.js"></script>
  <script type="text/javascript">
    function submitForm(action) {
      var form = document.getElementById('formTest');
      form.action = action;
      form.submit();
    }
  </script>
</body>
</html>