# 📦 Changelog - Landing Power BI

## [1.5.3] – 2025-06-03

### Added

- 🎥 Se reemplazó la imagen del `hero.php` por un **video embebido local** (`assets/videos/powerbi.mp4`), con autoplay, sin controles y responsivo.

- 🟦 Se actualizaron los **iconos de beneficios** en `services.php` usando LineIcons 2.0 para mantener consistencia visual.

- 📐 Se reorganizó `services.php` en **3 columnas**, con **2 beneficios por columna** (total 6).

- 🎨 Se mejoró la **separación entre los bloques de características** de Power BI con margen inferior (`mb-40`).

- 🧩 Clase `.icon` ahora con **fondo cuadrado redondeado** (`border-radius: 12px`) en lugar de circular.

- 📱 Se agregó media query en `custom.css` para reducir tamaño de `<h3>` en mobile.

- 👥 Las imágenes del equipo en `team.php` ahora usan **esquinas redondeadas suaves** (`border-radius: 12px`) en lugar del estilo semicircular.

- 📏 Se aplicó `aspect-ratio: 1 / 1` y `object-fit: cover` en imágenes del equipo para mantener **uniformidad visual**.

### Changed

- 💾 Se reorganizó la clase `.team-img-rounded` en `custom.css` para estandarizar el estilo visual de las fotos del equipo.

- 🛠 Se removieron estilos anteriores heredados que forzaban `border-radius: 50%` en imágenes del equipo.

- 🧱 Mejora de **responsividad en secciones principales** (`hero`, `services`, `team`).

- Las fotos del equipo en `team.php` ahora usan esquinas redondeadas suaves (`border-radius: 12px`) en lugar del estilo semicircular.

- Se aplicó `aspect-ratio: 1 / 1` y `object-fit: cover` para mejorar la visualización y uniformidad en todas las resoluciones.

### Infraestructura
- Se agregó la clase `.team-img-rounded` en `custom.css` para estandarizar el estilo de las fotos del equipo.


## [1.5.2] – 2025-05-27
### Added
- Sección `presentacion.php` con texto y PDF embebido
- Separación automática entre botón y PDF en mobile
- Footer con corrección de teléfonos para vista mobile (`d-block`)
- Imagen de clientes `clientes-slim.png` responsiva 1498×95 en una sola línea
- Banner descriptivo Power BI
- Menú en `nav.php` y `footer.php` dinámico según `config.php`

### Changed
- Normalización de encabezados (`h2` → `h3`) en `hero.php`, `banner.php`, `youtube.php`


### Infraestructura
- Añadido `custom.css` como hoja de estilos personalizada
  - Incluye `.nomostrar` y estilos responsive para `.clients-logo-section`
  - Organizado para facilitar futuras clases HEES

---

## [1.5.1] – 2025-05-26
### Changed
- Corrección visual de jerarquía de encabezados en múltiples secciones

### Detalles
- Reemplazo de `<h2>` por `<h3>` en títulos que actuaban como subtítulos, para mejorar proporción visual
- Establecida convención:
  - `<h3>`: títulos de sección
  - `<h4>`: subtítulos e introducciones
  - `<h6>`: etiquetas, métricas o textos pequeños

### Archivos modificados
- `hero.php`: h2 → h3, h4 conservado como subtítulo
- `banner.php`: h2 → h3, estructura de subtítulo ajustada
- `youtube.php`: h2 → h3, jerarquía corregida

---

## [1.1.0] – 2025-05-26
### Added
- 🧩 Modularización: separación en `header.php`, `footer.php` y `services.php`
- ✅ Inclusión del contenido real en `services.php` con beneficios Power BI
- ✅ Preparado para navegación dinámica entre secciones

---

## [1.0.0] – 2025-05-22
### Added
- 📦 Template base HTML
- 🎨 Estilos con Bootstrap 5 alpha, LineIcons, WOW.js, Animate.css
- 🎯 Estructura inicial del template HTML responsivo.
- 📦 Librerías incluidas: Bootstrap 5 alpha, WOW.js, Animate.css, Lindy UI Kit.
- 🖼️ Ilustraciones SVG y layout preparado para: hero, features, pricing, contacto, equipo.
- 📁 Organización de assets en carpetas: css, js, img, fonts.

