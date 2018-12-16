/* Javascript-Index der Knicks-Fanpage von Andreas Ganz, Mai 2018          */

/* 01 Start der Image-Gallery                                              */
/* 02 Start des Mobile-Menus                                               */
/* 03 Start der groesseren Karten-Ansicht GoogleMaps auf Kontakt-Seite     */
/* 04 Start der Formvaliderung                                             */



// 01 Start der Image-Gallery

// Gallery wird geöffnet und der Standardwert wird übergeben (imageIndex)
function openGallery($gallery, imageIndex = 0) {
  // Alle Gallery-Bilder werden gespeichert
  const $galleryThumbnails = $gallery.find('img');

  // HTML wird in String integriert
  const $galleryElement = $(`
    <div class="gallery-lightbox">
      <img src="../pictures/mobile/close-button_round_black.svg" class="gallery-close" alt="gallery-close" title="gallery-close">
      <img src="../pictures/mobile/next-button_round_black.svg" class="gallery-next" alt="gallery-next" title="gallery-next">
      <img src="../pictures/mobile/previous-button_round_black.svg" class="gallery-previous" alt="gallery-previous" title="gallery-previous">
      <div class="gallery-image-container">
        <img src="" alt="">
      </div>
      <div class="gallery-status"></div>
    </div>
  `);
  $galleryElement.prependTo(document.body);

  function showFullImage() {
    // Grosses Bild wird eingeblendet
    const fullImageUrl = $galleryThumbnails
      .eq(imageIndex)
      .attr('data-full-image');

    // Unter bestehendem Element werden weitere Child-Elemente gesucht, Bilder werden geladen
    $galleryElement
      .find('.gallery-image-container > img')
      .attr('src', fullImageUrl);

    // Bild-Legende wird erstellt
    $galleryElement
      .find('.gallery-status')
      .text(`Bild ${imageIndex + 1} von ${$galleryThumbnails.length}`);
  }

  function nextSlide() {
    // Image-Index wird die Listen-Länge der Bilder mit dieser Option nie überschreiten
    imageIndex = (imageIndex + 1) % $galleryThumbnails.length;
    showFullImage();
  }

  // Event-Listeners werden hinzugefügt für User-Interaction, Vorwärts-Aktion wird definiert
  $galleryElement
    .find('.gallery-next')
    .click(() => {
      console.log('Gallery: Slide to the right');
      nextSlide();
  });

  // Interval für Auto-Slide wird gesetzt
  setInterval(() => nextSlide(), 6000);
    console.log('Gallery: Auto-Slide activated');

  // Rückwärts-Aktion wird definiert
  $galleryElement
    .find('.gallery-previous')
    .click(() => {
      imageIndex = imageIndex === 0 ? $galleryThumbnails.length - 1 : imageIndex - 1;
        console.log('Gallery: Slide to the left');
      showFullImage();
    });

  // Schliessen-Funktion über Close-Button wird aktiviert
  $galleryElement
    .find('.gallery-close')
    .click(() => $galleryElement.remove()
      && console.log('Gallery: Closed'));
    showFullImage();
 }

// Gallery wird geöffnet, wenn Bild angeklickt wird
$('[data-gallery] > img')
  .click((event) => {
    // Parent-Element der Bild-Gallery wird angesteuert
    const $gallery = $(event.target).parent();
    // Es wird eine Liste mit allen Bildern erstellt
    const $items = $gallery.find('img');
    // Erzeugt den Index von jenem Bild, welches angewählt wird
    const index = $items.index(event.target);
    openGallery($gallery, index);
      console.log('Gallery: Opened');
  });

// Ende der Image-Gallery



// 02 Start des Mobile-Menus

const offCanvasButton = document.querySelector('.off-canvas-button');
const mainContent = document.querySelector('.content');

