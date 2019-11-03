<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>[+if $title+][+$title+][+else+]XXX TITLE[+/if+]</title>
        
        <link rel="stylesheet" type="text/css" media="screen" href="../includes/lib/bootstrap-4.3.1/dist/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="../includes/css/style.css"/>
        
        <!-- FontAwesome all.css -->
        <link rel="stylesheet" type="text/css" href="../includes/lib/fontawesome-free-5.9.0-web/css/all.css" />
        
        <!-- date range picker -->
        <script src="../includes/lib/daterangepicker-master/moment.min.js"></script>
        <link rel="stylesheet" href="../includes/lib/daterangepicker-master/daterangepicker.css"/>
        <script src="../includes/lib/daterangepicker-master/daterangepicker.js"></script>

    </head>
    <body style="padding-top: 70px;">
        <!-- assign=name var1=value -->
        [+include file='navbar3.tpl'+]

        [+include file='container.tpl'+]
        
    [+include file='footer.tpl'+]
