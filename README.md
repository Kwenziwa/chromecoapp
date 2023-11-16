
# Chronic Medication Collection (Chromeco)

Chromeco is a web app designed to enable patients to receive their chronic medication without enduring long queues in South African healthcare sectors. The creators of this project both hail from the rural township of KZN. Having been raised by elderly individuals who regularly collected their repeat medication from public clinics or hospitals, the elders experienced the pressure of waking up early to secure timely service. Unfortunately, they often returned home without assistance due to overcrowded health sectors where regular and new clients were indistinguishable.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Configuration](#configuration)
- [Contributing](#contributing)
- [License](#license)
- [Authors](#authors)

## Introduction

Chronic Medication Collection simplifies the management of chronic medication orders, providing a user-friendly interface for users to place and track their orders.

## Features

- **User Authentication**: Secure login and registration for users.
- **Medication Order Management**: Users can place, track, and manage their chronic medication orders.
- **Admin Panel**: Admins have access to a dashboard for managing medication orders and user accounts.

## Installation

Follow these steps to set up and run the Chronic Medication Collection locally.

### Prerequisites

- [PHP](https://www.php.net/) (>= 8.x)
- [Composer](https://getcomposer.org/)
- [Filament v3](https://filamentphp.com/) (for frontend assets)
- [MySQL](https://www.mysql.com/) 

### Steps

 1. Clone the repository:

```bash
   git clone https://github.com/Kwenziwa/chromecoapp.git
```

2. Install PHP dependencies:
```bash
   composer install
```
3. Copy the .env.example file to .env:
```bash
   cp .env.example .env
```
Dont forget to update the .env file with your database & email credentials.

4. Generate an application key:
```bash
   php artisan key:generate
```

5. Run database migrations:
```bash
   php artisan migrate
```

6. Serve the application:
```bash
   php artisan serve
```

## Usage
1. Register a user account or log in if you already have one.
2. Place chronic medication orders through the user dashboard.
3. Admins can manage orders and user accounts through the admin panel.

## Configuration
Adjust configuration options in the .env file as needed.

## Related projects

Here are a few related projects that align with the theme of health-tech and user-centric solutions:

1. HealthHub: Personal Health Management App

Description: HealthHub is a comprehensive personal health management application designed to empower users in tracking their health metrics, setting wellness goals, and accessing personalized health recommendations. The project focuses on user engagement and data-driven insights for proactive health management.

2. MediConnect: Medication Adherence Platform

Description: MediConnect is a platform addressing medication adherence challenges. It includes features such as medication reminders, interactive educational content, and a community forum for users to share experiences. The project aims to enhance medication adherence through a holistic approach.


## Contributing
Feel free to contribute to the project! Check out the Contributing Guidelines for more information.

## License
This project is licensed under the MIT License.
## Authors
- [Nosipho Khumalo](https://github.com/NosiphoSK1208)
- [Kwenziwa Khanyile](https://www.github.com/kwenziwa)

