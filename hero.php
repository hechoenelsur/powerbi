<section id="home" class="video-hero-section">
  <div class="container">
    <div class="hero-grid">
      <!-- Columna de texto -->
      <div class="text-column">
        <h4 class="wow fadeInUp">Impulsá tu negocio con</h4>
        <h3>Microsoft Power BI</h3>
        <p>
          Visualizá tus datos como nunca antes. Automatizá reportes, analizá indicadores clave y tomá decisiones inteligentes.
        </p><br/>
<a href="#contact" class="button button-lg radius-10 wow fadeInUp primary-button">
  Quiero saber más
</a>

      </div>

      <!-- Columna de video -->
      <div class="video-column">
        <div class="video-wrapper" id="videoWrapper">
          <video id="localVideo" loop muted playsinline>
            <source src="assets/video/powerbi.mp4" type="video/mp4">
          </video>
          <div class="video-controls">
            <button id="volumeToggle" class="control-btn volume-btn">
              <span class="volume-icon">🔊</span>
            </button>
            <button id="fullscreenToggle" class="control-btn fullscreen-btn">Pantalla completa</button>
          </div>
          <button id="exitFullscreenBtn" class="exit-fullscreen-btn">✕ Salir</button>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .video-hero-section {
    padding: 120px 0 40px;
    position: relative;
    z-index: 1;
  }

  .hero-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    align-items: center;
  }

  .video-wrapper {
    position: relative;
    width: 100%;
    background: #000;
    border-radius: 8px;
    overflow: hidden;
  }

  .video-wrapper video {
    width: 100%;
    display: block;
  }

  .video-controls {
    position: absolute;
    bottom: 15px;
    right: 15px;
    display: flex;
    gap: 10px;
    z-index: 10001;
  }

  .control-btn {
    padding: 8px 16px;
    background: rgba(0,102,204,0.9);
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .exit-fullscreen-btn {
    position: absolute;
    top: 15px;
    right: 15px;
    padding: 8px 16px;
    background: rgba(0, 0, 0, 0.6);
    color: white;
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 4px;
    cursor: pointer;
    z-index: 10002;
    display: none;
    backdrop-filter: blur(5px);
  }

  /* Modo fullscreen */
  .video-wrapper.fullscreen-mode {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    z-index: 10000;
    background: #000;
    border-radius: 0;
  }

  .video-wrapper.fullscreen-mode video {
    width: 100%;
    height: 100%;
    object-fit: contain;
  }

  .video-wrapper.fullscreen-mode .video-controls,
  .video-wrapper.fullscreen-mode .exit-fullscreen-btn {
    display: flex !important;
  }

@media (max-width: 768px) {
  .hero-grid {
    grid-template-columns: 1fr;
    justify-items: center;
    text-align: center;
  }

  .video-wrapper {
    width: 100%;
    max-width: 480px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 8px;
  }

  .video-wrapper video {
    width: 100%;
    display: block;
  }

  .text-column {
    margin-bottom: 40px;
  }
}



  @media (min-width: 769px) {
    .video-wrapper {
      height: 0;
      padding-bottom: 56.25%;
    }

    .video-wrapper video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const videoWrapper = document.getElementById('videoWrapper');
  const video = document.getElementById('localVideo');
  const fullscreenBtn = document.getElementById('fullscreenToggle');
  const exitBtn = document.getElementById('exitFullscreenBtn');
  const volumeBtn = document.getElementById('volumeToggle');
  const volumeIcon = volumeBtn.querySelector('.volume-icon');

  let isMuted = true;
  let isFullscreen = false;
  video.muted = true;

  function toggleFullscreen() {
    isFullscreen = !isFullscreen;

    if (isFullscreen && window.innerWidth <= 768) {
      if (video.requestFullscreen) {
        video.requestFullscreen();
      } else if (video.webkitRequestFullscreen) {
        video.webkitRequestFullscreen();
      } else if (video.msRequestFullscreen) {
        video.msRequestFullscreen();
      }
    } else {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
      } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
      }
    }
  }

  fullscreenBtn.addEventListener('click', toggleFullscreen);
  exitBtn.addEventListener('click', toggleFullscreen);

  volumeBtn.addEventListener('click', function() {
    isMuted = !isMuted;
    video.muted = isMuted;
    volumeIcon.textContent = isMuted ? '🔇' : '🔊';
  });

  document.addEventListener('fullscreenchange', function () {
    const inFullscreen = document.fullscreenElement === video;
    isFullscreen = inFullscreen;
    videoWrapper.classList.toggle('fullscreen-mode', inFullscreen);
    exitBtn.style.display = inFullscreen ? 'block' : 'none';
    fullscreenBtn.style.display = inFullscreen ? 'none' : 'block';
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !isFullscreen) {
        video.play().catch(e => console.log("Autoplay prevented:", e));
      }
    });
  }, { threshold: 0.5 });

  observer.observe(video);
});
</script>