// Menu wird geöffnet beim Klick-Event
if (offCanvasButton) {
  offCanvasButton.addEventListener('click', () =>
     document.documentElement.classList.toggle('off-canvas-open')
       && console.log('Mobile-Menu: Opened')
  );

  mainContent.addEventListener('click', () =>
    document.documentElement.classList.remove('off-canvas-open')
      && console.log('Mobile-Menu: Closed')
  );

  // Beim Swipen mit Finger wird das Menu bei genügender Geschwindigkeit wieder geschlossen
  let previousTouch;
  document.body.addEventListener('touchmove', (event) => {
    if (previousTouch) {
      const velocity = previousTouch.pageX - event.changedTouches[0].pageX;

      if (velocity > 30) {
        document.documentElement.classList.add('off-canvas-open');
      } else if (velocity < -30) {
        document.documentElement.classList.remove('off-canvas-open');
      }
    }

    previousTouch = event.changedTouches[0];
  });

  document.body.addEventListener('touchend', (event) => previousTouch = undefined);

  // Mobile-Menu wird über Close-Button geschlossen
  const mobileClose = document.querySelector('.mobile-close');
  mobileClose.addEventListener('click', () =>
    document.documentElement.classList.remove('off-canvas-open')
      && console.log('Mobile-Menu: Closed'));
}

// Ende des Mobile-Menus



// 03 Start der groesseren Karten-Ansicht GoogleMaps auf Kontakt-Seite

const modalLinks = document.querySelectorAll('[data-modal-link]');
const modal = document.querySelector('.modal');
const modalClose = document.querySelector('.modal-close');
const modalIframe = document.querySelector('.modal-iframe');

modalClose.addEventListener('click', () => modal.classList.remove('modal-active')
  && console.log('Modal: Closed'));


for (let modalLink of modalLinks) {
  modalLink.addEventListener('click', () => {
    modal.classList.toggle('modal-active');
    const link = modalLink.getAttribute('data-modal-link');
    modalIframe.src = link;
      console.log('Modal: Opened');
  });
}

// Ende der groesseren Karten-Ansicht GoogleMaps auf Kontakt-Seite



// 04 Start der Formvaliderung
/*
function validateForm() {
  const errors = [];

  // Required
  const requiredElements = document.querySelectorAll('label[data-required]');
  for (const element of requiredElements) {
    const input = element.querySelector('input') || element.querySelector('textarea');

    if (input.value.length === 0) {
      errors.push({
        element: element,
        message: element.getAttribute('data-required')
      });
    }
  }
  // End Required

  // Regex
  const regexElements = document.querySelectorAll('label[data-validate-regex]');
  for (const element of regexElements) {
    const regex = new RegExp(element.getAttribute('data-validate-regex'));
    const input = element.querySelector('input') || element.querySelector('textarea');

    if (!regex.test(input.value)) {
      errors.push({
        element: element,
        message: element.getAttribute('data-validate-regex-message')
      });
    }
  }
  // End Regex

  // Checked
  const checkedElements = document.querySelectorAll('label[data-validate-checked]');
  for (const element of checkedElements) {
    const hasChecked = Array
      .from(element.querySelectorAll('input[type="checkbox"],input[type="radio"]'))
      .some(inputElement => inputElement.checked);

    if (!hasChecked) {
      errors.push({
        element: element,
        message: element.getAttribute('data-validate-checked')
      });
    }
  }
  // End checked

  return errors;
}

function updateForm(errors) {
  const formFields = document.querySelectorAll('.form-field');
  for (const formField of formFields) {
    formField.classList.remove('form-error');
    formField.querySelector('.errors').innerHTML = '';
  }

  // Fehlernachricht-Definiton
  for (const error of errors) {
    error.element.classList.add('form-error');
    error.element.querySelector('.errors').innerHTML += `
      <p style="color: red; position: absolute">${error.message}</p>
    `;
  }
}

// Fehler werden ermittelt und upgedated
const form = document.querySelector('form');
let formSubmitCount = 0;
form.addEventListener('submit', (event) => {

  const errors = validateForm();
    console.log('Form gets validated');
  updateForm(errors);

  if (errors.length !== 0) {
    event.preventDefault();
    formSubmitCount++;
  }

});

// Fehler werden schon angezeigt, wenn Felder verlassen werden
const allElements = document.querySelectorAll('[data-required] textarea, [data-validate-regex] textarea, [data-required] input, [data-validate-regex] input, [data-validate-checked] input');
for (const element of allElements) {
  const update = () => {
    if (formSubmitCount > 0) {
      const errors = validateForm();
      updateForm(errors);
    }
  };

  element.addEventListener('keyup', update);
  element.addEventListener('change', update);
}
*/
// Ende der Formvaliderung
