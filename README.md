<img src="https://github.com/user-attachments/assets/9bb08b29-b35b-4094-b49d-6642bd7ce705" alt="Imagem" height="80">

## About the project

This is a simple polling platform built with Laravel and Livewire. Created for portfolio purposes to practice component-based development and Eloquent relationships.

#### Features

- Create polls  
- Vote on options  
- Delete polls  

#### Technologies

- Laravel  
- Livewire  
- PHP  
- Tailwind CSS  
- SQLite  

## Main files

#### Routes

- [routes/web.php](routes/web.php) – Application route definitions  

#### Models

- [app/Models/Poll.php](app/Models/Poll.php) – Poll model  
- [app/Models/Option.php](app/Models/Option.php) – Option model  
- [app/Models/Vote.php](app/Models/Vote.php) – Vote model  

#### Livewire Components

- [app/Http/Livewire/CreatePoll.php](app/Http/Livewire/CreatePoll.php) – Handles poll creation  
- [app/Http/Livewire/AvailablePolls.php](app/Http/Livewire/AvailablePolls.php) – Displays available polls  

#### Views

- [resources/views/app.blade.php](resources/views/app.blade.php) – Base layout file that includes the HTML structure, Livewire scripts, and slots for rendering page content
- [resources/views/livewire/create-poll.blade.php](resources/views/livewire/create-poll.blade.php) – Poll creation form  
- [resources/views/livewire/available-polls.blade.php](resources/views/livewire/available-polls.blade.php) – List of polls with voting options  
