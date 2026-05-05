<div class="whatsapp-floating">
  <a href="https://api.whatsapp.com/send?phone=8928110000&amp;text=Hi, I would like to do enquire about your services."
    target="_blank">
    <img class="cust_whatsapp" src="images/whatsapp-icon.png" alt="whatsapp">
  </a>
</div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/slick-animation.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/flatpickr.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/gsap.min.js"></script>
<script src="js/ScrollTrigger.min.js"></script>
<script src="js/SplitText.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/knob.js"></script>
<script src="js/parallax.js"></script>
<script src="js/vanilla-tilt.js"></script>
<script src="js/splitting.js"></script>
<script src="js/splitType.js"></script>
<script src="js/script-gsap.js"></script>
<script src="js/script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- <script>
    const track = document.getElementById("track");
    const cards = document.querySelectorAll(".video-card");

    const modal = document.getElementById("videoModal");
    const frame = document.getElementById("videoFrame");
    const closeBtn = document.querySelector(".close");

    let index = 0;
    const total = cards.length;

    // 🔥 AUTOPLAY SLIDER
    function slide() {
      index++;

      if (index > total - 3) {
        index = 0; // reset (because 3 visible)
      }

      const cardWidth = cards[0].offsetWidth;
      track.style.transform = `translateX(-${index * cardWidth}px)`;
    }

    setInterval(slide, 2500);

    // 🔥 POPUP VIDEO
    cards.forEach(card => {
      card.addEventListener("click", () => {
        const videoURL = card.getAttribute("data-video");
        frame.src = videoURL + "?autoplay=1";
        modal.style.display = "flex";
      });
    });

    // CLOSE MODAL
    closeBtn.onclick = closeModal;

    modal.onclick = (e) => {
      if (e.target === modal) closeModal();
    };

    function closeModal() {
      modal.style.display = "none";
      frame.src = "";
    }
  </script> -->

<!-- <script>
    const cards = document.querySelectorAll(".video-card");

    const modal = document.getElementById("videoModal");
    const frame = document.getElementById("videoFrame");
    const closeBtn = document.querySelector(".close");

    // popup open
    cards.forEach(card => {
      card.addEventListener("click", () => {
        const videoURL = card.getAttribute("data-video");
        frame.src = videoURL + "?autoplay=1";
        modal.style.display = "flex";
      });
    });

    // close popup
    closeBtn.onclick = closeModal;

    modal.onclick = (e) => {
      if (e.target === modal) closeModal();
    };

    function closeModal() {
      modal.style.display = "none";
      frame.src = "";
    }
  </script> -->

<!-- <script>
    $(document).ready(function() {

      // ===== POPUP =====
      $(".video-card").on("click", function() {
        let videoURL = $(this).data("video");
        $("#videoFrame").attr("src", videoURL + "?autoplay=1");
        $("#videoModal").fadeIn();
      });

      $(".close, #videoModal").on("click", function(e) {
        if (e.target !== this) return;
        $("#videoModal").fadeOut();
        $("#videoFrame").attr("src", "");
      });

      // ===== CONTINUOUS SLIDER =====
      let $track = $(".slider-track");

      // duplicate content for smooth loop
      $track.append($track.html());

      let speed = 1; // 🔥 increase for faster (2,3,4...)

      function move() {
        let firstItemWidth = $(".video-card").outerWidth(true);

        $track.css("transform", "translateX(-=" + speed + "px)");

        // reset when half scrolled
        if (Math.abs(getTranslateX($track)) >= $track.width() / 2) {
          $track.css("transform", "translateX(0)");
        }

        requestAnimationFrame(move);
      }

      move();

      // helper to get current translateX
      function getTranslateX(el) {
        let style = window.getComputedStyle(el[0]);
        let matrix = new WebKitCSSMatrix(style.transform);
        return matrix.m41;
      }

    });
  </script> -->

