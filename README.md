# SolVX Website

Professional website for SolVX - AI-Enhanced Crypto Research & Blockchain Consulting services targeting UK businesses and investors.

**Live Site**: [https://solvx.uk](https://solvx.uk)

## Overview

SolVX provides expert cryptocurrency research and blockchain consulting services, featuring AI-generated analysis reports and cutting-edge trading tools for businesses and investors.

## Features

### Content & Services
- **AI-Enhanced Crypto Research**: Advanced cryptocurrency analysis and insights
- **Blockchain Consulting**: Expert consulting services for UK businesses
- **Exclusive Reports**: Comprehensive research reports on major cryptocurrencies:
  - Cardano analysis
  - Solana research
  - Sui blockchain report
  - Pi Network evaluation

### Technical Features
- **Responsive Design**: Mobile-first, fully responsive layout
- **SEO Optimized**: Complete meta tags, Open Graph, and Twitter Card integration
- **Email Collection**: Lead generation system with PHP backend
- **Analytics Integration**: Google Analytics (GA4) tracking
- **Performance Optimized**: Fast-loading static site with optimized assets

### Design Elements
- **Modern Glassmorphism UI**: Contemporary design with backdrop blur effects
- **Professional Branding**: Custom logo and consistent visual identity
- **Interactive Elements**: Engaging animations and transitions
- **Multi-level Card System**: Organized content hierarchy

## Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP (email collection)
- **Analytics**: Google Analytics 4
- **Fonts**: Google Fonts (Satoshi)
- **Deployment**: Static hosting ready

## Project Structure

```
solvx-website/
├── index.html                      # Main website page
├── save-email.php                  # Email collection handler
├── emails.txt                      # Stored email addresses
├── favicon.ico                     # Site favicon
├── favicon-*.png                   # Various favicon sizes
├── site.webmanifest               # PWA manifest
├── solvx_logo_text.png            # Main logo
├── solvx-social-preview.png       # Social media preview image
├── game-screenshot.png            # Feature image
├── cardano-report.pdf             # Cardano analysis report
├── solana-report.pdf              # Solana research report
├── sui-report.pdf                 # Sui blockchain report
├── Pi Network Full Report.pdf     # Pi Network evaluation
├── ouch.wav                       # Audio asset
├── wee.wav                        # Audio asset
└── .gitignore
```

## Getting Started

### Prerequisites
- Web server with PHP support (for email collection)
- Modern web browser

### Local Development

1. Clone the repository:
```bash
git clone https://github.com/tradewithmeai/solvx-website.git
cd solvx-website
```

2. Start a local server:
```bash
# Using PHP built-in server
php -S localhost:8000

# Or using Python
python -m http.server 8000
```

3. Open in browser:
```
http://localhost:8000
```

## Deployment

### Static Hosting
The site can be deployed to any static hosting provider:
- Vercel
- Netlify
- GitHub Pages
- AWS S3 + CloudFront
- Traditional web hosting

### PHP Functionality
For email collection functionality, ensure:
- PHP 7.0+ support
- Write permissions for `emails.txt`
- Proper form handling configuration

## Configuration

### Google Analytics
Update the tracking ID in `index.html`:
```javascript
gtag('config', 'YOUR-GA-TRACKING-ID');
```

### Email Collection
Configure `save-email.php` for your email storage preferences or integrate with email marketing services.

### SEO & Meta Tags
Update meta tags in `index.html`:
- Site title
- Description
- Keywords
- Open Graph images
- Social media handles

## Features to Customize

### Branding
- Replace logo images with your branding
- Update color scheme in CSS variables
- Modify company information

### Content
- Update service descriptions
- Replace cryptocurrency reports
- Modify testimonials and case studies

### Contact Information
- Update email addresses
- Add contact form
- Include social media links

## Performance Optimization

- Minify HTML, CSS, and JavaScript for production
- Compress images and PDFs
- Enable caching headers
- Use CDN for static assets
- Implement lazy loading for images

## Browser Compatibility

- Chrome/Edge: Full support
- Firefox: Full support
- Safari: Full support
- Mobile browsers: Fully responsive

## Security Considerations

- Validate email inputs to prevent injection
- Implement rate limiting on email collection
- Use HTTPS in production
- Regular security audits of PHP code
- Sanitize user inputs

## Future Enhancements

- Blog/news section for crypto updates
- Client dashboard/portal
- Live crypto price integration
- Newsletter system
- Multi-language support
- Dark/light theme toggle

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

See LICENSE file for details.

## Contact

For business inquiries, visit [https://solvx.uk](https://solvx.uk)
