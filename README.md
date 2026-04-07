# Portfolio Website

Simple, clean portfolio website built with CodeIgniter 3, featuring light/dark mode toggle and responsive design.

## Features

- **Light/Dark Mode Toggle** - Persists user preference with localStorage
- **Fully Responsive** - Works on mobile, tablet, and desktop
- **Smooth Scrolling Navigation**
- **Clean, Modern Design**

## Tech Stack

- CodeIgniter 3
- HTML5 / CSS3 / JavaScript
- Google Fonts (Inter)
- Apache (XAMPP)

## Installation

1. **Clone or download** the project to your XAMPP htdocs folder:
   ```bash
   # macOS
   /Applications/XAMPP/xamppfiles/htdocs/
   
   # Windows
   C:\xampp\htdocs\
   ```

2. **Start Apache** from XAMPP Control Panel

3. **Open in browser:**
   ```
   http://localhost/ci3-portfolio/
   ```

## Customization

Edit `application/controllers/Welcome.php` to customize:

```php
$data = [
    'name' => 'Your Name',
    'title' => 'Your Title',
    'bio' => 'Your bio text',
    'email' => 'your@email.com',
    'github' => 'https://github.com/username',
    'skills' => ['PHP', 'JavaScript', 'React', 'MySQL']
];
```

### Change Styling

Edit `assets/css/style.css` to customize colors and styles.

### Add Projects

Edit `application/views/pages/home.php` to add your projects.

## Troubleshooting

### Apache won't start?
Check if port 80 is in use by another application (Skype, IIS, etc.)

### CSS not loading?
- Verify `.htaccess` file exists in project root
- Ensure `assets/css/style.css` exists
- Check base URL in `application/config/config.php`

## License

MIT License
