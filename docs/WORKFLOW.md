
# 🧩 WORKFLOW + PROCEDIMIENTO - Documentación de Control de Versiones

**Proyecto:** Landing Power BI – Estudio Ochoa  
**Última actualización:** 2025-06-04

---

## ✅ Pasos obligatorios para cada nueva versión

### 1. Actualizar documentación técnica
- [ ] `CHANGELOG.md`: Incluir todos los cambios `Added`, `Changed`, `Removed`, `Fixed`, `Infraestructura`.
- [ ] `RELEASES_NOTES.md`: Notas explicativas y marketing para usuarios (cliente o producto).
- [ ] `README.md`: Incluir cambios relevantes en funcionalidades visibles o nuevos requerimientos.
- [ ] `VERSIONS.md`: Agregar fila en tabla con versión, fecha y resumen de cambios.

### 2. Actualizar versión del sistema
- [ ] `version.json`: Cambiar `version` y `build` con formato `yyyyMMdd`.

```json
{
  "version": "v1.5.X",
  "build": "20250604",
  "project": "Landing Estudio Ochoa"
}
```

---

## 🗂️ Archivos vinculados
- `README.md` → Documentación general del proyecto.
- `CHANGELOG.md` → Registro cronológico técnico.
- `RELEASES_NOTES.md` → Notas explicativas de lanzamientos.
- `VERSIONS.md` → Tabla resumida de versiones con fecha y título.
- `version.json` → Control automático de versión para el sistema.

---

## 📌 Recordatorio permanente

**¡No olvidar!**  
Este archivo es parte del flujo de control de calidad del proyecto.  
Mantenerlo actualizado asegura coherencia entre código, documentación y entregables.

---

## 📝 Procedimiento obligatorio para cada commit

Siempre que se solicite generar documentación para un commit, se debe entregar en conjunto:

1. `CHANGELOG.md`  
2. `version.json`  
3. `README.md` (si corresponde)  
4. `RELEASE-NOTES.md`  
5. `VERSIONS.md` ✅  
6. Título del commit + Descripción (para GitHub)

---

## ⚠️ Importante

- `VERSIONS.md` debe actualizarse con cada versión **antes de subir a GitHub**.
- Si el usuario no lo menciona, se debe recordar automáticamente.

---

## 🧠 Instrucción registrada
Este procedimiento es parte permanente del flujo de trabajo del proyecto **Landing Power BI**.
