# 📦 Changelog - Landing Power BI

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

