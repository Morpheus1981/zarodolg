<script>
function showUser(str) {
if (str == "") {
    document.getElementById("p.list").innerHTML = "";
  return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("p.list").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","felvittautolista.php?id="+str,true);
    xmlhttp.send();
  }
}
</script>
