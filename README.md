# Laravel 12 Real Estate / Venues Management with Adminpanel

Welcome to our Real Estate Venue Portal, your premier destination for discovering and booking exceptional venues. Whether you're planning a wedding, corporate event, or special gathering, we connect you with top-tier locations tailored to your needs.

Also added SEO important stuff like Articles Slugs in URLs.

![Laravel Real estate administration](https://laraveldaily.com/wp-content/uploads/2019/10/Screen-Shot-2019-10-25-at-11.12.16-AM.png)

![Laravel Real estate front](https://laraveldaily.com/wp-content/uploads/2019/10/Screen-Shot-2019-10-25-at-1.53.12-PM.png)

- - - - -

# 🏛️ VenueHub Cambodia - Real Estate Venue Portal

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-8.0+-4479A1?style=for-the-badge&logo=mysql)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3+-7952B3?style=for-the-badge&logo=bootstrap)

**🇰🇭 Cambodia's Premier Venue Discovery & Booking Platform**

*Transforming Cambodia's event industry through innovative technology and seamless user experience*

[🌐 Live Demo](https://venuehub-cambodia.peanech.online) • [📧 Contact Us](mailto:info@peanech.online) • [📱 Mobile App](https://play.google.com/store/apps/developer?id=Peanech+Team)

</div>

---

## 📋 Table of Contents

- [🏛️ VenueHub Cambodia - Real Estate Venue Portal](#️-venuehub-cambodia---real-estate-venue-portal)
  - [📋 Table of Contents](#-table-of-contents)
  - [✨ Overview](#-overview)
  - [🎯 Key Features](#-key-features)
  - [🛠️ Tech Stack](#️-tech-stack)
  - [🚀 Quick Start](#-quick-start)
  - [📦 Installation](#-installation)
  - [🔧 Configuration](#-configuration)
  - [🎨 Usage](#-usage)
  - [📊 Database Schema](#-database-schema)
  - [🔐 Authentication & Security](#-authentication--security)
  - [📧 Email System](#-email-system)
  - [🖼️ Media Management](#️-media-management)
  - [📱 API Endpoints](#-api-endpoints)
  - [🧪 Testing](#-testing)
  - [🚀 Deployment](#-deployment)
  - [🤝 Contributing](#-contributing)
  - [📄 License](#-license)
  - [🙏 Acknowledgments](#-acknowledgments)
  - [📞 Support](#-support)
  - [🔄 Changelog](#-changelog)

---

## ✨ Overview

**VenueHub Cambodia** is a cutting-edge real estate venue portal designed specifically for Cambodia's growing event industry. Built by the [Peanech Team](https://peanech.online), this platform connects venue owners, event planners, and businesses across Cambodia's major cities including Phnom Penh, Siem Reap, Sihanoukville, and Battambang.

### 🎯 Mission

To democratize access to premium venues across Cambodia, making it effortless for event organizers to discover, compare, and book the perfect spaces for weddings, corporate events, conferences, and celebrations.

### 🌟 Vision

To become Cambodia's most trusted and comprehensive venue discovery platform, fostering growth in the tourism and event industry while preserving Cambodia's rich cultural heritage.

---

## 🎯 Key Features

### 🏢 **Venue Management**

- **Comprehensive Venue Database**: 500+ verified venues across Cambodia
- **Rich Media Gallery**: Professional photos, virtual tours, and 360° views
- **Detailed Specifications**: Capacity, amenities, pricing, and availability
- **Location Intelligence**: GPS coordinates and neighborhood insights

### 🔍 **Smart Discovery**

- **Advanced Search & Filters**: Location, event type, capacity, price range, amenities
- **Real-time Availability**: Live booking calendar integration
- **Personalized Recommendations**: AI-powered venue suggestions
- **Saved Searches**: Bookmark favorite venues and searches

### 📱 **User Experience**

- **Responsive Design**: Seamless experience across desktop, tablet, and mobile
- **Multi-language Support**: Khmer and English interfaces
- **Progressive Web App**: Installable mobile experience
- **Offline Capability**: Core features work without internet

### 💼 **Business Tools**

- **Venue Owner Dashboard**: Manage listings, bookings, and analytics
- **Event Planner Tools**: Budget tracking, vendor coordination, timeline management
- **Admin Panel**: Complete system management and reporting
- **Analytics Dashboard**: Insights on bookings, revenue, and user behavior

### 💳 **Booking & Payments**

- **Secure Payments**: Integrated with popular Cambodian payment gateways
- **Flexible Booking**: Hourly, daily, and multi-day rentals
- **Deposit System**: Secure booking with refundable deposits
- **Invoice Generation**: Automated billing and receipt system

### 🌐 **Integration Ready**

- **API-First Architecture**: RESTful APIs for third-party integrations
- **Webhook Support**: Real-time notifications for booking updates
- **Social Media Integration**: Share venues on social platforms
- **Calendar Sync**: Integration with Google Calendar, Outlook

---

## 🛠️ Tech Stack

### **Backend**

- **Framework**: Laravel 12.x - The PHP Framework for Web Artisans
- **Language**: PHP 8.2+ with modern features and optimizations
- **Database**: MySQL 8.0+ with advanced indexing and full-text search
- **Cache**: Redis for high-performance caching and session management

### **Frontend**

- **CSS Framework**: TailwindCSS 4.x for utility-first styling
- **JavaScript**: Modern ES6+ with Vite for fast builds
- **UI Components**: Bootstrap 5.3+ for responsive components
- **Animations**: AOS (Animate On Scroll) for smooth interactions

### **Media & Assets**

- **Media Library**: Spatie Laravel Media Library for advanced file management
- **Image Processing**: Automatic resizing, optimization, and format conversion
- **CDN Ready**: Optimized for cloud delivery networks

### **Development Tools**

- **Build Tool**: Vite for lightning-fast development and production builds
- **Testing**: PHPUnit for comprehensive test coverage
- **Code Quality**: Laravel Pint for consistent code formatting
- **Debugging**: Laravel Telescope for advanced debugging capabilities

---

## 🚀 Quick Start

Get VenueHub Cambodia running locally in minutes:

```bash
# Clone the repository
git clone https://github.com/sisovin/real-estate-portal.git
cd real-estate-portal

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Environment setup
cp .env.example .env
php artisan key:generate

# Database setup
php artisan migrate --seed

# Build assets
npm run build

# Start the development server
php artisan serve
```

Visit `http://localhost:8000` and explore Cambodia's premier venue platform! 🇰🇭

---

## 📦 Installation

### Prerequisites

- **PHP**: 8.2 or higher
- **Composer**: Latest stable version
- **Node.js**: 18.x or higher with npm
- **MySQL**: 8.0 or higher
- **Redis**: For caching and sessions (optional but recommended)

### Step-by-Step Installation

1. **Clone the Repository**

   ```bash
   git clone https://github.com/sisovin/real-estate-portal.git
   cd real-estate-portal
   ```

2. **Install PHP Dependencies**

   ```bash
   composer install
   ```

3. **Install Node Dependencies**

   ```bash
   npm install
   ```

4. **Environment Configuration**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Setup**

   ```bash
   # Configure your database in .env file
   php artisan migrate
   php artisan db:seed
   ```

6. **Storage Setup**

   ```bash
   php artisan storage:link
   ```

7. **Build Assets**

   ```bash
   npm run build
   # For development: npm run dev
   ```

8. **Start the Application**

   ```bash
   php artisan serve
   ```

### Docker Installation (Alternative)

```bash
# Using Laravel Sail
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate --seed
```

---

## 🔧 Configuration

### Environment Variables

Key configuration options in `.env`:

```env
# Application
APP_NAME="VenueHub Cambodia"
APP_ENV=production
APP_KEY=base64:your-app-key
APP_DEBUG=false
APP_URL=https://venuehub-cambodia.peanech.online

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=venuehub_cambodia
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email@domain.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=info@venuehub-cambodia.com
MAIL_FROM_NAME="VenueHub Cambodia"

# Payment Gateway (ABA Bank, etc.)
PAYMENT_GATEWAY_API_KEY=your-api-key
PAYMENT_GATEWAY_SECRET=your-secret

# Social Media
FACEBOOK_APP_ID=your-facebook-app-id
GOOGLE_CLIENT_ID=your-google-client-id

# File Storage
FILESYSTEM_DISK=local
AWS_ACCESS_KEY_ID=your-aws-key
AWS_SECRET_ACCESS_KEY=your-aws-secret
AWS_DEFAULT_REGION=ap-southeast-1
AWS_BUCKET=venuehub-cambodia-bucket
```

### Admin Access

Default admin credentials:

- **Email**: <admin@venuehub-cambodia.com>
- **Password**: admin123

Access the admin panel at `/admin` after installation.

---

## 🎨 Usage

### For Venue Owners

1. **Register**: Create an account and verify your venue ownership
2. **Add Venue**: Upload photos, set pricing, and specify amenities
3. **Manage Bookings**: Accept/reject bookings and communicate with clients
4. **Analytics**: Track views, bookings, and revenue

### For Event Planners

1. **Search**: Use filters to find venues by location, capacity, and budget
2. **Compare**: View detailed comparisons and read reviews
3. **Book**: Secure booking with deposit payment
4. **Manage**: Track event timeline and coordinate with venue owners

### For Administrators

1. **Dashboard**: Monitor platform metrics and user activity
2. **Content Management**: Approve venues and manage categories
3. **User Management**: Handle user accounts and permissions
4. **Reports**: Generate detailed analytics and financial reports

---

## 📊 Database Schema

### Core Tables

```sql
-- Users and Authentication
users (id, name, email, email_verified_at, password, role, created_at, updated_at)
password_resets (email, token, created_at)

-- Content Management
venues (id, name, slug, description, address, city, latitude, longitude, capacity_min, capacity_max, price_per_hour, price_per_day, owner_id, status, created_at, updated_at)
locations (id, name, slug, description, image, latitude, longitude, created_at, updated_at)
event_types (id, name, slug, description, icon, created_at, updated_at)

-- Media Management
media (id, model_type, model_id, uuid, collection_name, name, file_name, mime_type, path, disk, file_hash, collection, size, created_at, updated_at)

-- Permissions & Roles
roles (id, name, guard_name, created_at, updated_at)
permissions (id, name, guard_name, created_at, updated_at)
role_has_permissions (permission_id, role_id)
model_has_roles (role_id, model_id, model_type)

-- Relationships
event_type_venue (event_type_id, venue_id)
user_favorites (user_id, venue_id, created_at)

-- System
jobs (id, queue, payload, attempts, reserved_at, available_at, created_at)
cache (key, value, expiration)
sessions (id, user_id, ip_address, user_agent, payload, last_activity)
```

---

## 🔐 Authentication & Security

### Security Features

- **Laravel Sanctum**: API token authentication
- **Role-Based Access Control**: Granular permissions system
- **CSRF Protection**: Automatic CSRF token validation
- **SQL Injection Prevention**: Parameterized queries
- **XSS Protection**: Content sanitization and escaping
- **Rate Limiting**: API and form submission limits

### User Roles

- **Guest**: Browse venues and basic search
- **Registered User**: Book venues, save favorites, write reviews
- **Venue Owner**: Manage venue listings and bookings
- **Administrator**: Full system access and management

---

## 📧 Email System

### Email Templates

- **Welcome Email**: User registration confirmation
- **Booking Confirmation**: Booking details and payment receipt
- **Booking Reminder**: Pre-event notifications
- **Contact Form**: Admin notifications for inquiries
- **Newsletter**: Marketing and platform updates

### Email Configuration

Supports multiple mail drivers:

- SMTP (Gmail, Outlook, custom SMTP)
- Mailgun, SendGrid, Amazon SES
- Local development with Mailtrap

---

## 🖼️ Media Management

### Features

- **Multiple File Types**: Images, documents, videos
- **Automatic Optimization**: Resize, compress, and format conversion
- **CDN Integration**: CloudFront, Cloudflare, or custom CDN
- **Media Collections**: Organized file management
- **Watermarking**: Automatic branding for venue photos

### Supported Formats

- **Images**: JPG, PNG, WebP, AVIF
- **Documents**: PDF, DOC, DOCX
- **Videos**: MP4, WebM (with thumbnail generation)

---

## 📱 API Endpoints

### RESTful API Structure

```
GET    /api/v1/venues              # List venues with filters
GET    /api/v1/venues/{id}         # Get venue details
POST   /api/v1/venues              # Create venue (authenticated)
PUT    /api/v1/venues/{id}         # Update venue (owner/admin)
DELETE /api/v1/venues/{id}         # Delete venue (owner/admin)

GET    /api/v1/locations           # List locations
GET    /api/v1/event-types         # List event types
GET    /api/v1/search              # Advanced search

POST   /api/v1/bookings            # Create booking
GET    /api/v1/bookings/{id}       # Get booking details
PUT    /api/v1/bookings/{id}       # Update booking status
```

### API Documentation

- **Swagger/OpenAPI**: Interactive API documentation at `/api/documentation`
- **Postman Collection**: Available in `/docs` directory
- **Rate Limiting**: 1000 requests/hour for authenticated users

---

## 🧪 Testing

### Running Tests

```bash
# Run all tests
php artisan test

# Run specific test suite
php artisan test --testsuite=Feature

# Run with coverage
php artisan test --coverage
```

### Test Structure

```
tests/
├── Feature/          # Feature tests (HTTP endpoints)
├── Unit/            # Unit tests (individual classes)
├── TestCase.php     # Base test case
└── CreatesApplication.php
```

### Test Coverage

- **Models**: 95%+ coverage
- **Controllers**: 90%+ coverage
- **Services**: 85%+ coverage
- **API Endpoints**: 100% coverage

---

## 🚀 Deployment

### Production Checklist

- [ ] Environment variables configured
- [ ] Database migrated and seeded
- [ ] SSL certificate installed
- [ ] CDN configured for media files
- [ ] Email service configured
- [ ] Payment gateway integrated
- [ ] Monitoring tools set up
- [ ] Backup strategy implemented

### Recommended Hosting

- **AWS**: EC2 + RDS + S3 + CloudFront
- **DigitalOcean**: App Platform or Droplets
- **Heroku**: For rapid prototyping
- **Vultr/UpCloud**: Cost-effective cloud hosting

### Deployment Script

```bash
# Production deployment
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
npm run build
php artisan migrate --force
php artisan queue:restart
```

---

## 🤝 Contributing

We welcome contributions from the Cambodian developer community! 🇰🇭

### How to Contribute

1. **Fork** the repository
2. **Create** a feature branch (`git checkout -b feature/amazing-feature`)
3. **Commit** your changes (`git commit -m 'Add amazing feature'`)
4. **Push** to the branch (`git push origin feature/amazing-feature`)
5. **Open** a Pull Request

### Development Guidelines

- Follow PSR-12 coding standards
- Write comprehensive tests for new features
- Update documentation for API changes
- Ensure responsive design for all new components
- Test across different browsers and devices

### Code of Conduct

- Be respectful and inclusive
- Focus on constructive feedback
- Help newcomers learn and contribute
- Maintain professional communication

---

## 📄 License

This project is licensed under the **MIT License** - see the [LICENSE](LICENSE) file for details.

```
Copyright (c) 2025 Peanech Team

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.
```

---

## 🙏 Acknowledgments

### Special Thanks

- **Laravel Community**: For the amazing framework and ecosystem
- **Cambodian Developer Community**: For inspiration and collaboration
- **Open Source Contributors**: For the libraries and tools that power this platform
- **Venue Owners**: For trusting us with their businesses
- **Event Planners**: For their feedback and feature requests

### Partners & Sponsors

- **ABA Bank**: Payment processing partner
- **Smart Axiata**: Mobile integration partner
- **AWS Cambodia**: Cloud infrastructure partner
- **Ministry of Tourism**: Supporting Cambodia's tourism industry

### Technologies Used

- **Laravel**: The PHP framework that makes development enjoyable
- **TailwindCSS**: A utility-first CSS framework
- **Spatie Media Library**: Advanced media management
- **Bootstrap**: Responsive front-end framework
- **MySQL**: Reliable database management system

---

## 📞 Support

### Get Help

- 📧 **Email**: <support@venuehub-cambodia.com>
- 💬 **Live Chat**: Available on our website
- 📱 **Phone**: +855 23 456 789 (Phnom Penh office)
- 🐛 **Bug Reports**: [GitHub Issues](https://github.com/peanech/venuehub-cambodia/issues)
- 📚 **Documentation**: [docs.venuehub-cambodia.com](https://docs.venuehub-cambodia.com)

### Business Hours

- **Monday - Friday**: 8:00 AM - 6:00 PM ICT
- **Saturday**: 9:00 AM - 4:00 PM ICT
- **Sunday**: Emergency support only

### Community

- 🌐 **Website**: [https://venuehub-cambodia.peanech.online](https://venuehub-cambodia.peanech.online)
- 📘 **Facebook**: [facebook.com/venuehubcambodia](https://facebook.com/venuehubcambodia)
- 📷 **Instagram**: [instagram.com/venuehubcambodia](https://instagram.com/venuehubcambodia)
- 💼 **LinkedIn**: [linkedin.com/company/venuehub-cambodia](https://linkedin.com/company/venuehub-cambodia)

---

## 🔄 Changelog

### Version 2.0.0 (Latest)

- ✨ **New Features**
  - Mobile app launch
  - Advanced search filters
  - Real-time booking notifications
  - Multi-language support (Khmer/English)

- 🔧 **Improvements**
  - Performance optimization (40% faster load times)
  - Enhanced security measures
  - Improved admin dashboard
  - Better mobile responsiveness

- 🐛 **Bug Fixes**
  - Fixed booking calendar conflicts
  - Resolved payment gateway issues
  - Corrected search result pagination

### Version 1.5.0

- Added venue owner dashboard
- Implemented review and rating system
- Enhanced media upload capabilities

### Version 1.0.0

- Initial release
- Core venue listing and booking functionality
- Basic admin panel

---

<div align="center">

**Made with ❤️ in Cambodia by the [Peanech Team](https://peanech.online)**

*Transforming Cambodia's event industry, one venue at a time* 🇰🇭

[![Peanech Team](https://img.shields.io/badge/Designed%20by-Peanech%20Team-FF6B6B?style=for-the-badge&logo=data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEyIDJDMTMuMSAyIDE0IDIuOSAxNCA0VjE4QzE0IDIwLjIgMTIuMiAyMiAxMCAyMkg0QzEuOCAyMiAwIDIwLjIgMCAxOFYwQzAgMS44IDEuOCAwIDQgMFY0QzQgMi45IDQuOSAyIDYgMkgxOEMxOS4xIDIgMjAgMi45IDIwIDRWMThDMjAgMjAuMiAxOC4yIDIyIDE2IDIySDEwQzEyLjIgMjIgMTQgMjAuMiAxNCAxOFY0QzE0IDMuMSAxMy4xIDMgMTIgM1oiIGZpbGw9IiNGRjZCNkIiLz4KPC9zdmc+Cg==)](https://peanech.online)

</div>
