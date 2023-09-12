
# Task Manager Web Application

A web application built with Laravel for managing tasks, providing task creation, editing, deletion, and task reordering with drag-and-drop functionality. Additionally, it supports task prioritization, and if you choose to enable the bonus feature, it includes project functionality.

## Features

- Create tasks with task name, priority, and timestamps.
- Edit existing tasks.
- Delete tasks.
- Reorder tasks with drag-and-drop functionality. Priority is updated automatically.
- Save tasks to a MySQL database.
- **Bonus Feature**: Project functionality allows you to associate tasks with projects.

## Getting Started

Follow these instructions to set up and run the Task Manager web application on your local machine.

### Prerequisites

- [Composer](https://getcomposer.org/download/)
- [PHP](https://www.php.net/manual/en/install.php)
- [MySQL](https://dev.mysql.com/downloads/installer/)
- [Laravel](https://laravel.com/docs/8.x/installation)

### Installation

1. Clone this repository to your local machine:

   ```bash
   git clone https://github.com/your-username/task-manager.git
   ```

2. Navigate to the project directory:

   ```bash
   cd task-manager
   ```

3. Install project dependencies:

   ```bash
   composer install
   ```

4. Create a copy of the `.env.example` file as `.env`:

   ```bash
   cp .env.example .env
   ```

5. Generate an application key:

   ```bash
   php artisan key:generate
   ```

6. Configure your `.env` file with the appropriate database settings.

7. Run database migrations:

   ```bash
   php artisan migrate
   ```

8. Start the Laravel development server:

   ```bash
   php artisan serve
   ```

9. Open your web browser and visit `http://localhost:8000` to access the application.

### Usage

- Create tasks by providing task name, priority, and timestamps.
- Edit existing tasks by clicking the "Edit" button.
- Delete tasks by clicking the "Delete" button.
- Reorder tasks using drag-and-drop functionality. Task priorities are updated automatically.
- **Bonus Feature**: If you've enabled project functionality, you can associate tasks with specific projects.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request if you have any improvements or bug fixes.


## Acknowledgments

- Laravel - The PHP web application framework used in this project.

---
## note
Refreced from ChatGPT
