<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ShortLinky</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="482" height="100" viewBox="0 0 482 100">
                        <image x="11" y="9" width="461" height="83" xlink:href="data:img/png;base64,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"/>
                      </svg>
                    </a>
                </div>



                        <div class="p-6">
                            <div class="flex items-center">

                            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"method="POST" action="{{ route('generate.shorten.link.post') }}">
                                @csrf
                                <div class="input-group mb-3">
                                    @if (Session::has('success'))
                                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                                    <div class="flex">
                                        <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                        <div>

                                        <p>
                                            {!! Session::get('success') !!}
                                        </p>

                                        </div>
                                    </div>
                                    </div>
                                    @endif
                                    <small>URL should include "https://..."</small>
                                  <input type="url" required name="link" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter fully qualified URL" >
                                  <small>Custom path must be 5-9 alphanumeric characters</small>
                                  <input type="text" maxlength="9" minlength="5" pattern="[a-zA-Z0-9]{5,9}" name="code" class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter custom path (optional)" >
                                  <div class="input-group-append">
                                    <small>If you provide a custom path that already exists we will try to make one that you'll still be happy with.</small>
                                    <button class="shadow appearance-none border bg-blue-300 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="submit">Generate ShortLinky</button>

                                  </div>
                                </div>
                            </form>


                        </div>



                        </div>



                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">

                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <a href="https://bjbassett.org" class="">By Bryan Bassett &bull; 2020</a>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </body>
</html>