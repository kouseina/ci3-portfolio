# Portfolio Website

A clean, minimalist portfolio website built with CodeIgniter 3, featuring light/dark mode toggle and responsive design.

## Features

- **Light/Dark Mode Toggle** - Persists user preference with localStorage
- **Fully Responsive** - Works on mobile, tablet, and desktop
- **Smooth Scrolling Navigation**
- **Modern Design** - Clean typography and visual hierarchy
- **Sections**: Hero, About, Skills, Projects, Contact

## Prerequisites

- **XAMPP** (latest version)
- **PHP 5.6+** (included with XAMPP)
- **Web Browser** (Chrome, Firefox, Safari, Edge)
- **Git** (optional, for cloning)

## Installation Guide for XAMPP

### Step 1: Locate XAMPP htdocs Directory

The project should be placed in your XAMPP's `htdocs` folder:

**macOS:**
```bash
/Applications/XAMPP/xamppfiles/htdocs/
```

**Windows:**
```bash
C:\xampp\htdocs\
```

**Linux:**
```bash
/opt/lampp/htdocs/
```

### Step 2: Add Project to htdocs

**Option A: Clone with Git**
```bash
cd /Applications/XAMPP/xamppfiles/htdocs/
git clone <repository-url> ci3-portfolio
```

**Option B: Copy Project Folder**
```bash
# Copy the entire ci3-portfolio folder to htdocs
cp -R path/to/ci3-portfolio /Applications/XAMPP/xamppfiles/htdocs/
```

### Step 3: Start Apache Server

1. Open **XAMPP Control Panel**
2. Click **"Start"** button next to **Apache**
3. Wait for the status indicator to turn **green**
4. If Apache fails to start, see [Troubleshooting](#troubleshooting) section

### Step 4: Access the Portfolio

Open your web browser and navigate to:
```
http://localhost/ci3-portfolio/
```

You should see your portfolio website with:
- Your name and title
- Light/dark mode toggle in the navigation
- Smooth scrolling between sections
- Responsive layout

## Project Structure

```
ci3-portfolio/
├── application/
│   ├── config/
│   │   └── config.php          # Base URL and app configuration
│   ├── controllers/
│   │   └── Welcome.php          # Main controller with portfolio data
│   └── views/
│       ├── templates/
│       │   ├── header.php       # Navigation and head section
│       │   └── footer.php       # Footer and JavaScript
│       └── pages/
│           └── home.php         # Main portfolio content
├── assets/
│   └── css/
│       └── style.css           # Responsive styling
├── system/                      # CodeIgniter 3 core files
├── index.php                   # Application entry point
├── .htaccess                   # URL rewriting (removes index.php)
└── .gitignore                  # Git ignore patterns
```

## Configuration

### Base URL

The base URL is already configured for local development in `application/config/config.php`:

```php
$config['base_url'] = 'http://localhost/ci3-portfolio/';
```

### For Production

Update the base URL to your domain:

```php
$config['base_url'] = 'https://yourdomain.com/';
```

## Customization Guide

### Edit Personal Information

Open `application/controllers/Welcome.php` and modify the `$data` array:

```php
$data = [
    'name' => 'Your Name',
    'title' => 'Your Title',
    'bio' => 'Your bio text',
    'email' => 'your@email.com',
    'github' => 'https://github.com/username',
    'skills' => ['Skill1', 'Skill2', 'Skill3']
];
```

### Modify Skills

Update the skills array in the same file:

```php
'skills' => ['PHP', 'JavaScript', 'React', 'Node.js', 'MySQL', 'Laravel']
```

### Update Styling

Edit `assets/css/style.css` to customize colors and styles:

```css
:root {
    --accent: #2563eb;  /* Change accent color */
    /* ... other variables */
}
```

### Add Projects

When ready, add projects in `application/views/pages/home.php`:

```php
<div class="project-card">
    <h3>Project Name</h3>
    <p>Project description</p>
    <a href="project-url" class="btn btn-secondary">View Project</a>
</div>
```

## Troubleshooting

### Apache Won't Start

**Problem:** Apache service fails to start in XAMPP Control Panel

**Solutions:**

1. **Check Port 80 Conflict**
   ```bash
   # macOS/Linux: Check if something is using port 80
   lsof -i :80
   
   # Windows: Check with netstat
   netstat -ano | findstr :80
   ```
   
   Common conflicts:
   - Skype
   - IIS
   - Other web servers
   
   Stop the conflicting application or change Apache port to 8080.

2. **Change Apache Port (if needed)**
   
   Edit `/Applications/XAMPP/xamppfiles/etc/httpd.conf`:
   ```apache
   Listen 8080
   ServerName localhost:8080
   ```
   
   Update base URL in config:
   ```php
   $config['base_url'] = 'http://localhost:8080/ci3-portfolio/';
   ```
   
   Access at: `http://localhost:8080/ci3-portfolio/`

### Page Not Loading

**Problem:** Getting 404 or blank page

**Solutions:**

1. Verify base URL in `application/config/config.php`
2. Ensure Apache is running (green indicator)
3. Clear browser cache
4. Check browser console for errors

### CSS Not Loading

**Problem:** Styles not applied, page looks unstyled

**Solutions:**

1. Verify `.htaccess` file exists in project root
2. Check browser console for 404 errors on CSS file
3. Ensure `assets/css/style.css` exists
4. Verify URL helper is loaded in `application/config/autoload.php`:
   ```php
   $autoload['helper'] = array('url');
   ```

### Permission Issues (macOS/Linux)

**Problem:** Permission denied errors

**Solutions:**

```bash
# Set correct permissions
chmod -R 755 /Applications/XAMPP/xamppfiles/htdocs/ci3-portfolio/

# Make logs and cache writable
chmod -R 777 /Applications/XAMPP/xamppfiles/htdocs/ci3-portfolio/application/logs/
chmod -R 777 /Applications/XAMPP/xamppfiles/htdocs/ci3-portfolio/application/cache/
```

### Database Connection Issues

**Problem:** Database errors (if using database features)

**Solutions:**

1. Ensure MySQL is running in XAMPP Control Panel
2. Configure database in `application/config/database.php`
3. Create database if needed

## Technologies Used

- **Backend Framework:** CodeIgniter 3
- **Frontend:** HTML5, CSS3, Vanilla JavaScript
- **Styling:** Custom CSS with CSS Variables
- **Typography:** Google Fonts (Inter)
- **Icons:** Inline SVG (GitHub)
- **Server:** Apache (via XAMPP)

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome for Android)

