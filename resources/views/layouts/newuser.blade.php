<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())}}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width", initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token()}}">
        <title>{{ config ('APP_NAME', 'The Midnight Library')}}</title>
        <link href="/css/main.css" rel="stylesheet" type="text/css">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>