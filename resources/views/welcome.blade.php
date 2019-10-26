<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
            }

            .container{
                margin: 10px 20px 10px 20px;
            }

            .title {
                font-size: 4rem;
                text-align: center;
            }

            a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <h1 class="title">Movies API</h1>
            <section>
                <h2>Endpoints</h2>
                <ul>
                    <li>
                        <p>
                            <strong>Get a list of upcoming movies</strong><br>
                            <i>page param is a optional param</i><br>

                           <code> https://pacific-atoll-01908.herokuapp.com/api/movies/{page?}</code>
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>Get details of a movie by id</strong><br>

                            <code>https://pacific-atoll-01908.herokuapp.com/api/movie/{movie_id}</code>
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>Search for movies by query</strong><br>
                            <i>page param is a optional param</i><br>

                            <code>https://pacific-atoll-01908.herokuapp.com/api/search/{query}/{page?}</code>
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>Get a list of genres</strong><br>

                            <code>https://pacific-atoll-01908.herokuapp.com/api/genres</code>
                        </p>
                    </li>
                </ul>
            </section>
            <section>
                <h2>Source code</h2>
                <ul>
                    <li>
                        <a href="https://github.com/talitastravassos/movies-api">Github</a>
                    </li>
                </ul>
            </section>
        </div>
    </body>
</html>
