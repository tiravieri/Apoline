function preview() {
 document.getElementById("picturee").style.display = "block";
 var reader = new FileReader();
 reader.readAsDataURL(document.getElementById("inputPicture").files[0]);
 reader.onload = function(event) {
  document.getElementById("picturee").src = event.target.result;
 };
};