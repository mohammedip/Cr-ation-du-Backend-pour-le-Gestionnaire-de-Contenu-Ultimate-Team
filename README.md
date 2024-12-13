# Cr-ation-du-Backend-pour-le-Gestionnaire-de-Contenu-Ultimate-Team

# FUT Champions Ultimate Team Backend

## Project Description
This project focuses on developing the backend for the FUT Champions Ultimate Team platform using procedural PHP and MySQLi. The goal is to create a robust content management system for managing players, teams, nationalities, and related entities. Additionally, an internationalization (i18n) feature will be implemented to support multiple languages on the platform.

## Features

### Data Analysis and Optimization
- **JSON Analysis**: Analyze the provided JSON file to design an optimal database structure.
- **Database Normalization**: Apply normalization principles to avoid redundancy and optimize data.
- **Relational Schema**: Create efficient schemas to manage entities like players, teams, and nationalities.

### Entity Management
- Add, modify, delete, and list entities.
- Manage relationships between entities (e.g., associating a player with a team and nationality).

### Dashboard and Statistics
- Design a dynamic dashboard to visualize key statistics (e.g., number of players, distribution by nationality, team performances).
- Integrate interactive charts and graphs using libraries like Chart.js.

### Internationalization (i18n)
- Implement a multilingual support system.
- Manage separate language files (e.g., `fr.php`, `en.php`, `es.php`).
- Allow users to switch languages via a dashboard option.

### Script Documentation
- Provide clear and concise documentation for each PHP script.
- Add inline comments to explain code logic.
- Include README files with configuration and usage instructions.

### Bonus Features
- Use AJAX for asynchronous operations (e.g., dynamic content loading, validation without page reload).
- Integrate modals for a seamless user experience (e.g., entity management forms in modal windows).
- Visualize statistics with interactive charts.

## User Stories

### US01: Player Management
As an administrator, I want to add, modify, delete, and list players to maintain an up-to-date database.

### US02: Team Management
As an administrator, I want to create and manage teams to organize competitions effectively.

### US03: Internationalization (Bonus)
As a user, I want the ability to switch the interface language to my preferred language.

### US04: Dynamic Statistics
As an administrator, I want to view key platform statistics on a dashboard to better understand its usage.

### US05: Smooth Navigation (Bonus)
As a user, I want to perform actions without page reloads using AJAX to enhance my user experience.
