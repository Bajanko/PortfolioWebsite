# Deploying to Railway

This guide covers deploying this Laravel portfolio to [Railway](https://railway.com).

## Quick deploy (from GitHub)

1. **Create a project** at [railway.com/new](https://railway.com/new).
2. **Deploy from GitHub** → select this repo.
3. **Add variables** (see [Required environment variables](#required-environment-variables)).
4. **Build**  
   Railway uses `nixpacks.toml` in this repo. No need to set a custom build command unless you want to run more steps.
5. **Pre-Deploy command** (optional but recommended):  
   In the service **Settings → Deploy**, set:
   ```bash
   chmod +x ./railway/init-app.sh && ./railway/init-app.sh
   ```
   This runs migrations and Laravel optimizations before each deploy.
6. **Generate domain**  
   In **Settings → Networking**, click **Generate Domain** to get a public URL.
7. Set **APP_URL** in variables to that URL (e.g. `https://your-app.up.railway.app`).

## Required environment variables

Set these in **Railway → Your service → Variables** (or **Raw Editor**).

| Variable | Example | Notes |
|----------|---------|------|
| `APP_KEY` | `base64:...` | Generate with `php artisan key:generate --show` |
| `APP_ENV` | `production` | |
| `APP_DEBUG` | `false` | Keep `false` in production |
| `APP_URL` | `https://your-app.up.railway.app` | Your Railway-generated URL |
| `LOG_CHANNEL` | `stderr` | So logs show in Railway console |
| `LOG_STDERR_FORMATTER` | `\Monolog\Formatter\JsonFormatter` | Optional; for structured logs |
| `SESSION_DRIVER` | `file` | Use `file` (no DB required) |
| `CACHE_STORE` | `file` | Use `file` (no DB required) |

### Optional: database (Postgres on Railway)

If you add a **Postgres** service and want to use it:

| Variable | Example |
|----------|---------|
| `DB_CONNECTION` | `pgsql` |
| `DB_URL` | `${{Postgres.DATABASE_URL}}` (reference the Postgres service variable) |
| `SESSION_DRIVER` | `database` (optional) |
| `CACHE_STORE` | `database` (optional) |

Then run migrations via the Pre-Deploy command above (already in `railway/init-app.sh`).

## What’s in this repo for Railway

- **`nixpacks.toml`** – Tells Nixpacks to use PHP + Node, set Laravel’s docroot to `public/`, run `composer install --no-dev`, `npm ci`, and `npm run build`, and start nginx.
- **`railway/init-app.sh`** – Script for Pre-Deploy: `config:cache`, `route:cache`, `view:cache`, `storage:link`, and `migrate --force`.

## Deploy from CLI

```bash
# Install Railway CLI, then:
railway login
railway init
railway up
```

Add the same variables in the Railway dashboard after the first deploy.

## After deploy

- Open the generated domain; the site should load.
- If you see 500 errors, check **Variables** (especially `APP_KEY` and `APP_URL`) and **Logs** in Railway.
- For persistent file storage (e.g. uploads), consider Railway Volumes or an external store (e.g. S3); the app currently uses the local filesystem (ephemeral on Railway).