<!-- <script>
    var videoswiper = new Swiper(".videoswiper", {

      slidesPerView: 3,
      spaceBetween: 0,
      loop: true,

      // ✅ FIXED AUTOPLAY
      autoplay: {
        delay: 2000, // speed (lower = faster)
        disableOnInteraction: false
      },

      // ✅ NAVIGATION (NEW FORMAT)
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },

      pagination: {
        el: ".pagination",
        clickable: true
      },

      breakpoints: {
        1280: {
          slidesPerView: 3
        },
        800: {
          slidesPerView: 2
        },
        640: {
          slidesPerView: 1
        }
      }
    });
    $(".videoswiper .swiper-slide").each(function(index, element) {
      var href = $(element).find(".card-img a").attr("href");
      $(element).magnificPopup({
        items: {
          src: href
        },
        type: "iframe"
      });
    });
  </script> -->

<script>
  var videoswiper = new Swiper(".videoswiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,

    autoplay: {
      delay: 2500,
      disableOnInteraction: false
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },

    breakpoints: {
      1024: {
        slidesPerView: 3
      },
      768: {
        slidesPerView: 1
      },
      480: {
        slidesPerView: 1
      }
    }
  });


  // ===== FIX: event delegation (IMPORTANT FOR SWIPER LOOP) =====
  document.addEventListener("click", function(e) {
    let card = e.target.closest(".video-open");

    if (card) {
      let videoURL = card.getAttribute("data-video");

      document.getElementById("videoFrame").src = videoURL + "?autoplay=1";
      document.getElementById("videoModal").style.display = "flex";
    }
  });


  // ===== CLOSE =====
  document.addEventListener("click", function(e) {
    if (e.target.id === "closeVideo" || e.target.id === "videoModal") {
      document.getElementById("videoModal").style.display = "none";
      document.getElementById("videoFrame").src = "";
    }
  });
</script>

<!-- <script>
    $(document).ready(function() {

      var items = [{
          src: "https://www.youtube.com/embed/VIDEO1?autoplay=1&mute=1"
        },
        {
          src: "https://www.youtube.com/embed/VIDEO2?autoplay=1&mute=1"
        },
        {
          src: "https://www.youtube.com/embed/VIDEO3?autoplay=1&mute=1"
        }
      ];

      $(".tile").each(function(index) {
        $(this).magnificPopup({
          items: items,
          type: "iframe",
          gallery: {
            enabled: true,
            loop: true
          },
          index: index
        });
      });

    });
  </script>  -->


<!-- <script>
    $("#facebook_0").magnificPopup({
      items: {
        src: "https://www.facebook.com/v2.5/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fvideo.php%3Fv%3D10154556367432847"
      },
      type: "iframe"
    });

    $("#facebook_1").magnificPopup({
      items: {
        src: "https://www.facebook.com/v2.5/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fvideo.php%3Fv%3D10154556367432847"
      },
      type: "iframe"
    });

    $("#facebook_2").magnificPopup({
      items: {
        src: "https://www.facebook.com/v2.5/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fvideo.php%3Fv%3D10154556282892847"
      },
      type: "iframe"
    });

    $("#facebook_3").magnificPopup({
      items: {
        src: "https://www.facebook.com/v2.5/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fvideo.php%3Fv%3D10154603410842847"
      },
      type: "iframe"
    });

    $("#facebook_4").magnificPopup({
      items: {
        src: "https://www.facebook.com/v2.5/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fvideo.php%3Fv%3D10154582395637847"
      },
      type: "iframe"
    });

    $("#facebook_5").magnificPopup({
      items: {
        src: "https://www.facebook.com/v2.5/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fvideo.php%3Fv%3D10154556282892847"
      },
      type: "iframe"
    });
    $("#facebook_6").magnificPopup({
      items: {
        src: "https://www.facebook.com/v2.5/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fvideo.php%3Fv%3D10154556367432847"
      },
      type: "iframe"
    });
  </script> -->