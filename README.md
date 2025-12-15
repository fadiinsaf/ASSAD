# ASSAD - Virtual Zoo for AFCON 2025

## 📋 Project Description
ASSAD is a dynamic website developed for the 2025 Africa Cup of Nations (AFCON) hosted in Morocco. The platform aims to promote the Atlas lions and other African wildlife to supporters and visitors by offering interactive educational tours and virtual guided visits.

## 🎯 Main Objectives
- Promote African wildlife, especially the Atlas lions
- Provide an interactive educational experience for visitors
- Facilitate the management of virtual guided tours
- Provide statistics on animal conservation

## ✨ Key Features

### 🔐 Security & Authentication
- Role-based access control (Visitor, Guide, Administrator)
- Secure password hashing and encryption
- Server-side validation with Regex patterns
- Protected admin functionality

### 🦁 Animal Exploration
- Comprehensive animal database with images and details
- Special featured profile "Asaad – Atlas Lion"
- Filter animals by habitat and African country
- Interactive gallery showcasing African wildlife

### 🧭 Virtual Tour System
- Guided tour creation and management for guides
- Tour booking system for visitors
- Bulk tour step management and ordering
- Tour search and filtering capabilities

### 📊 Administration
- Complete CRUD operations for animals and habitats
- User management with approval workflows
- Real-time statistics and analytics dashboard
- Content management system

### 💬 Community Features
- Visitor reviews and ratings on completed tours
- Comment system with pagination
- Booking history and invoice generation

## 👥 User Roles

### 👤 Visitor
- Browse animal profiles with filtering options
- Search and book guided tours
- View the special profile "Asaad – Atlas Lion"
- Leave comments and ratings on completed tours
- Print invoices for completed tours

### 🧭 Guide
- Create, edit, and cancel guided tours
- Bulk management of tour steps/itineraries
- View reservations for their tours
- Organize the order of tour steps
- Define tour details (title, description, date, time, price, language, capacity)

### 🧑‍💻 Administrator
- User management (activate/deactivate accounts, approve guide roles)
- Full CRUD operations for animals and habitats
- View site statistics and analytics
- Manage platform content
- Monitor system performance

## 🗄️ Database Structure

### Main Tables
- **users**: User account management (Visitor, Guide, Admin)
- **animals**: Detailed animal profiles with images
- **habitats**: Information about different zoo habitats
- **guided_tours**: Schedule and details of guided tours
- **tour_steps**: Steps composing tour itineraries
- **reservations**: Visitor bookings for tours
- **comments**: Visitor feedback and ratings on tours

### Entity Relationships
- Animals belong to habitats
- Guided tours are created by guides
- Reservations link visitors to tours
- Comments are linked to tours and users
- Tour steps are organized in sequences

## 🗄️ Database Structure

### Main Tables
- **users**: User account management (Visitor, Guide, Admin)
- **animals**: Detailed animal profiles with images
- **habitats**: Information about different zoo habitats
- **guided_tours**: Schedule and details of guided tours
- **tour_steps**: Steps composing tour itineraries
- **reservations**: Visitor bookings for tours
- **comments**: Visitor feedback and ratings on tours


## 🛠️ Technical Requirements

### Backend Implementation
- Secure authentication system with password hashing
- Server-side validation using Regex patterns for emails, passwords, names
- SQL queries with joins for complex data retrieval
- Reliable server-side logic for critical operations (booking, capacity updates)
- Transaction management for data integrity

### Frontend Implementation
- Responsive design for all devices
- Interactive JavaScript animations for tour displays
- Pagination for animal lists and comment history
- Interactive image gallery/carousel
- Form validation and user feedback

### Development Requirements
- UML use case diagram for main interactions
- Detailed ERD/class diagram for database design
- Implementation of pagination for animal lists and comment history
- Secure session management
- Error handling and logging


## 📅 Project Timeline
- **Start Date**: December 15, 2025 at 9:30 AM
- **Submission Deadline**: December 19, 2024 before 23:59
- **Working Duration**: 5 days (Individual work)

## 📁 Project Structure
The project includes all functional requirements specified in the user stories, focusing on delivering a complete, secure, and user-friendly virtual zoo experience for AFCON 2025 visitors.

## 👍 Author
**Fadi Insaf** – [GitHub](https://github.com/fadiinsaf) | [Email](mailto:fadiinafff@gmail.com)