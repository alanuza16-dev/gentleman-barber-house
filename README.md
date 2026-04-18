# The Gentleman Barber House

Este repositorio ahora contiene dos capas:

- una base previa en PHP/WordPress orientada a tema
- una entrada estatica nueva para Cloudflare Pages en `index.html`

## Version Cloudflare activa

La version preparada para despliegue en Cloudflare Pages es:

- `index.html`
- `assets/css/cloudflare-site.css`
- `assets/js/cloudflare-site.js`
- `assets/img/barberia-el-ser-*.svg`
- `wrangler.toml`

## Marca actual

La implementacion estatica nueva esta personalizada para:

- Nombre: Barberia El Ser
- Ubicacion: Dulce Nombre de Cartago
- WhatsApp: +506 6034 5530
- Identidad visual: minimalista, basada en el perfil real del barbero

## Nota importante sobre PHP

Cloudflare Pages no ejecuta PHP de forma nativa.

Por eso:

- `index.html` debe ser la entrada publica para Cloudflare
- los archivos `.php` quedan como referencia o para un entorno distinto
- cualquier logica futura tipo formularios, reservas o envio de correos debe moverse a Workers o servicios externos

## Incluye

- hero y landing optimizados para marca local
- CTA directo a WhatsApp
- logo SVG, favicon y pieza social
- documentacion basica para despliegue estatico
