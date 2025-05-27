# 📄 Notas de versión – Landing Power BI

Landing page desarrollada para promocionar los servicios de visualización y análisis de datos con Microsoft Power BI, integrada a los servicios de Estudio Ochoa.

---

## ⚙️ Tecnologías utilizadas

- PHP modular con includes
- Bootstrap 5
- WOW.js y Animate.css
- Lindy UI Kit
- Sistema de configuración (`config.php`) para activar/desactivar secciones
- Información dinámica de versión desde `version.json`

---

## 📁 Estructura del proyecto

```
/
├── index.php
├── config.php
├── version.json
├── includes/
│   ├── header.php
│   ├── footer.php
│   ├── nav.php
├── secciones/
│   ├── hero.php
│   ├── about.php
│   ├── services.php
│   ├── team.php
│   ├── pricing.php
│   ├── contact.php
│   ├── clientes.php
│   ├── presentacion.php
│   ├── banner.php
├── assets/
│   ├── css/
│   ├── js/
│   ├── img/
│   └── docs/presentacion.pdf
```

---

## 📝 Histórico de versiones

### 📦 Versión 1.5.2 – 2025-05-27

#### Added
- Sección `presentacion.php` con texto y PDF embebido
- Separación automática entre botón y PDF en mobile
- Imagen `clientes-slim.png` (1498x95) responsiva en una sola línea
- Sección `banner.php` como llamada a la acción intermedia
- Menú dinámico (`nav.php`, `footer.php`) basado en `config.php`

#### Changed
- Encabezados normalizados (`h2` → `h3`, `h4`) en `hero.php`, `banner.php`, `youtube.php`

#### Infraestructura
- Incorporación de `custom.css` para estilos personalizados
  - Clase `.nomostrar` para ocultar bloques condicionales
  - Estilos mobile para sección de clientes

#### Responsive
- Footer actualizado con teléfonos en columnas (`d-block` en mobile)

---

### 🛠 Versión 1.5.1 – 2025-05-26

#### Changed
- Reestructuración visual de encabezados para jerarquía clara
- Estándar definido:
  - `<h3>` para secciones
  - `<h4>` para subtítulos
  - `<h6>` para métricas y textos menores

#### Archivos actualizados
- `hero.php`
- `banner.php`
- `youtube.php`

---

### 🔧 Versión 1.5.0 – 2025-05-25

#### Added
- Sistema modular completo (`header.php`, `footer.php`, `nav.php`)
- `config.php` para activar/desactivar secciones
- Estructura de secciones separadas (`services.php`, `about.php`, etc.)

---

### 🧱 Versión 1.1.0 – 2025-05-24

#### Added
- Inclusión de `services.php` con contenido real
- Navegación funcional entre secciones

---

### 📦 Versión 1.0.0 – 2025-05-22

#### Added
- Plantilla base con Bootstrap 5 alpha + Lindy UI Kit
- Secciones prediseñadas: Hero, Features, Pricing, Contact, Team
- WOW.js, Animate.css, organización en carpetas `/assets/`
