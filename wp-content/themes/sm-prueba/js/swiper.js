document.addEventListener('DOMContentLoaded', function() {


  fetch('https://fakerapi.it/api/v2/images?_quantity=3')
    .then(response => response.json())
    .then(info => {
      const slidesContainer = document.querySelector('.banner-swiper .swiper-wrapper');

      info.data.forEach(sliders => {
        const slide = document.createElement('div');
        slide.classList.add('swiper-slide');
        slide.style.backgroundImage = `url(${sliders.url})`;
        slide.style.backgroundSize = 'cover';
        slide.style.backgroundPosition = 'center';
        slide.style.backgroundRepeat = 'no-repeat';

        slide.innerHTML = `
          <div class="slide-content">
            <h2 class="slider-title">${sliders.title}</h2>
            <p class="slider-text">${sliders.description}</p>
          </div>
        `;

        slidesContainer.appendChild(slide);
      });

      new Swiper('.banner-swiper', {
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        }
      });
    })
    .catch(error => {
      console.error('Error cargando las imágenes:', error);
    });
});