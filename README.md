# Portfolio Website

Static portfolio site for Bajanko Jaiteh, built with HTML templates, Tailwind CSS, and Vite.

## Stack

- **Vite** — multi-page build and dev server
- **Tailwind CSS** — styling
- **FormSubmit** — contact form (no backend required)

## Project structure

```
src/
  components/   # Shared layout parts (navbar, footer, scripts)
  pages/        # Page content templates
resources/
  css/          # Tailwind entry stylesheet
  js/           # Client-side JavaScript
public/         # Static assets (images, favicon, robots.txt)
```

Pages are compiled from `src/pages/` into root-level HTML files, then bundled by Vite into `dist/`.

## Commands

| Command | Description |
|---------|-------------|
| `npm run dev` | Compile templates and start Vite dev server |
| `npm run build` | Production build to `dist/` |
| `npm run preview` | Preview the production build locally |
| `npm start` | Serve `dist/` (used in production) |

## Contact form

The contact page posts to [FormSubmit](https://formsubmit.co) — no server or database needed.
