# 📊 Landing Power BI – Estudio Ochoa

Landing page modular desarrollada en PHP para destacar los beneficios de Microsoft Power BI y promocionar los servicios de visualización, análisis de datos y consultoría ofrecidos por Estudio Ochoa, a través de una página clara, funcional y mobile-first.

---

## 🚀 Objetivo

Facilitar la conversión de visitas en clientes, destacando servicios como dashboards interactivos personalizados, conectividad de datos, análisis en tiempo real, KPIs y colaboración en línea.

---

## ⚙️ Tecnologías utilizadas

- PHP modular con includes
- Bootstrap 5
- Lindy UI Kit
- WOW.js y Animate.css
- SVG + animaciones responsivas
- Sistema de configuración (`config.php`)
- Información dinámica de versión desde `version.json`

---

## 🧱 Características principales

- Secciones dinámicas habilitables por configuración
- Footer y navegación sincronizados con el estado del sitio
- Embebido de PDF institucional
- Imagen de clientes responsiva
- Optimización para pantallas móviles

---

## 📁 Estructura del proyecto

```
/
├── index.php                  # Página principal
├── config.php                 # Control de secciones
├── version.json              # Información de versión
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

---

## 📁 Documentación Técnica

Toda la documentación del proyecto se encuentra organizada en la carpeta `/docs`, salvo los archivos requeridos en el root por convenciones comunes.

---

### 📄 Archivos en `/docs`

- [`CHANGELOG.md`](docs/CHANGELOG.md): Registro técnico cronológico de cambios por versión. Incluye secciones `Added`, `Changed`, `Removed`, `Fixed`, `Infraestructura`.

- [`RELEASES_NOTES.md`](docs/RELEASES_NOTES.md): Notas de versión orientadas a usuarios o stakeholders. Resume cambios importantes en un lenguaje accesible y con foco en funcionalidad visible.

- [`VERSIONS.md`](docs/VERSIONS.md): Tabla simplificada con todas las versiones lanzadas, fechas y breve resumen de cambios clave. Útil para revisión rápida o históricos.

- [`WORKFLOW.md`](docs/WORKFLOW.md): Flujo de trabajo obligatorio al realizar un commit o nueva versión. Incluye checklist de documentación, versión, validaciones y buenas prácticas.

- [`ROADMAP.md`](docs/ROADMAP.md): Funcionalidades futuras, mejoras planificadas y control de versiones por venir. Sirve como hoja de ruta estratégica y operativa del proyecto.

---

### 📄 Archivos en el root

- [`README.md`](README.md): Documentación general del proyecto. Contiene introducción, funcionalidades, instalación, dependencias y soporte.

- [`version.json`](version.json): Archivo de control automático de versión y build. Usado por el sistema para mostrar dinámicamente la versión actual.

---

> ✅ Esta estructura garantiza un flujo claro entre desarrollo técnico, comunicación al cliente y control de calidad. Mantener estos archivos actualizados es parte del estándar de entrega.

---


## ⚙️ Requisitos

- PHP 7.4 o superior
- Servidor web con soporte PHP (Apache, Nginx, etc.)

---

## 🛠️ Instalación

1. Cloná el repositorio o descargá el ZIP
2. Subí los archivos a tu servidor con PHP
3. Verificá los permisos de lectura de `version.json` y `config.php`
4. Accedé al sitio desde el navegador

---

## 📩 Soporte

Desarrollado por [Hecho en el Sur](https://hechoenelsur.uy)  
📧 info@hechoenelsur.uy

---

## 📝 Licencia

Este proyecto es privado y de uso exclusivo de Estudio Ochoa.
