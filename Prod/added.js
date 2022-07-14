var click = document.getElementById('add');
  var alert = document.getElementById('alert');
  var dim = document.getElementById('dim');
  var b = document.getElementById('bo');
  
  function tick() {
    document.getElementById('alert').style.display = "block";
    document.getElementById('alert').style.animation = "faded ease 2s";
    document.getElementById('dim').style.filter = "blur(8px)";
  }