# Portfolio Website - Changelog

**Project:** ci3-portfolio  
**Date:** 2026-04-07

---

## Added

### Controllers (New)
- application/controllers/Home.php
- application/controllers/About.php
- application/controllers/Projects.php
- application/controllers/Contact.php

### Views (New)
- application/views/pages/home.php
- application/views/pages/about.php
- application/views/pages/projects.php
- application/views/pages/contact.php

---

## Modified

### Controllers
- application/controllers/Welcome.php

### Views
- application/views/templates/header.php
- application/views/templates/footer.php
- application/views/pages/home.php

### Config
- application/config/routes.php
- application/config/autoload.php

### Assets
- assets/css/style.css

### Documentation
- README.md
- .gitignore

---

## Summary

### New Features
- Multi-page navigation (Home, About, Projects, Contact)
- Mobile responsive hamburger menu
- Theme toggle (light/dark mode)

### Changes Made
- Default route changed from 'welcome' to 'home'
- Navigation links updated to page URLs
- Controllers now pass data to header template
- Mobile menu JavaScript added
- CSS updated for responsive design

### Bug Fixes
- Fixed "Undefined variable $name" error
- Fixed controller data passing to views
- Fixed mobile navigation menu display
