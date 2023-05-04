# Fullstack Skills Test

## Getting Started
To get started, we suggest forking this repository and writing your code there. Alternatively, you can download the repository as a .zip file to set it up locally.

**Forking Our Repo**
- Fork this repo
- Begin local setup (instructions below)
- Push up changes as needed to your **locally forked copy**
- Because you forked our version we will have access right off the bat, nothing else is needed in terms of permissions/access

**Locally Downloading**
- Download our repo 
- Begin local setup (instructions below)
- Please share with GH users "ivi-admin", "iv-craig", and "iv-agatha" when you are done


## Submitting your work
- You have 7 days from the initial interview to complete the assessment
- When you are done, please email **sowmya.raj@iv.agency**
- The development team at IV Interactive will schedule an in person meeting (Zoom) if you pass

## Next Steps
Be prepared to review your submission with our team which will include one of our lead developers. The following will be part of the review:
- A walkthrough from you about your submission 
- Comments and questions from us about the code


## Setup

To set up the project, you'll need an environment with both PHP and MySQL. We **recommend** one of the following for Laravel:

- [Homestead](https://laravel.com/docs/9.x/homestead) (Virtual machine)
    - Software requirements
        - [Vagrant](https://www.vagrantup.com/downloads)
        - [Virtualbox](https://www.virtualbox.org/wiki/Downloads) or [Parallels](https://www.parallels.com/products/desktop/)
        - PHP 8.1: Specify `php: "8.1"` in the site block when setting up your Homestead.yaml file
- [Sail](https://laravel.com/docs/9.x/sail) (Docker image)
    - Software requirements
        - [Docker](https://docs.docker.com/get-docker/)
        - [Docker Compose](https://docs.docker.com/compose/install/)

We would prefer the options above, but if you have setup issues use XAMPP or any other method. 
- [XAMPP](https://www.apachefriends.org/index.html)

1. Copy either `.env.homestead.example` or `.env.sail.example` to `.env`, depending on which environment you're using.
2. Run setup commands (use `php` if using SSH into Homestead or XAMPP, or `./vendor/bin/sail` if using Sail):
    - `(php|./vendor/bin/sail) artisan key:generate`
    - `(php|./vendor/bin/sail) artisan migrate`

## Objective
Create a single responsive page using PHP, HTML, CSS, and JavaScript. Design comp is listed below and is included in the email. The web page should be setup initially with a responsive design in mind. **The mockup should be as closely recreated as possible.**


## Goals

- Match the styling of the [provided Figma comp](https://www.figma.com/file/APjNaRXPAUe1l3Cwg0b5Gl/IVI---Test-Form?node-id=1%3A4)
- Use CSS preprocessors like SASS
- Use CSS Flexbox
- Implement responsive styling
- Lazyload images
- Submit the form via XHR or the Fetch API (we use Axios)
- Handle form validation issues and successful form submissions with messaging, styling updates, and animations

## Notes

- While the backend processing of form submissions is provided, feel free to customize in any way necessary
- Image assets can be extracted from the provided Figma comp and can also be found in the [public/images directory](public/images)
- Existing routes can be found in the routes/web.php file
- Form submissions in Laravel require a CSRF token provided by the framework ([documentation](https://laravel.com/docs/9.x/csrf))
- Do not use **Bootstrap** or **jQuery**
- Use [Google Fonts](https://fonts.google.com/)

## FAQs

**Why isn't this working?**  
- If you're receiving a 500 error, check the log files in `storage/logs`.
- If you're using Sail and it seems like a network issue, make sure that the MySQL, Redis and Memcached connections point to image names rather than IP addresses, since that's how images connect to each other on the network.
- If you're experiencing network issues with Homestead, make sure all of the connections point to 127.0.0.1.
- If using Sail and you have a MySQL connection issue, try removing the volume and bringing the images back up to rebuild them, in case you made any updates to the .env after the initial build.
- If using Homestead, make sure that you SSH into the virtual machine to run any `php artisan` commands or to use `composer`.

**I'm connected to the database but the contact form submissions won't save**  
- Check your field names to make sure that they match the fields defined in `app/Models/Contact.php`.
