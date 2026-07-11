# Deployment

Static portfolio site built with Vite and served from the `dist/` folder.

## Local development

```bash
npm install
npm run dev
```

## Production build

```bash
npm run build
npm run preview
```

## Docker

```dockerfile
FROM node:20-alpine

WORKDIR /app

COPY package*.json ./
RUN npm ci

COPY . .
RUN npm run build

EXPOSE 3000

CMD ["sh", "-c", "npx serve dist -l ${PORT:-3000}"]
```

## Railway / Nixpacks

Configured via `nixpacks.toml` — installs dependencies, runs `npm run build`, and serves `dist/` with `serve`.
