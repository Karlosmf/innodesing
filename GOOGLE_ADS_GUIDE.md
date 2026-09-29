# Google Ads — Guía mes que viene (InnoDesign)

## 1. Cuenta
- Crear cuenta Google Ads con karlosf@gmail.com
- Vincular Google Analytics 4 + Search Console (innodesing.com.ar)
- Verificar conversión: ya tenés gtag con AW-XXXXXXXXXX en index.html — reemplazá por tu ID real y el evento `conversion` en `wa.me` y `form submit`.

## 2. Conversiones (ya preparadas)
- **Lead form:** evento `conversion` al hacer `fetch` OK en #contacto (ya dispara gtag)
- **WhatsApp:** evento `click_whatsapp` en botón flotante
- En Google Ads → Herramientas → Conversiones → Crear → Importar desde gtag → copiar `send_to` y pegarlo en index.html donde dice AW-XXXXXXXXXX/YYYYYY

## 3. Campaña inicial (30 días)
- **Tipo:** Búsqueda (Search) + Performance Max para remarketing
- **Ubicación:** Argentina (todo el país) — puja inicial $1500-3000/día, palabras clave:
  `hacer página web`, `diseño web a medida`, `tienda online con facturación`, `sistema SAE educación`, `desarrollador Laravel Santa Fe`, `app web a medida`
- **Negativas:** `gratis`, `curso`, `empleo`
- **Anuncios:** 3 títulos + 2 descripciones usando tu FAQ: "Dúo Avellaneda/Reconquista, para todo el país, primero que funcione luego bonito"
- **Extensiones:** Sitelinks a #portafolio, #how-we-work, #contacto + llamada a +5493482644107 + ubicación Avellaneda/Reconquista

## 4. Landing optimizada (ya está)
- Title/description nacionales, FAQ schema, llms.txt, sitemap. No tocar.
- Velocidad: ya tenés Tailwind CDN + imágenes optimizadas (capturas 1200w). Cuando pases a Hostinger, activá caché en .htaccess (ya está).

## 5. Qué medir
- Semana 1: CTR > 4%, CPC < $180, conversiones > 3% del tráfico
- Si no convierte, pausá keywords con CTR <1.5% y subí puja a las que sí convierten

## 6. Base de datos futura
- Ya tenés tablas: clients, leads, invoices, payments + admin karlosf@gmail.com
- Cuando actives, `php artisan migrate --seed` crea todo. Luego en `/admin` (cuando lo hagamos) vas a ver leads, pasar a cliente, generar factura PDF y link de pago (MercadoPago) para que el cliente descargue.
