// ----------------------
// SHARE BUTTON
// ----------------------
// Support for the web share API

const title = document.title;
const url = document.location.href;
const shareButton = document.getElementById('share-button');

if (navigator.share) {
  shareButton.classList.add('js-navigator-share');
}

function shareReveal() {
  if (navigator.share) {
    navigator
      .share({
        title: title,
        url: url
      })
      .then(() => {
        console.log('Thanks for sharing!');
      })
      .catch(console.error);
  }
}

if (shareButton) {
  shareButton.addEventListener('click', shareReveal);
}
