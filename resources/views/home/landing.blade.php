<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'JobList') }}</title>

    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
<header class="preview">
    <section class="landing-title">
        <h1>JobList</h1>
        <p>The best way to compare jobs!</p>
        <a href="/register" class="register-button">Register</a>
    </section>
    <section class="preview-images">
        <img class="first-preview-image" src="/images/jobview.png"/>
        <img class="middle-preview-image" src="/images/joblist.png"/>
        <img class="last-preview-image" src="/images/overview.png"/>
    </section>
</header>
<main class="landing-page">

    <section class="selling-point">
        <section class="selling-point-details selling-point-details-left">
            <h1><span class="selling-point-highlight">Import</span> jobs</h1>
            <p>Compare 150+ jobs in one click.</p>
        </section>
        <section class="selling-point-preview">
            <img src="/images/importjobs.png"/>
        </section>
    </section>

    <section class="selling-point">
        <section class="selling-point-details selling-point-details-right">
            <h1><span class="selling-point-highlight">Compare</span> jobs</h1>
            <p>List the pros and cons to help you choose.</p>
        </section>
        <section class="selling-point-preview">
            <img src="/images/comparejobs.png"/>
        </section>
    </section>

    <section class="selling-point">
        <section class="selling-point-details selling-point-details-left">
            <h1><span class="selling-point-highlight">Create</span> jobs</h1>
            <p>Easily add pros, cons, location details, tags and more.</p>
        </section>
        <section class="selling-point-preview">
            <img src="/images/createjob.png"/>
        </section>
    </section>
    </header>
</main>
</body>
</html>