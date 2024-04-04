function openNav() {
  document.getElementsByClassName("sidenav")[0].style.width = "250px";
  document.getElementsByClassName("content")[0].style.marginLeft = "250px";
}

function closeNav() {
  document.getElementsByClassName("sidenav")[0].style.width = "0";
  document.getElementsByClassName("content")[0].style.marginLeft= "0";
}


document.getElementById('changeColorBtn').addEventListener('click', function() {
  var links = document.querySelectorAll('.btnnav1');
  links.forEach(function(link) {
    link.classList.add('clicked');
  });
});
