// Group LIST
// -----------------------------------------
// Shows the complete list of groups when
// a button is clicked.
// -----------------------------------------

var commentList = document.querySelector('.post-comments__comments');
var commentButton = document.getElementById('show-comments');

function commentReveal() {
  commentList.classList.add('js-is-open');
  commentButton.remove();
}

if (commentButton) {
  commentButton.addEventListener('click', commentReveal);
}
