<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Form Demo Project</title>

    </head>
    <body>
        <header>
            <h1>
                Contact Form Demo Project
            </h1>
        </header>
        <main>
            <form action="/process" method="POST">
                <div>
                    <div>
                        <label for="name">
                            Active
                        </label>
                        <input type="text" name="name" id="name" placeholder="Active Input" />
                    </div>
                    <div>
                        <label for="email">
                            Error
                        </label>
                        <input type="text" name="email" id="email" placeholder="Validation Error" />
                    </div>
                </div>
                <div>
                    <div>
                        <label for="phone">
                            Default
                        </label>
                        <input type="text" name="phone" id="phone" placeholder="Default Input" />
                    </div>
                    <div>
                        <label for="subject">
                            Drop-Down
                        </label>
                        <select name="subject" id="subject">
                            <option value="">Please Select One</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="message">
                        Your Message
                    </label>
                    <textarea name="message" id="message"></textarea>
                </div>
                <div>
                    @csrf
                    <button type="submit">
                        Submit
                    </button>
                    <div>
                        * Required Fields. Please be aware that we cannot ensure that communications sent over the Internet are secure. This includes correspondence sent through this form or by email. If you are uncomfortable with such risks, you may contact us by phone instead of using this form.
                    </div>
                </div>
            </form>
        </main>
        <footer>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </p>
            <p>
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </p>
            <img src="/images/thank-you.png">
        </footer>
    </body>
</html>
