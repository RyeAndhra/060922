<html>

<head>

<title>Form Biodata</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body {
  background-color: #F7EDE2;
  font-family: sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

input[type=text] {
  width: 133%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=number] {
  width: 133%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=date] {
  width: 133%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

select {
  width: 133%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

textarea {
  width: 133%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=radio] {
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


input[type=submit] {
  background-color: #84A59D;
  color: white;
  width: 35%;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #627F78;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 30px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 18px;
}

.column {
  background-color: #F7EDE2;
  color: #84A59D;
  float: left;
  width: 40%;
  padding: 40px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width:600px) {
  .column .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>

</head>

<body>

<div class="row">
<div class="column">
<div class="container">
  <h2 style="color: #627F78;">Biodata</h2>
  <form method="get" action="Print.php">
    <div class="row">
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Nama Lengkap">
    </div>
    </div>

    <div class="row">
    <div class="col-75">
      <input type="radio" id="gender" name="gender" value="L">Pria
      <input type="radio" id="gender" name="gender" value="P">Wanita
    </div>
    </div>
        
    <div class="row">
    <div class="col-75">
      <select name=religion>
        <option value="">-- Pilih Agama --</option>
        <option value="Islam">Islam</option>
        <option value="Katolik">Katolik</option>
        <option value="Protestan">Protestan</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
      </select>
    </div>
    </div>
        
    <div class="row">
    <div class="col-75">
      <textarea name="address" rows="3" cols="30" placeholder="Alamat Lengkap"></textarea>
    </div>
    </div>
        
    <div class="row">
    <div class="col-75">
      Tanggal Lahir
      <input type="date" id="bday" name="bday" value="">
    </div>
    </div>

    <div class="row">
    <div class="col-75">
      <input type="checkbox" name="hobby[]" value="Game"> Game
      <input type="checkbox" name="hobby[]" value="Olahraga"> Olahraga
      <input type="checkbox" name="hobby[]" value="Belajar"> Belajar
    </div>
    </div>

    <div class="row">
    <div class="col-75">
      <input type="text" id="ambition" name="ambition" placeholder="Cita-Cita">
    </div>
    </div>

    <div class="row">
    <div class="col-75">
      <input type="number" id="age" name="age" placeholder="Usia">
    </div>
    </div>

    <div class="row">
    <div class="col-75">
      <input type="text" id="school" name="school" placeholder="Asal Sekolah">
    </div>
    </div>

    <br>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</div>
</div>

</body>

</html>