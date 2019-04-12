window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("topBtn").style.display = "block";
  } else {
    document.getElementById("topBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}



function choose(choice) {
  let imgID = choice.id;
  
  // Get the modal
  var modal = document.getElementById('myModal');
  
  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById(imgID);
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  
  modal.style.display = "block";
  modalImg.src = img.src;
  captionText.innerHTML = img.alt;

  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() { 
    modal.style.display = "none";
  }
  }



