# Deployment Setup

This repository automatically deploys to Krystal hosting via GitHub Actions.

## Auto-Deploy Status

Every push to the `main`/`master` branch triggers automatic deployment to the live site.

## Required GitHub Secrets

Add these secrets at: **Settings → Secrets and variables → Actions**

| Secret | Value |
|--------|-------|
| `FTP_HOST` | `ftp.solvx.uk` |
| `FTP_USERNAME` | `deploy@solvx.uk` |
| `FTP_PASSWORD` | Your FTP password |
| `FTP_PATH` | See table below |

### FTP_PATH Values by Site:

| Site | FTP_PATH Value |
|------|----------------|
| solvx.uk | `public_html` |
| localtaxpro.co.uk | `public_html/localtaxpro.co.uk` |
| seedbay.co.uk | `public_html/seedbay.co.uk` |

## Manual Deployment

To manually trigger a deployment:

1. Go to **Actions** tab
2. Click **"Deploy to Krystal"** (or workflow name)
3. Click **"Run workflow"**
4. Select branch
5. Click **"Run workflow"**

## Verify Deployment

After deployment completes, check:
- Site loads: `https://yourdomain.com`
- Deployment marker: `https://yourdomain.com/deploy-marker.txt`

The marker file shows the timestamp of the last deployment.

## Troubleshooting

### Deployment fails
- Check Actions logs for specific error
- Verify all 4 secrets are configured correctly
- Ensure `FTP_PATH` matches your domain exactly

### Site shows old content
- Hard refresh browser (Ctrl+Shift+R / Cmd+Shift+R)
- Check `deploy-marker.txt` for new timestamp
- Wait 1-2 minutes for deployment to complete

### Need help?
See full guide: `C:\Users\richw\Documents\KRYSTAL_AUTO_DEPLOY_GUIDE.md`
