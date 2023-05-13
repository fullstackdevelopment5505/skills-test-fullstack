<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css" />
        <title>Contact Form Demo Project</title>

    </head>
    <body>
        <header>
            <h1>
                Contact Form Demo Project
            </h1>
        </header>
        <main>
            <div class="top">
                <img src="/images/left.svg" loading="lazy" alt="..."/>
                <img src="/images/right.svg" loading="lazy" alt="..."/>
            </div>
            @if(session()->has('message'))
                <div class="alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <form action="/process" method="POST">
                @csrf
                <div>
                    <div>
                        <label for="name">
                            Active <span> * </span>
                        </label>
                        <input type="text" name="name" id="name" placeholder="Active Input" class="@error('name') danger @enderror" />
                        @error('name')
                            <div class="alert alert-danger">  * requred</div>
                        @enderror
                    </div>
                    <div>
                        <label for="email">
                            Error <span> * </span>
                        </label>
                        <input type="text" name="email" id="email" placeholder="Validation Error" class="@error('email') danger @enderror"/>
                        @error('email')
                            <div class="alert alert-danger">  Please Provide a Valid Email</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <div>
                        <label for="phone">
                            Default <span> * </span>
                        </label>
                        <input type="text" name="phone" id="phone" placeholder="Default Input" class="@error('phone') danger @enderror" />
                        @error('name')
                            <div class="alert alert-danger">  * requred</div>
                        @enderror
                    </div>
                    <div>
                        <label for="subject">
                            Drop-Down <span> * </span>
                        </label>
                        <select name="subject" id="subject" class="@error('subject') danger @enderror">
                            <option value=""> - Please Select One - </option>
                            <option value="test"> - test - </option>
                        </select>
                        @error('name')
                            <div class="alert alert-danger">  * requred</div>
                        @enderror
                    </div>
                </div>
                <div class="message">
                    <label for="message">
                        Your Message <span> * </span>
                    </label>
                    <textarea name="message" id="message" class="@error('message') danger @enderror"></textarea>
                    @error('name')
                        <div class="alert alert-danger">  * requred</div>
                    @enderror
                </div>
                <div class="form-action">
                    
                    <button type="submit">
                        Submit
                    </button>
                    <div>
                        <span>* Required Fields.</span> Please be aware that we cannot ensure that communications sent over the Internet are secure. This includes correspondence sent through this form or by email. If you are uncomfortable with such risks, you may contact us by phone instead of using this form.
                    </div>
                </div>
            </form>
        </main>
        <footer>
            <div>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                </p>
                <p>
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                </p>
            </div>
            <img src="/images/thank-you.png" loading="lazy" alt="...">
        </footer>
    </body>
</html>