## Development Workflow

1. **Start Development:**
   - Open XAMPP → Start Apache
   - Navigate to `http://localhost/ci3-portfolio/`

2. **Make Changes:**
   - Edit files in `application/` or `assets/`
   - Browser auto-refreshes on reload

3. **Test:**
   - Test on multiple browsers
   - Test responsive design (use browser DevTools)
   - Test light/dark mode toggle

4. **Deploy:**
   - Upload to production server
   - Update base URL
   - Ensure .htaccess works on production

## Deployment to Production

### Requirements

- Web server with PHP 5.6+
- Apache with mod_rewrite enabled
- SSL certificate (recommended)

### Steps

1. **Upload Files:**
   ```bash
   # Using FTP/SFTP
   scp -r ci3-portfolio/ user@server:/var/www/html/
   ```

2. **Update Configuration:**
   ```php
   // application/config/config.php
   $config['base_url'] = 'https://yourdomain.com/';
   ```

3. **Permissions:**
   ```bash
   chmod -R 755 /var/www/html/ci3-portfolio/
   chmod -R 775 /var/www/html/ci3-portfolio/application/logs/
   chmod -R 775 /var/www/html/ci3-portfolio/application/cache/
   ```

4. **Verify:**
   - Test all pages
   - Test light/dark mode
   - Test smooth scrolling
   - Test mobile responsiveness

## Common XAMPP Issues

### macOS: Apache Won't Start

**Error:** "Another web server is already running"

**Solution:**
```bash
# Stop any existing Apache
sudo apachectl stop

# Or change XAMPP Apache port to 8080
```

### Windows: Port 80 in Use

**Error:** "Port 80 is commonly used by other applications"

**Solution:**
1. Open XAMPP → Config → Apache (httpd.conf)
2. Change `Listen 80` to `Listen 8080`
3. Change `ServerName localhost:80` to `ServerName localhost:8080`
4. Restart Apache
5. Access at `http://localhost:8080/ci3-portfolio/`

### Virtual Hosts (Optional)

To access at `http://portfolio.test/` instead:

1. Edit `httpd-vhosts.conf`:
   ```apache
   <VirtualHost *:80>
       DocumentRoot "/Applications/XAMPP/xamppfiles/htdocs/ci3-portfolio"
       ServerName portfolio.test
   </VirtualHost>
   ```

2. Edit `/etc/hosts` (macOS) or `C:\Windows\System32\drivers\etc\hosts` (Windows):
   ```
   127.0.0.1 portfolio.test
   ```

3. Restart Apache and access `http://portfolio.test/`

## License

This project is open source and available under the [MIT License](LICENSE).

## Credits

Built with [CodeIgniter 3](https://codeigniter.com/) - A powerful PHP framework.

---

**Need Help?**

If you encounter issues not covered here:
1. Check XAMPP documentation
2. Verify PHP version compatibility
3. Check Apache error logs in XAMPP Control Panel
4. Review browser console for JavaScript errors
